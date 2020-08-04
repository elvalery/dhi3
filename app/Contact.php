<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Contact extends Model {
  const TYPE_TEST = 'test_assignment';
  const TYPE_QUOTE = 'quote';
  const TYPE_ORDER = 'request_offer';
  const TYPE_CALL = 'request_a_call';

  static public function getAllTypes() {
    return [
      Contact::TYPE_ORDER,
      Contact::TYPE_QUOTE,
      Contact::TYPE_TEST,
      Contact::TYPE_CALL
    ];
  }

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'email', 'phone', 'type', 'description'];
  
  /**
   * The model's default values for attributes.
   *
   * @var array
   */
  protected $attributes = [
    'phone' => '',
  ];

  protected static function boot()
  {
    parent::boot();

    // before delete() method call this
    static::deleting(function($contact) {
      Storage::disk('public')->delete($contact->path);
    });
  }

  public function actions() {
    return $this->belongsToMany(Action::class, 'contact_action');
  }
}
