<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model {
  public function categories() {
    return $this->belongsToMany(
      Category::class, 'portfolio_category');
  }
}
