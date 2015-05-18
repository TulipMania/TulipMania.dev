<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scenarios', function($table){
			$table->increments('id');
			$table->string('header', 50);
			$table->text('body');
			$table->string('locations', 50);
			$table->string('leads_to', 50);
			$table->string('story_id', 50);
			$table->decimal('money',6,2)->nullable();
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
		Schema::drop('scenarios');
	}

}
