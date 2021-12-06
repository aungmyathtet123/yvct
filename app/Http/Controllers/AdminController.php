<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
class AdminController extends Controller
{
    public function index()
    {
        $types=Type::all();

        return view('admin.home',compact('types'));
    }
}
