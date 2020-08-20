<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\user\post;
use App\Admin\user\tag;
use App\Admin\user\category;
use App\Http\Controllers\User\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $posts = post::all();
       
        return view('admin.post.show', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
           $tags =tag::all();
            $categories =category::all();
            return view('admin.post.post',compact('tags','categories'));
            return redirect(route('admin.home'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $img = $request->image->store('public');
        }

        $post = new post;
        $post->image = $img;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect( route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $tags = tag::all();
        $categories = category::all();
        $post = post::where('id',$id)->first();
        return view('admin.post.edit', compact('tags','categories','post'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $img = $request->image->store('public');
        }

        $post = post::find($id);

        $post->image = $img;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect( route('post.index'));
    }

    
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}
