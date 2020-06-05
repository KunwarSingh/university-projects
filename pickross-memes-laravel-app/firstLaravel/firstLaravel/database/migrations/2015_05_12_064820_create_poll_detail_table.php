<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poll_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('crefid')->unsigned();
			$table->string('pollcontent');
			$table->string('contenttype');
			$table->timestamps();
			
			$table->foreign('crefid')
				  ->references('id')
				  ->on('master_content')
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
		Schema::drop('poll_details');
	}

}
