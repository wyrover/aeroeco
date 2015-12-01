<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//
// Auto-generated Migration Created: 2015-11-16 23:15:46
// ------------------------------------------------------------

class CreateAtasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	*/
	public function up()
	{
		Schema::create('atas', function(Blueprint $table) {
			$table->integer('id')->unsigned();
			$table->string('chapter', 255);
			$table->string('section', 255);
			$table->string('title', 255);
			$table->text('description');
			$table->timestamp('created_at')->default("0000-00-00 00:00:00");
			$table->timestamp('updated_at')->default("0000-00-00 00:00:00");
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	*/
	public function down()
	{
		Schema::drop('atas');
	}
}