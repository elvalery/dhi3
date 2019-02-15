<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Contact;
use App\Work;
use App\Worker;
use App\DHIService;
use App\Http\Requests\StoreContacts;
use App\Mail\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

use Carbon\Carbon;

class IndexController extends Controller {
  public function index() {
    $categories = Category::orderBy('order_id')->get();
    $works = Work::orderBy('order_id')->get();
    $services = DHIService::orderBy('order_id')->get();

    $callback_time = [];
    $date = new Carbon('tomorrow 9 am');
    $datefinal = new Carbon('tomorrow 9 pm');
    while ($date <= $datefinal) {
      $callback_time[] = $date->format('h a');
      $date->addHour();
    }

    return view('index', compact('categories', 'works', 'services', 'callback_time'));
  }

  public function contacts(StoreContacts $request) {
    $contact = Contact::create($request->validated());

    if ($request->hasFile('file') && $request->file('file')->isValid()) {
      $path = $request->file->store('form', 'public');
      $contact->file = url('storage/'. $path);
      $contact->path = storage_path($path);
    }

    if ($request->has("action")) {
      foreach ($request->get('action') as $action) {
        $contact->actions()->attach(\App\Action::find($action));
      }
    }

    if ($request->has("time") && $contact->description == 'Call me tomorrow') {
      $contact->description = $contact->description . ' at ' . $request->get("time");
    }

    $contact->save();

    Mail::to(config('mail.to'))
      ->cc(config('mail.cc'))
      ->send(new ContactRequest($contact));

    return response()->json($contact);
  }

  public function work(Work $work) {
    return response()->json([
      'title' => $work->name,
      'html' => (View::make('work-modal', compact('work')))->render(),
    ]);
  }

  public function html($file) {
    return response()->file(public_path('/html/' . $file));
  }

  public function service($id) {
    $service = DHIService::find($id);

    $content = file_get_contents(public_path('/html/service' . $id . '.html'));

    return response()->view('service',compact('service', 'content'));
  }

  public function team($id) {
    $worker = Worker::find($id);

    $content = file_get_contents(public_path('/html/worker' . $id . '.html'));

    return response()->json([
      'description' => $content,
      'portfolio' => view('worker',compact('worker'))->render(),
    ]);
  }
}
