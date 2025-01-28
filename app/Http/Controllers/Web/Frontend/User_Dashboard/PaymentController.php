<?php

namespace App\Http\Controllers\Web\Frontend\User_Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\View\View;


class PaymentController extends Controller{

    /**
     * Summary of index
     * @return View
     */
    public function index(){
        return view("frontend.layouts.user_dashboard.payment");
        
    }
}