<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
  const TYPE_TEST = 'test';
  const TYPE_QUOTE = 'quote';
  const TYPE_ORDER = 'order';

  static public function getAllTypes() {
    return [
      Contact::TYPE_ORDER,
      Contact::TYPE_QUOTE,
      Contact::TYPE_TEST
    ];
  }
}
