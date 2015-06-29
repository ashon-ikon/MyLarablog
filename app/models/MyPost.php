<?php
/**
 * @package     Logic
 * @subpackage  Model
 * @author      Ashon <gigalimit20@yahoo.com>
 * @created     24-Jun-2015
 */
/* Zlib License


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

/**
 * @property int $id Post Id
 * @property string $title   Post's title
 * @property string $body Post Body (text)
 * @property string $excerpt Short portion from the main body
 * @property string $created_at Datetime
 * @property string $upated_at Datetime
 * 
 */
class MyPost extends\Eloquent
{
    protected $table = 'my_posts';
    
    /**
     * Every post may be linked to many posts
     */
    public function posts()
    {
        $this->belongsToMany('MyBlog\\MyTag' , 'my_post__tag', 'post_id', 'tag_id');
    }
    
    /**
     * Many post may be written by many one users
     */
    public function users()
    {
        $this->belongsTo('MyBlog\\MyUser' , 'my_post__user', 'post_id', 'user_id');
    }
}