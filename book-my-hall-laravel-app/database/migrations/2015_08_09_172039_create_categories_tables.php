<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('categoryName');
			$table->string('urlname')->nullable();
			$table->string('metakeyword')->nullable();
			$table->string('metatitle')->nullable();
			$table->string('metadesc')->nullable();
			$table->bigInteger('hits')->default(0);
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
        Schema::drop('categories');
    }
}
