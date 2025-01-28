<?php

namespace App\Http\Controllers\Web\Frontend;
use Illuminate\View\View;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class AboutController extends Controller{

    /**
     * Summary of index
     * @return view
     */
    public function index(){
        return view("frontend.layouts.about.index");
    }
}