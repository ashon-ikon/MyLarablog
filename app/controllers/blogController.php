<?php
/**
 * @package     Controller
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
class blogController extends \BaseController {

    /**
     * Blog Model
     * @var MyBlog\Blog 
     */
    protected $blog     = null;
    
    /**
     * Hook for iniii filter
     */
    public function __construct()
    {
        $this->beforeFilter('@initFilter');
    }
    
    public function initFilter()
    {
        
        $this->blog = MyBlog\Blog::getInstance();
    }
    
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            // Grab all the current blog rolls send them to the view
            $allBlogs = $this->blog->getBlogRoll();
            return View::make('blog.blog')->with('blogs', $allBlogs);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            $blog   = $this->blog;
            return 'Create';
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        
        $this->blog->getBlog($id);
        
		return $id;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
