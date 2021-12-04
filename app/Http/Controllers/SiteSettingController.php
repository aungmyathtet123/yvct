<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitesetting;
use App\Type;
class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=Type::all();
        $sitesettings=Sitesetting::orderBy('id','Desc')->paginate(5);
        return view('admin/sitesetting.index',compact('sitesettings','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=Type::all();
        return view('admin/sitesetting.create',compact('types'));
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
            'name'=>'required',
            'link'=>'required',

        ]);

        $sitesetting=new Sitesetting();
        $sitesetting->name=$request->name;
        $sitesetting->value=$request->link;
        $sitesetting->save();
        return redirect()->route('backend.sitesetting.index');
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
        $sitesetting=Sitesetting::find($id);
        return view('admin/sitesetting.edit',compact('sitesetting','types'));
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
            'name'=>'required',
            'link'=>'required',

        ]);

        // Update Data
        $sitesetting = Sitesetting::find($id);
        $sitesetting->name = $request->name;
        $sitesetting->value = $request->link;

        $sitesetting->save();
        return redirect()->route('backend.sitesetting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sitesetting=Sitesetting::find($id);
        $sitesetting->delete();
        return redirect()->route('backend.sitesetting.index');
    }
}
