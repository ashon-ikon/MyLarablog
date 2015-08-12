<?php
/*
 *  MyPostSeeder
 * 
 *  @author yinka
 *  @created 2015
 */
/* Zlib License

  version 1.2.2, October 3rd, 2004


  This software is provided 'as-is', without any express or implied
  warranty.  In no event will the authors be held liable for any damages
  arising from the use of this software.

  Permission is granted to anyone to use this software for any purpose,
  including commercial applications, and to alter it and redistribute it
  freely, subject to the following restrictions:

  1. The origin of this software must not be misrepresented; you must not
  claim that you wrote the original software. If you use this software
  in a product, an acknowledgment in the product documentation would be
  appreciated but is not required.
  2. Altered source versions must be plainly marked as such, and must not be
  misrepresented as being the original software.
  3. This notice may not be removed or altered from any source distribution.

  http://www.gzip.org/zlib/zlib_license.html

 */

namespace MyBlog;

use DatabaseSeeder;
use Faker\Factory;

/**
 * Description of MyPostSeeder
 *
 * @author yinka
 */
class MyPostSeeder extends DatabaseSeeder
{
    public function run() {
        $ids = MyUser::all()->lists('id');
        $faker  = Factory::create();
        for($i = 1; $i <= 10; $i++) {
            $post           = new MyPost();
            $post->title    = $faker->sentence(8);
            // We'll try to extract the excerpt from the body so let's do
            // some magic.
            $body           = $faker->text();
            $post->body     = $body;
            $authorId       = 0;
            if (!empty($ids)) {
                // Just additional protection
                $authorId = $ids[$faker->numberBetween(0, count($ids) -1 )];
            }
            $post->author_id = $authorId;
            $parts          = explode(' ', $body);
            $excerptStart   = rand(0, count($parts) - 7);
            $post->excerpt  = implode(' ', array_slice($parts, $excerptStart, 6));
            $post->save();
        }
    }
}
