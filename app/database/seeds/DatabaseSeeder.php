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

//		$this->call('UserTableSeeder');
		$this->call('MyBlog\\MyUserSeeder');
		$this->call('MyBlog\\MyBlogSeeder');
		$this->call('MyBlog\\MyPostSeeder');
        $this->call('MyBlog\\MyTagSeeder');
        $this->call('MyBlog\\MyPostTagSeeder');
        $this->call('MyBlog\\MyPostUserSeeder');
        // Link the tags to the post
                
	}

}
