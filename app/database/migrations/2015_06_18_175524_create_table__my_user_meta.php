<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMyUserMeta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{       
                Schema::dropIfExists('my_user_meta');
		Schema::create('my_user_meta', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->dateTime('join_date');
                        $table->dateTime('last_seen');
                        $table->smallInteger('login_attempts', false, true);
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
		Schema::dropIfExists('my_user_meta');
	}

}
