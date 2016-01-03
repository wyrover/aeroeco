<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('confirmed')->default(false);
            $table->string('confirmation_code')->nullable();
            $table->integer('company_id')->default(1);
            $table->boolean('all_companies')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->boolean('can_sell')->default(true);
            $table->integer('manager_id')->nullable();
            $table->integer('role_id')->default(4);
            $table->integer('tier')->default(4);
            $table->integer('location_id')->unsigned()->default(2);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
