<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//
// Auto-generated Migration Created: 2015-11-16 23:15:46
// ------------------------------------------------------------

class CreateConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	*/
	public function up()
	{
		Schema::create('conditions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('code', 255);
			$table->string('description', 255);
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	*/
	public function down()
	{
		Schema::drop('conditions');
	}
}