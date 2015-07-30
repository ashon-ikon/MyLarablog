<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyBlog;

use DatabaseSeeder;
use Faker\Factory;

/**
 * Description of MyUserSeeder
 *
 * @author yinka
 */
class MyUserSeeder extends DatabaseSeeder {
    
    public function run() {
        $faker  = Factory::create();
        for ($i = 0; $i < 3; $i++) {
            $user   = new MyUser();
            $user->username = $faker->userName;
            $user->password = $faker->password;
            $user->email    = $faker->email;
            $user->save();
        }
    }
}
