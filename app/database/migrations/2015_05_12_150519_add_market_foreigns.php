<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMarketForeigns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('market', function($table){
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

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
		Schema::table('market', function($table){
			$table->dropForeign('market_user_id_foreign');
			$table->dropColumn('user_id');

			$table->dropForeign('market_item_id_foreign');
			$table->dropColumn('item_id');
		});
	}

}
