<?php
  
namespace App\Http\Controllers;
  
class PostController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('index');
    }

    public function approvedposts()
    {
        return view('approvedposts');
    }

    public function deniedposts()
    {
        return view('deniedposts');
    }

    public function posts()
    {
        return view('posts');
    }
}