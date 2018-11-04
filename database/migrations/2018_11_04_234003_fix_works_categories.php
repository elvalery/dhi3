<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Category;

class FixWorksCategories extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Category::find(1)->update(['name' => 'Drafting', 'slug' => 'drafting']);
    Category::find(2)->update(['name' => 'Graphics', 'slug' => 'graphics']);
    Category::find(3)->update(['name' => 'Integrated collaboration', 'slug' => 'collaboration']);
    Category::find(4)->update(['name' => 'Adaptation', 'slug' => 'adaptation']);
    Category::find(5)->update(['name' => 'BIM', 'slug' => 'bim']);
    Category::find(6)->update(['name' => 'CGIs', 'slug' => 'cgi']);
    Category::insert([
      ['name' => 'Modelling', 'slug' => 'modelling', 'order_id' => '70']
    ]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Category::truncate();
    Category::insert([
      ['id' => '1', 'name' => 'Consulting', 'slug' => 'consulting', 'order_id' => '10'],
      ['id' => '2', 'name' => 'Architecture', 'slug' => 'architecture', 'order_id' => '20'],
      ['id' => '3', 'name' => 'Interior Design', 'slug' => 'interior', 'order_id' => '30'],
      ['id' => '4', 'name' => 'Graphic Design', 'slug' => 'graphic', 'order_id' => '40'],
      ['id' => '5', 'name' => 'Navigation', 'slug' => 'navigation', 'order_id' => '50'],
      ['id' => '6', 'name' => 'Urban Planning', 'slug' => 'urban', 'order_id' => '60']
    ]);

  }
}
