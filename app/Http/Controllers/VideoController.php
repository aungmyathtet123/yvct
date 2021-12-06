<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Type;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $types=Type::all();
        $videos=Video::orderBy('id','Desc')->paginate(5);
        return view('admin/video.index',compact('videos','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=Type::all();
        return view('admin/video.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title'=>'required',
            'link'=>'required',

        ]);

        $videos=new Video();
        $videos->title=$request->title;
        $videos->link=$request->link;
        $videos->save();
        return redirect()->route('backend.video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $types=Type::all();
        $videos=Video::find($id);
        return view('admin/video.edit',compact('videos','types'));
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

        // dd($request);
        $request->validate([
            'title'=>'required',
            'link'=>'required',

        ]);

        // Update Data
        $videos = Video::find($id);
        $videos->title = $request->title;
        $videos->link = $request->link;

        $videos->save();
        return redirect()->route('backend.video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videos=Video::find($id);
        $videos->delete();
        return redirect()->route('backend.video.index');
    }
}
