<?php

namespace App\Http\Controllers\Web\Frontend\User_Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class PartnerController extends Controller{

    /**
     * @return View
     */

    public function index(Request $request){
        return view("frontend.layouts.user_dashboard.partner_details");
    }

}