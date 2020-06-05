<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
			$table->string('last_name');
            $table->string('email')->unique();
			$table->string('contact');
			$table->string('street');
			$table->string('suburb');
			$table->string('city');
			$table->string('state');
			$table->string('country');
			$table->string('pincode');
			$table->string('password',60);
			$table->boolean('status')->default(0);		
			$table->string('hash_key',60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('members');
    }
}
