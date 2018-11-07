<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
  public function contacts() {
    return $this->belongsToMany(Contact::class, 'contact_action');
  }
}
