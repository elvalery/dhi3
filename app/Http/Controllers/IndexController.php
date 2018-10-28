<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Contact;
use App\Http\Requests\StoreContacts;


class IndexController extends Controller {
  public function index() {
    $categories = Category::orderBy('order_id')->get();

    return view('index', compact('categories'));
  }

  public function contact(StoreContacts $request) {
    $contact = Contact::create($request->validated());

    Mail::to(config('mail.to'))->send(new ContactRequest($contact));

    return response()->json($contact);
  }
}
