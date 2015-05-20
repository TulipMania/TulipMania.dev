<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarket extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('market', function($table){
			$table->increments('id');
			$table->integer('price');
			$table->timestamps();
			$table->string('description',255);
			$table->string('name',255);
			$table->string('username',255);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('market');
	}

}
