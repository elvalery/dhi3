<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DHIService extends Model
{
    protected $table = 'dhi_services';

    public function works() {
      return $this->belongsToMany(Work::class, 'dhi_service_work',
        'dhiservice_id', 'work_id');
    }
}
