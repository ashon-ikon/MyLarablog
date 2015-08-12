<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('my_blog');
        Schema::create('my_blog', function(Blueprint $table) {
            $table->increments('id');
            $table->char('title');
            $table->text('body');
            $table->integer('created_by', false, true);
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
		Schema::dropIfExists('my_blog');
	}

}
