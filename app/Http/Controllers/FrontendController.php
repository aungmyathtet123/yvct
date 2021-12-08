<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\About;
use App\Gallery;
use App\Sitesetting;
class FrontendController extends Controller
{
    public function index()
    {
        $articles=Article::all();
        $abouts=About::take(1)->get();
        $sliders=Gallery::take(3)->get();
        $galleries=Gallery::skip(3)->take(8)->get();
        $sitesettings=Sitesetting::all();
        return view('home',compact('articles','abouts','sliders','galleries','sitesettings'));
    }

    public function about()
    {
        $sitesettings=Sitesetting::all();
        $abouts=About::skip(1)->take(1)->get();
       return view('frontend.about',compact('sitesettings','abouts'));
    }

    public function contact()
    {
        $sitesettings=Sitesetting::all();

        return view('frontend.contact',compact('sitesettings'));
    }
    public function course()
    {
        $sitesettings=Sitesetting::all();
        $articles=Article::paginate(10);
        return view('frontend.course',compact('sitesettings','articles'));
    }

    public function image()
    {
        $sitesettings=Sitesetting::all();
        $galleries=Gallery::all();
        return view('frontend.image',compact('sitesettings','galleries'));
    }

    public function teacher()
    {
        $sitesettings=Sitesetting::all();
        $articles=Article::all();
        return view('frontend.teacher',compact('sitesettings','articles'));
    }
}
