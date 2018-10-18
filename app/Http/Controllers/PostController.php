<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Post;

class PostController extends Controller
{
    //

    public function index()
    {
    	# code...
    	$categories = Category::orderBy('created_at', 'desc')->get(); 
        return view('pages.post')->with('categories', $categories);
    }

        public function store(Request $request)
    {
    	# code...

        $this->validate($request, ['postTitle' => 'required|min:3|max:200', 'postCategory' => 'required', 'postContent' => 'required']);
        $post = new Post();
        $post->title = $request->postTitle;
        $post->author = $request->postAuth;
        $post->category = $request->postCategory;
        $post->post = $request->postContent;
        //Save Intance 
        $post->save();
        session()->flash('Success', 'Post Added Successfully');
        return back();
    }



}
