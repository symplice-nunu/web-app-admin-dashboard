<?php
  
namespace App\Http\Controllers;
  
class CategoryController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function category()
    {
        return view('category');
    }
}