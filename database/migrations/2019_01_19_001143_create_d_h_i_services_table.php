<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\DHIService;

class CreateDHIServicesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('dhi_services', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('pre_style');
      $table->string('small_image');
      $table->smallInteger('order_id');
      $table->timestamps();
    });

    DHIService::insert([
      [
        'title'        => 'CAD Drafting',
        'order_id'        => '1',
        'pre_style' => 'lg',
        'small_image' => 'img/service_1.jpg',
      ],
      [
        'title'        => '3D Modeling & BIM',
        'order_id'        => '2',
        'pre_style' => 'lg',
        'small_image' => 'img/service_2.jpg',
      ],
      [
        'title'        => 'CGI\'s & 3D Animation',
        'order_id'        => '3',
        'pre_stylepre_style' => 'md',
        'small_image' => 'img/service_3.jpg',
      ],
      [
        'title'        => 'Graphic Design',
        'order_id'        => '4',
        'pre_style' => 'md',
        'small_image' => 'img/service_4.jpg',
      ],
      [
        'title'        => 'Remote Desktop',
        'order_id'        => '5',
        'pre_style' => 'md',
        'small_image' => 'img/service_5.jpg',
      ],
      [
        'title'        => 'Hand Sketch',
        'order_id'        => '6',
        'pre_style' => 'md',
        'small_image' => 'img/service_6.jpg',
      ],
      [
        'title'        => 'Design Adaptation',
        'order_id'        => '7',
        'pre_style' => 'md',
        'small_image' => 'img/service_7.jpg',
      ],
      [
        'title'        => 'On-Site Supervision',
        'order_id'        => '8',
        'pre_style' => 'md',
        'small_image' => 'img/service_8.jpg',
      ]]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('dhi_services');
  }
}
