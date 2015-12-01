<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//
// Auto-generated Migration Created: 2015-11-16 23:15:46
// ------------------------------------------------------------

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	*/
	public function up()
	{
		Schema::create('countries', function(Blueprint $table) {
			$table->integer('id')->unsigned();
			$table->string('country', 68)->nullable();
			$table->string('country_code', 50)->nullable();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	*/
	public function down()
	{
		Schema::drop('countries');
	}
}