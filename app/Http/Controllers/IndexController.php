<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Contact;
use App\Work;
use App\DHIService;
use App\Http\Requests\StoreContacts;
use App\Mail\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class IndexController extends Controller {
  public function index() {
    $categories = Category::orderBy('order_id')->get();
    $works = Work::orderBy('order_id')->get();
    $services = DHIService::orderBy('order_id')->get();

    return view('index', compact('categories', 'works', 'services'));
  }

  public function contacts(StoreContacts $request) {
    $contact = Contact::create($request->validated());

    if ($request->hasFile('file') && $request->file('file')->isValid()) {
      $path = $request->file->store('form', 'public');
      $contact->file = url('storage/'. $path);
      $contact->path = storage_path($path);
      $contact->save();
    }

    if ($request->has("action")) {
      foreach ($request->get('action') as $action) {
        $contact->actions()->attach(\App\Action::find($action));
      }
      $contact->save();
    }

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
}
