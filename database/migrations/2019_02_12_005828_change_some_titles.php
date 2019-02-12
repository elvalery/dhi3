<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\DHIService;
use App\Category;

class ChangeSomeTitles extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      $service = DHIService::where(['title' => '3D Modeling & BIM'])->first();
      $service->title = '3D Modelling & BIM';
      $service->save();

      $service = DHIService::where(['title' => 'Hand Sketch'])->first();
      $service->title = 'Hand-Drawn Sketch';
      $service->save();

      $category = Category::where(['name' => 'Integrated collaboration'])->first();
      $category->name = 'Integrated Collaboration';
      $category->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      $service = DHIService::where(['title' => '3D Modelling & BIM'])->first();
      $service->title = '3D Modeling & BIM';
      $service->save();

      $service = DHIService::where(['title' => 'Hand-Drawn Sketch'])->first();
      $service->title = 'Hand Sketch';
      $service->save();

      $category = Category::where(['name' => 'Integrated Collaboration'])->first();
      $category->name = 'Integrated collaboration';
      $category->save();
    }
}
