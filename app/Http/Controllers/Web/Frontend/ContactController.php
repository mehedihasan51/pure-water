<?php

namespace App\Http\Controllers\Web\Frontend;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;


class ContactController extends Controller {
    
     /**
     * Display the contact page.
     *
     * @return View
     */

    public function index() {
        return view("frontend.layouts.contact.index");
    }
   
    
    
 /**
     * Store a new contact in the database.
     */
  /**
     * Store a newly created contact in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts,email',
            'phone' => 'required|digits_between:7,20',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|integer|max:20',
            'house_address' => 'required|string|max:255',
            'option'=>'required|array',
            'interested_in' => 'required|array',
            'problems'=> 'required|array',
            'note'=> 'nullable|string',
            'images' => 'nullable|array',
            "images.*" => "nullable|image|mimes:jpg,png,jpeg|max:2048",
            
           
        ]);

        try {

            $contact = Contact::create([
                'firstName' => $validatedData['firstName'],
                'lastName' => $validatedData['lastName'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'city' => $validatedData['city'],
                'postal_code' => $validatedData['postal_code'],
                'house_address' => $validatedData['house_address'],
                'option'=>json_encode($validatedData['option'] ?? []),
                'interested_in' => json_encode($validatedData['interested_in'] ?? []),
                'problems'=>json_encode($validatedData['problems'] ?? []),
                'note' => $validatedData['note']
                
                
            ]);

     // Handle multiple image uploads
      if ($request->hasFile('images')) {
         $imagePaths = [];

      foreach ($request->file('images') as $image) {
        $imageName = time() . '_' . $image->getClientOriginalName(); 
        $image->move(public_path('uploads/contact_img'), $imageName);
        $imagePaths[] = 'images/' . $imageName; // Store relative path
     }

       // Save images as JSON in the database
      $contact->update([
        'images' => json_encode($imagePaths)
      ]);

        
      }
      return response()->json($contact, 201);
    }catch(\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
  }      
    
}


