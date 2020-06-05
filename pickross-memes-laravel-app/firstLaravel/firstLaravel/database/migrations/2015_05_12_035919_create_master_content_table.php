<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('master_content', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ctype');
			$table->text('title');
			$table->integer('userid')->unsigned();
			$table->bigInteger('pscore')->default(0);	
			$table->timestamps();
			$table->bigInteger('nlikes')->default(0);
			$table->bigInteger('nshares')->default(0);
			$table->bigInteger('nvotes')->default(0);
			$table->bigInteger('ncomments')->default(0);
                        $table->bigInteger('nviews')->default(0);
			$table->integer('redflag')->default(0);
			$table->boolean('isfeatured')->default(0);
			$table->boolean('isvisible')->default(1);
			
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

		Schema::drop('master_content');
	}

}
