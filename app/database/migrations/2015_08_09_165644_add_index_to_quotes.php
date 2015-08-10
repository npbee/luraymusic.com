<?php

use Illuminate\Database\Migrations\Migration;

class AddIndexToQuotes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('quotes', function($table) {
            $table->index('album_id');
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
        Schema::table('quotes', function($table) {
            $table->dropIndex('quotes_album_id_index');
        });
	}

}
