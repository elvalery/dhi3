<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Contact;
use App\Work;
use App\Http\Requests\StoreContacts;
use App\Mail\ContactRequest;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller {
  public function index() {
    $categories = Category::orderBy('order_id')->get();
    $works = Work::orderBy('order_id')->get();

    return view('index', compact('categories', 'works'));
  }

  public function contacts(StoreContacts $request) {
    $contact = Contact::create($request->validated());

    if ($request->hasFile('file') && $request->file('file')->isValid()) {
      $path = $request->file->store('form', 'public');
      $contact->file = url('storage/'. $path);
      $contact->path = storage_path($path);
      $contact->save();
    }
    Mail::to(config('mail.to'))->send(new ContactRequest($contact));

    return response()->json($contact);
  }

  public function work(Work $work) {
    return view('work-modal', compact('work'));
  }

  public function html($file) {
    return response()->file(public_path('/html/' . $file));
  }
}
