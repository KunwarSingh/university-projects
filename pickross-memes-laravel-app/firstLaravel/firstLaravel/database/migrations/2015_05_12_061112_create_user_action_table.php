<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_action', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userid')->unsigned();
			$table->integer('crefid')->unsigned();
			$table->string('actiontype');
			$table->string('actioncontent')->nullable();
			$table->string('creftype');
			$table->boolean('rflag')->default(0);
			$table->timestamps();
			
			$table->foreign('userid')
				  ->references('id')
				  ->on('users');
				  
				  
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
		Schema::drop('user_action');
	}

}
