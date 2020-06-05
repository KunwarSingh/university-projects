<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('crefid')->unsigned();
			$table->text('artext');
			$table->string('attachments')->nullable();
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
		Schema::drop('article_details');
	}

}
