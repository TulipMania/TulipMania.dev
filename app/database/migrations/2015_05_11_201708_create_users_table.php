<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('username', 200)->unique();
            $table->string('email', 200);
            $table->string('password', 200);
            $table->rememberToken();
            $table->string('items', 200)->nullable();
            $table->decimal('money',6,2)->default(16.00);
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
		Schema::drop('users');
	}

}
