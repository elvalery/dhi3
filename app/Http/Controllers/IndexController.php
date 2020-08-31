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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

use Carbon\Carbon;
use Illuminate\Support\Str;

class IndexController extends Controller {
  public function index() {
    $categories = Category::orderBy('order_id')->get();
    $works = Work::orderBy('order_id')->get();
    $services = DHIService::orderBy('order_id')->get();
    $active_worker = Worker::find(3);

    $callback_time = [];
    $date = new Carbon('tomorrow 9 am');
    $datefinal = new Carbon('tomorrow 9 pm');
    while ($date <= $datefinal) {
      $callback_time[] = $date->format('h a');
      $date->addHour();
    }

    return view('index', compact('categories', 'works', 'services', 'callback_time', 'active_worker'));
  }

  public function contacts(StoreContacts $request) {
    $contact = Contact::create($request->validated());

    if ($request->hasFile('file') && $request->file('file')->isValid()) {
      $name = $request->file('file')->getClientOriginalName();
      $ext = pathinfo($name, PATHINFO_EXTENSION);
      $dir = 'form/' . date('Y-m-d');
      do {
        $filename = $contact->id . '_' . Str::random(5) . '.' . $ext ;
      } while (Storage::disk('public')->exists($dir . '/' . $filename));
  
      $path = $request->file('file')->storeAs($dir, $filename, 'public');

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
  
    $mail_to = config('mail.to');
    if (!is_array($mail_to)) {
      $mail_to = [$mail_to];
    }
  
    foreach ($mail_to as $address) {
      Mail::to($address)->send(new ContactRequest($contact));
    }

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
