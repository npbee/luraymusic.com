<?php

use Illuminate\Database\Migrations\Migration;

class AddImageFieldsToAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('albums', function($table) {
            $table->string('art_full_path');
            $table->string('art_thumb_path');
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
            $table->dropColumn('full_path');
            $table->dropColumn('thumb_path');
        });
	}

}
