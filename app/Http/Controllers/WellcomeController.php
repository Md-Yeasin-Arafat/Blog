<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index(){
        //return "hello Arafat";
        return view('font.home.home-content');
    }

    public function support(){
        return view('font.support.support-content');
    }
}
