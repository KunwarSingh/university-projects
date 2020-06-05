<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavbarMoreSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('navbar_more_sections', function(Blueprint $table)
		{
			$table->increments('id');			
			$table->string('section');
                        $table->integer('morerefid')->unsigned();
			$table->timestamps();			
			$table->foreign('morerefid')
				  ->references('id')
				  ->on('navbar')
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
		Schema::drop('navbar_more_sections');
	}

}
