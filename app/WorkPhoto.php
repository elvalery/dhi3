<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkPhoto extends Model {
  protected $fillable = ['link', 'order_id'];

  public function work() {
    return $this->belongsTo(Work::class);
  }

}
