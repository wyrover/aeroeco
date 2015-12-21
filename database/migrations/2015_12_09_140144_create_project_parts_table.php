<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */
    public function up()
    {
        Schema::create('project_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('ATA');
            $table->boolean('in_project')->default(false);
            $table->boolean('can_sell')->default(false);
            $table->integer('part_listing_id')->unsigned();
            $table->integer('condition_id')->default(1);
            $table->integer('package_id')->nullable();
            $table->string('msn')->nullable();
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
        Schema::drop('project_parts');
    }
}
