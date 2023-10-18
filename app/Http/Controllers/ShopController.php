<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function main_show(){
        return view("main");
    }
    public function about_us_show(){
        return view("About_us");
    }
}
