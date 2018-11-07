<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Contact;
use App\Action;

class StoreContacts extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'name' => 'max:255',
      'phone' => 'required',
      'email' => 'email',
      'description' => 'string',
      'type' => [
     //   'required',
        Rule::in(Contact::getAllTypes()),
      ],
      'action' => [
        Rule::in(Action::all('id')),
      ],
      'file' => 'max:20480'
    ];
  }
}
