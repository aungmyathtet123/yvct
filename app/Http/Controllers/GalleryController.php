<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use App\Article;
use App\Type;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=Type::all();
       $galleries=Gallery::orderBy('id','ASC')->paginate(9);
        return view('admin/Gallery.index',compact('galleries','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin/Gallery.create');
        $types=Type::all();
        return view('admin/Gallery.create',compact('types'));
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
            'order'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif|required',

        ]);

        $imageName =$request->image->getClientOriginalName();
        $request->image->move(public_path('images/gallery'), $imageName);
        $galleries=new Gallery();
        $galleries->order_no=$request->order;
        $galleries->image=$imageName;
        $galleries->save();
        return redirect()->route('backend.gallery.index');
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
        //dd($id);
        $types=Type::all();
        $Gallery=Gallery::find($id);
        return view('admin/gallery.edit',compact('Gallery','types'));
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
            'order'=>'required',
        ]);

        if($request->hasFile('image')){
        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('images/gallery'), $imageName);
        }
        // Update Data
        $galleries = Gallery::find($id);
         if($request->hasFile('image')){
            File::delete($galleries->image);
            $galleries->image=$imageName;
        }else{
            $galleries->image=$galleries->image;
        }
        $galleries->order_no = $request->order;
        // $Gallery->image = $request->image;

        $galleries->save();
        return redirect()->route('backend.gallery.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Gallery=Gallery::find($id);
        $Gallery->delete();
        return redirect()->route('backend.gallery.index');
    }
}
