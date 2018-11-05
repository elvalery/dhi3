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

  public function contact(StoreContacts $request) {
    $contact = Contact::create($request->validated());

    Mail::to(config('mail.to'))->send(new ContactRequest($contact));

    return response()->json($contact);
  }

  public function work(Work $work) {
    return view('work-modal', compact('work'));
    //return response()->json($work);
  }
}
