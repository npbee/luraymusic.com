<?php

use Illuminate\Database\Migrations\Migration;

class AddReleaseDateToAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('albums', function($table) {
            $table->date('release_date');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('albums', function($table) {
            $table->dropColumn('release_date');
        });
	}

}
