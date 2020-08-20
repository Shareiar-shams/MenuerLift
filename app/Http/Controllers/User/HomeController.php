<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\user\post;
use App\Admin\user\category;
use App\Admin\user\tag;
class HomeController extends Controller
{
    public function index()
    {
    	$posts = post::where('status',1)->orderBy('created_at', 'desc')->paginate(5);
    	return view('user.blog', compact('posts'));
    }
    public function tag(tag $tag)
    {
    	$posts = $tag->posts();
    	return view('user.blog', compact('posts'));
    }

    public function category(category $category)
    {
    	$posts = $category->posts();
    	return view('user.blog', compact('posts'));
    }
}
