<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company')->nullable();
            $table->string('dba')->nullable();
            $table->string('corporation_type')->nullable();
            $table->integer('location_id')->unsigned()->default(1);
            $table->string('domain')->nullable();
            $table->string('folder_name')->nullable();
            $table->string('reply_to')->nullable();
            $table->string('website')->nullable();
            $table->integer('tier')->nullable();
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
        Schema::drop('companies');
    }
}
