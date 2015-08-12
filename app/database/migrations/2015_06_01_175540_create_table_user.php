<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration {

	/**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::dropIfExists('my_users');
        Schema::create('my_users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50);
            $table->string('password', 32);
            $table->string('email', 60)->unique();
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
		Schema::dropIfExists('my_users');
	}

}
