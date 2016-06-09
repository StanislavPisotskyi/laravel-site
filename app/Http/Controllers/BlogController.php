<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    /**
     * Only auth-ed users can watch the posts.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('blog.index')->with('posts', $posts);
    }

    public function getSingle($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        return view('blog.single')->with('post', $post);
    }
}
