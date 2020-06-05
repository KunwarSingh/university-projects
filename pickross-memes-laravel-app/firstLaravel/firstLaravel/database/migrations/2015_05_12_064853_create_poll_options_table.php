<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poll_options', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pollrefid')->unsigned();
			$table->string('option');
			$table->string('optiontype');
			$table->integer('votes');
			$table->timestamps();
			
			$table->foreign('pollrefid')
				  ->references('id')
				  ->on('poll_details')
				  ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('poll_options');
	}

}
