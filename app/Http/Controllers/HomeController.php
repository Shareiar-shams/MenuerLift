<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\user\post;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = post::where('status',1)->orderBy('created_at', 'desc')->paginate(5);
        return view('home',compact('posts'));
    }
}
