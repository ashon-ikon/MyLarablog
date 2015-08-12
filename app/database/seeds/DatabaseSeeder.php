<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('MyBlog\\MyUserSeeder');
		$this->call('MyBlog\\MyPostSeeder');
        $this->call('MyBlog\\MyTagSeeder');
        $this->call('MyBlog\\MyPostTagSeeder');
        // Link the tags to the post
                
	}

}
