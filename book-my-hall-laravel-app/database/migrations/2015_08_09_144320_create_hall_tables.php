<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('halls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('member_id')->unsigned();
			$table->string('description');
			$table->string('street');
			$table->string('suburb');
			$table->string('city');
			$table->string('state');
			$table->string('country');
			$table->string('pincode');
			$table->string('website');
			$table->string('primary_email');
			$table->string('alternate_email');
			$table->string('primary_contact');
			$table->string('alternate_contact');
			$table->integer('n_reviews');
			$table->integer('n_likes');
			$table->double('rating', 1, 1);
			$table->enum('subscription', ['platinum', 'gold','silver','free']);
            $table->rememberToken();
            $table->timestamps();
			$table->foreign('member_id')->references('id')->on('members');
			$table->string('avatar');
			$table->string('cover');
			$table->string('banner');
			$table->string('platinum_cover');
			$table->string('gold_cover');
			$table->string('silver_cover');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		    $table->foreign('member_id')
                  ->references('id')->on('members')
                  ->onDelete('cascade');
            Schema::drop('halls');
    }
}
