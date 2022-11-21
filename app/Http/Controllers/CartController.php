<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public $data = [];
    //
    public function index() {

        return view('clients.pages.cart');
    }
}
