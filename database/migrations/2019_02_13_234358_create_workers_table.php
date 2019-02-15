<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Worker;

class CreateWorkersTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('workers', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');

      $table->timestamps();
    });

    Schema::create('work_worker', function (Blueprint $table) {
      $table->integer('work_id');
      $table->string('worker_id');

      $table->timestamps();

      $table->index(['work_id', 'worker_id']);
    });

    Worker::insert([
      [ 'id' => 1, 'name' => 'CAD drafter'],
      [ 'id' => 2, 'name' => 'Modeller'],
      [ 'id' => 3, 'name' => 'Architectural Designer'],
      [ 'id' => 4, 'name' => 'Graduate Architect'],
      [ 'id' => 5, 'name' => 'Visualizer'],
      [ 'id' => 6, 'name' => 'BIM Manager'],
      [ 'id' => 7, 'name' => 'Account/Project Manager'],
      [ 'id' => 8, 'name' => 'Parametric Designer'],
      [ 'id' => 9, 'name' => 'Graphic Designer / Artist'],
    ]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('workers');
    Schema::dropIfExists('work_worker');
  }
}
