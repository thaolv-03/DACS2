<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public $data = [];

    public function index() {
        
        return view('clients.pages.home');
    }


}
