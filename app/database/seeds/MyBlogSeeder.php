<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyBlog;

use DatabaseSeeder;
use Faker\Factory;
use MyBlog;

/**
 * Description of MyBlogSeeder
 *
 * @author yinka
 */
class MyBlogSeeder extends DatabaseSeeder {
    protected  $seederStuff = 0;
    public function run() {
        $faker  = Factory::create();
            
        for($i = 1; $i <= 10; $i++) {
            $blog           = new MyBlog();
            $blog->title    = $faker->sentence(8);
            $blog->body     = $faker->text();
            $blog->created_by = $this->getRandomUser()->id;
            $blog->save();
        }

    }
    
    /**
     * Gets a random User
     * @return MyUser
     */
    private function getRandomUser()
    {
        $users  = MyUser::all()->take(5);
        $count  = rand(0, count($users));
        srand( $this->seederStuff++ + rand(0, $count));
        return $users[rand(0, $count - 1)];
    }
}
