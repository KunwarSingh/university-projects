<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemeDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meme_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('crefid')->unsigned();
			$table->string('filelocation');
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
		Schema::drop('meme_details');
	}

}
