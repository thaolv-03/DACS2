<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        return view('clients.pages.news');
    }

    public function show()
    {
        return view('clients.pages.newsDetail');
    }

}
