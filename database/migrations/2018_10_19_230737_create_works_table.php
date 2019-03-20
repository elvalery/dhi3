<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Category;

class CreateWorksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('works', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('description')->ngit ullable();
      $table->string('cover');
      $table->string('image');
      $table->smallInteger('order_id');

      $table->timestamps();
    });

    Schema::create('work_images', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('work_id');
      $table->smallInteger('order_id');
      $table->string('link');
      $table->timestamps();
    });

    Schema::create('categories', function (Blueprint $table) {
      $table->increments('id');
      $table->string('slug');
      $table->string('name');
      $table->smallInteger('order_id');
      $table->timestamps();

      $table->unique('slug');
    });

    Schema::create('work_category', function (Blueprint $table) {
      $table->integer('work_id');
      $table->string('category_id');

      $table->timestamps();

      $table->index(['work_id', 'category_id']);
    });

    Category::insert([
      ['name' => 'Consulting', 'slug' => 'consulting', 'order_id' => '10'],
      ['name' => 'Architecture', 'slug' => 'architecture', 'order_id' => '20'],
      ['name' => 'Interior Design', 'slug' => 'interior', 'order_id' => '30'],
      ['name' => 'Graphic Design', 'slug' => 'graphic', 'order_id' => '40'],
      ['name' => 'Navigation', 'slug' => 'navigation', 'order_id' => '50'],
      ['name' => 'Urban Planning', 'slug' => 'urban', 'order_id' => '60']
    ]);

  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('works');
    Schema::dropIfExists('work_images');
    Schema::dropIfExists('categories');
    Schema::dropIfExists('work_category');
  }
}
