<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //
    public function index()
    {
        return view('clients.pages.download');
    }
}
