<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkPhotosTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('work_photos', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('work_id');
      $table->smallInteger('order_id');
      $table->string('link');
      $table->timestamps();
    });

    Schema::table('works', function (Blueprint $table) {
      $table->dropColumn(['image']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('work_photos');
    Schema::table('works', function (Blueprint $table) {
      $table->string('image');
    });
  }
}
