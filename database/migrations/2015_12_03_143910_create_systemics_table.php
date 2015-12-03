<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemicsTable extends Migration
{
    public function up()
    {
        Schema::create('systemics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('event');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('systemics');
    }
}
