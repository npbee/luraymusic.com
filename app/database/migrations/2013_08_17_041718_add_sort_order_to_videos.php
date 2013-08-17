<?php

use Illuminate\Database\Migrations\Migration;

class AddSortOrderToVideos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	   Schema::table('videos', function($table) {
                    $table->integer('sort_order');
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	   Schema::drop('videos');
	}

}