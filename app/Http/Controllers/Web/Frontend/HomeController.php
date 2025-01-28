<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;




class HomeController extends Controller{

    /**
     * Display the home page.
     *
     * @return View
     */
    public function index(){

        return view("frontend.layouts.home.index");
        
    }
}