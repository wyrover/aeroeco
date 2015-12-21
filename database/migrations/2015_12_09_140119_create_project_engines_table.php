<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectEnginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_engines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->string('position');
            $table->string('engine_type_variant')->nullable();
            $table->string('engine_msn')->nullable();
            $table->string('owner')->nullable();
            $table->string('task')->nullable();
            $table->string('stand_provider')->default('ADC');
            $table->boolean('MPA')->default(false);
            $table->boolean('boroscope')->default(false);
            $table->boolean('storage_program')->default(false);
            $table->string('path_engine_trace')->nullable();
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
        Schema::drop('project_engines');
    }
}
