<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToMyPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('my_posts', function(Blueprint $table)
		{
			$table->unsignedInteger('author_id')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('my_posts', function(Blueprint $table)
		{
			$table->dropColumn('author_id');
		});
	}

}
