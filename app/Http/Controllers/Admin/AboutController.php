<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\admin\about;

class AboutController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = about::all();
        return view('admin.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'text' => 'required',
            'first_img' => 'required',
            'sec_img' => 'required',
            'third_img' => 'required',
            'fp_name' => 'required',
            'sp_name' => 'required',
            'tp_name' => 'required',

        ]);

        $about = new about;
        $about->text = $request->text;
        $about->first_img = $request->first_img->store('public');
        $about->sec_img = $request->sec_img->store('public');
        $about->third_img = $request->third_img->store('public');
        $about->fp_name = $request->fp_name;
        $about->sp_name = $request->sp_name;
        $about->tp_name = $request->tp_name;
        $about->save();
        return redirect( route('about.index'));
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = about::where('id',$id)->first();
        return view('admin.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'text' => 'required',
            'first_img' => 'required',
            'sec_img' => 'required',
            'third_img' => 'required',

        ]);

        $about = about::find($id);
        $about->text = $request->text;
        $about->first_img = $request->first_img->store('public');
        $about->sec_img = $request->sec_img->store('public');
        $about->third_img = $request->third_img->store('public');
        $about->fp_name = $request->fp_name;
        $about->sp_name = $request->sp_name;
        $about->tp_name = $request->tp_name;
        $about->save();
        return redirect( route('about.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
