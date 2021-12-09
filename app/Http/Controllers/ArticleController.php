<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Article;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $types=Type::all();
        return view('admin/article.create',compact('types'));
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
            'ctitle'=>'required',
            'mtitle'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif|required',
            'description'=>'required',
            'type_id'=>'required',
        ]);
        $imageName =$request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);
        $article=new Article();
        $article->title=$request->title;
        $article->ctitle=$request->ctitle;
        $article->mtitle=$request->mtitle;
        $article->image=$imageName;
        $article->description=$request->description;
        $article->type_id=$request->type_id;
        $article->save();
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
        $article=Article::find($id);
        return view('admin/article.edit',compact('article','types'));
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
            'ctitle'=>'required',
            'mtitle'=>'required',
            'description'=>'required',
            'type_id'=>'required',
        ]);

       if($request->hasFile('image')){
        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);
       }
       $article=Article::find($id);
       $article->title=$request->title;
       $article->ctitle=$request->ctitle;
       $article->mtitle=$request->mtitle;
        if($request->hasFile('image')){
            File::delete($article->image);
            $article->image=$imageName;
        }else{
            $article->image=$article->image;
        }
        $article->description=$request->description;
        $article->type_id=$request->type_id;
        $article->save();
        return redirect()->route('backend.showdata',$request->type_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect()->back();
    }

    public function student($id)
    {
        $types=Type::all();
        $type=Type::find($id);
       return view('admin/article.create',compact('types','type'));
    }

    public function showdata($id)
    {
        $types=Type::all();
        $articles=Article::where('type_id', $id)->get();
        return view('admin/article.index',compact('articles','types','id'));
    }

}
