<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsortiumGlobalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consortium_globals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('abr');
            $table->string('address');
            $table->string('address2');
            $table->string('phone');
            $table->string('fax');
            $table->string('corporation_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('consortium_globals');
    }
}
