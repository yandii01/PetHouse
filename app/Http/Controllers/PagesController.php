<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function pethouse()
    {
        return view('pethouse');
    }
    public function detail()
    {
        return view('detail');
    }




}
