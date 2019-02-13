<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model {

  public function categories() {
    return $this->belongsToMany(
      Category::class, 'work_category');
  }

  public function services() {
    return $this->belongsToMany(
      DHIService::class, 'dhi_service_work', 'work_id', 'dhiservice_id');
  }

  public function photos() {
    return $this->hasMany(WorkPhoto::class)->orderBy('order_id');
  }
}
