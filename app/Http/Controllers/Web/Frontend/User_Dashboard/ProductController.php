<?php

namespace App\Http\Controllers\Web\Frontend\User_Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProductController extends Controller{

    /**
     * Summary of index
     * @param 
     * @return View
     */
    public function index( ){
        return view("frontend.layouts.user_dashboard.product_details");
    }
}