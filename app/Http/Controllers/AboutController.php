<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\About;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $types=Type::all();
        $abouts=About::orderBy('id','desc')->paginate(6);
        return view('admin/about.index',compact('abouts','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=Type::all();
        return view('admin/about.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $imageName =$request->image->getClientOriginalName();
        $request->image->move(public_path('images/about'), $imageName);
        $about=new About();
        $about->title=$request->title;
        $about->description=$request->description;
        $about->image=$imageName;
        $about->save();
        return redirect()->back();
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
        $types=Type::all();
        $about=About::find($id);
        return view('admin/about.edit',compact('about','types'));
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
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

       if($request->hasFile('image')){
        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('images/about'), $imageName);
       }
       $about=About::find($id);
       $about->title=$request->title;
        if($request->hasFile('image')){
            File::delete($about->image);
            $about->image=$imageName;
        }else{
            $about->image=$about->image;
        }
        $about->description=$request->description;
        $about->save();
        return redirect()->route('backend.about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about=About::find($id);
        $about->delete();
        return redirect()->route('backend.about.index');
    }
}
