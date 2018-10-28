<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

  protected $fillable = ['name', 'slug'];

  public function works() {
    return $this->belongsToMany(
      Work::class, 'work_category');
  }
}
