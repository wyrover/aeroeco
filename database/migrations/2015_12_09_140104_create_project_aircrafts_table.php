<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectAircraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_aircrafts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->string('msn')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('tail')->nullable();
            $table->boolean('has_incident')->default(false);
            $table->string('owner')->nullable();
            $table->string('last_operator')->nullable();
            $table->integer('country_id')->unsigned();
            $table->integer('model_year')->nullable();
            $table->integer('flight_hours')->nullable();
            $table->integer('cycles')->nullable();
            $table->string('apu_stands_provider')->default('ADC');
            $table->string('landing_gear_stands_provider')->default('ADC');
            $table->string('thrust_reverser_stands_provider')->default('ADC');
            $table->string('path_proof_ownership')->nullable();
            $table->string('path_denied_party')->nullable();
            $table->string('path_nis')->nullable();
            $table->string('path_trace')->nullable();
            $table->string('path_proof_insurance')->nullable();
            $table->string('path_amm')->nullable();
            $table->string('path_ipc')->nullable();
            $table->string('path_plane_image')->nullable();
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
        Schema::drop('project_aircrafts');
    }
}
