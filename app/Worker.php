<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model {

  public function works() {
    return $this->belongsToMany(Work::class, 'work_worker',
      'worker_id', 'work_id');
  }
}
