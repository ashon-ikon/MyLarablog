<?php

use Doctrine\DBAL\Schema\SchemaException;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFirstLastNamesToMyUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('my_users', function(Blueprint $table)
		{
			$table->string('first_name', 60)->default("");
			$table->string('last_name', 60)->default("");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('my_users', function(Blueprint $table) {
            $table->dropColumn([
                'first_name',
                'last_name',
            ]);
        });
    }

}
