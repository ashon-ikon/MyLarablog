<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMyPosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::dropIfExists('my_posts');
		Schema::create('my_posts', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('title');
                        $table->text('body');
                        $table->string('excerpt', 400)->nullable();
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
		Schema::drop('my_posts');
	}

}
