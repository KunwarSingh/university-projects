<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallPicturesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('hall_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->string('location');
			$table->string('description');
			$table->integer('n_views');
			$table->integer('n_likes');
			$table->integer('n_shares');
			$table->integer('member_id')->unsigned();
			$table->boolean('is_seen');
            $table->timestamps();
			$table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photos');
    }
}
