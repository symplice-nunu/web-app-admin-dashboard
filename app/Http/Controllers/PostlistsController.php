<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostlistsController extends Controller
{
    function list()
    {
        $data = Http::get('http://localhost:8000/api/posts')->json();
        return view('postlists',['data'=>$data]);
    }
}
