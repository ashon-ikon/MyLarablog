<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMyPostTag extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('my_post__tag', function(Blueprint $table)
		{
                        $table->unsignedInteger('post_id')->foreign('post_id')->references('id')->on('my_posts');
                        $table->unsignedInteger('tag_id')->foreign('tag_id')->references('id')->on('my_posts');
                        $table->primary(array('post_id', 'tag_id'));
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
		Schema::dropIfExists('my_post__tag');
	}

}
