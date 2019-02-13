<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PortfolioServiceChain extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema::create('dhi_service_work', function (Blueprint $table) {
        $table->integer('work_id');
        $table->string('dhiservice_id');

        $table->timestamps();

        $table->index(['work_id', 'dhiservice_id']);
      });

      Schema::table('works', function (Blueprint $table) {
        $table->string('short_name')->after('name')->nullable();
        $table->string('small_image')->after('cover')->nullable();
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      Schema::dropIfExists('dhi_service_work');

      Schema::table('works', function (Blueprint $table) {
        $table->dropColumn(['short_name', 'small_image']);
      });
    }
}
