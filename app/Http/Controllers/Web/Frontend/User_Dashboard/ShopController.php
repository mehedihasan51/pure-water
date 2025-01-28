<?php

namespace App\Http\Controllers\Web\Frontend\User_Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ShopController extends Controller{

    /**
     * Summary of index
     * @param $request
     * @return View
     */
    public function index(Request $request){
        return view("frontend.layouts.user_dashboard.shop");
    }
}