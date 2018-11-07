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
      'name' => 'sometimes|nullable|max:255',
      'phone' => 'required',
      'email' => 'sometimes|nullable|email',
      'description' => 'sometimes|nullable|string',
      'type' => [
        'required',
        Rule::in(Contact::getAllTypes()),
      ],
      'action[]' => [
        'sometimes',
        'nullable',
        Rule::in(Action::all('id')),
      ],
      'file' => 'sometimes|nullable|max:20480'
    ];
  }
}
