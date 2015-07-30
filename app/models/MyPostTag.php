<?php

/*
 *  MyPostTag
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

/**
 * @property int $tag_id Tag Id
 * @property int $post_id Post Id
 * @property string $created_at Datetime
 * @property string $upated_at Datetime
 * 
 */
class MyPostTag extends \Eloquent
{
    protected $table = 'my_post__tag';
}
