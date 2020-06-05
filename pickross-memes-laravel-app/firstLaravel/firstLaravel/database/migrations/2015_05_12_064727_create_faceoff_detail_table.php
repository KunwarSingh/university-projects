<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaceoffDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faceoff_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('crefid')->unsigned();
			$table->string('option');
			$table->string('optiontype');
			$table->integer('votes')->default();
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
		Schema::drop('faceoff_details');
	}

}
