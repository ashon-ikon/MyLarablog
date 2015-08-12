<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMyComments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::dropIfExists('my_comments');
		Schema::create('my_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent_id', false, true)->default(0);
                        $table->string('comment', 1024);
			$table->integer('down_vote', false, true);
			$table->integer('up_vote', false, true);
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
		Schema::dropIfExists('my_comments');
	}

}
