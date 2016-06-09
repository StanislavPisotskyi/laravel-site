<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
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
        $posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages/welcome')->with('posts', $posts);
    }

    public function getAbout()
    {
        $name = "Vasya";
        $surName = "Petroff";
        $fullName = $name." ".$surName;
        $occupation = "PHP developer";
        return view('pages/about', [
            "fullName" => $fullName,
            "occupation" => $occupation
        ]);
    }

    public function getContact()
    {
        return view('pages/contact');
    }
}
