<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Encore\Admin\Auth\Database\Permission;
use Encore\Admin\Auth\Database\Role;

class FixManagerRights extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Permission::insert([
        [
          'name'        => 'Orders',
          'slug'        => 'orders',
          'http_method' => '',
          'http_path'   => "/orders*",
        ]]);
      Role::first()->permissions()->save(Permission::find(7));
      Role::find(2)->permissions()->save(Permission::find(7));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
