<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tagname');
			$table->string('urlname')->nullable();
			$table->string('metakeyword')->nullable();
			$table->string('metatitle')->nullable();
			$table->string('metadesc')->nullable();
			$table->bigInteger('taghits')->default(0);
			$table->integer('userid')->unsigned();
			$table->timestamps();
			
			$table->foreign('userid')
				  ->references('id')
				  ->on('users');			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tags');
	}

}
