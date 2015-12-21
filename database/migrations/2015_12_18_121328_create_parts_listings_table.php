<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts_listings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ATA')->unsigned();
            $table->string('description')->nullable();
            $table->string('base_part_number')->nullable();
            $table->string('full_part_number')->nullable();
            $table->string('manufacturer')->nullable();
            $table->integer('package_id')->nullable(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parts_listings');
    }
}
