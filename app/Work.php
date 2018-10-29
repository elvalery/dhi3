<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model {
  public function categories() {
    return $this->belongsToMany(
      Category::class, 'work_category');
  }

  public function photos() {
    return $this->hasMany(WorkPhoto::class)->orderBy('order_id');
  }
}
