<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMyPostUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::dropIfExists('my_post__user');
		Schema::create('my_post__user', function(Blueprint $table)
		{
                        $table->unsignedInteger('post_id');
                        $table->unsignedInteger('user_id');
                        $table->primary(array('post_id', 'user_id'));
                        $table->foreign('post_id')->references('id')->on('my_posts');
                        $table->foreign('user_id')->references('id')->on('my_users');
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
		Schema::drop('my_post__user');
	}

}
