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
 * @property int $id User Id
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $password Hashed password
 * @property string $email User email
 * @property array $fillable White list of fields that will only be mass assigned
 * @property array $guarded Fields that may not be mass assigned 
 * @property string $hidden Fields guarded from mass select
 */

class MyUser extends \Eloquent {
    /**
     *
     * @var string 
     */
    protected $table = 'my_users';
    
    /**
     * Fields protected from mass selection
     * @var array 
     */
    protected $hidden   = ['password'];
    
    /**
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts ()
    {
        return $this->hasMany('MyBlog\\MyPost', 'author_id', 'id');
    }
}
