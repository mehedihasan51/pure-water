<?php

namespace App\Http\Controllers\Web\Frontend\User_Dashboard; 
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfileController extends Controller{
    public function index(){

        return view("frontend.layouts.user_dashboard.profile");
    }
}