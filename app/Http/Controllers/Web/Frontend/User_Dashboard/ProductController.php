<?php

namespace App\Http\Controllers\Web\Frontend\User_Dashboard;

use App\Models\Review;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClientsFeedback;

class ProductController extends Controller{

    /**
     * Summary of index
     * @param 
     * @return View
     */
    public function index( ){
        return view("frontend.layouts.user_dashboard.product_details");
    }

    public function store(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'description' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:100',
            'title' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:255',
        ]);
    
        // Store the data in the database
        ClientsFeedback::create($validatedData);
    
        // Return a response with success message
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
    
    
}