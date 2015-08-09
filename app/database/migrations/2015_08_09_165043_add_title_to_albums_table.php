<?php

use Illuminate\Database\Migrations\Migration;

class AddTitleToAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('albums', function($table) {
            $table->string('title');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::table('albums', function($table) {
            $table->dropColumn('title');
        });
	}

}
