<?php

use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_types_id')->unsigned()->default(1);
            $table->integer('project_statuses_id')->unsigned()->default(1);
            $table->integer('disassemblers_id')->unsigned()->default(3);
            $table->integer('creator_id')->unsigned()->default(1);
            $table->integer('company_id')->unsigned()->default(1);
            $table->string('directory_path')->nullable();
            $table->integer('sales_id')->unsigned()->default(7);
            $table->dateTime('project_start_date')->default(Carbon::now());
            $table->dateTime('asset_arrival_date')->nullable();
            $table->dateTime('projected_completion_date')->nullable();
            $table->dateTime('completion_date')->nullable();
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
        Schema::drop('projects');
    }
}
