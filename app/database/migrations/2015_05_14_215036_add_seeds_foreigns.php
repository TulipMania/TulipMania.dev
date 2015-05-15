<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeedsForeigns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('seeds', function($table){

			$table->integer('item_id')->unsigned();
			$table->foreign('item_id')->references('id')->on('items');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('seeds', function($table){
			$table->dropForeign('seeds_item_id_foreign');
			$table->dropColumn('item_id');
		});
	}

}
