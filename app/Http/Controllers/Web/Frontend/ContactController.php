<?php

namespace App\Http\Controllers\Web\Frontend;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use app\Models\Contact;


class ContactController extends Controller {
    
     /**
     * Display the contact page.
     *
     * @return View
     */

    public function index() {
        return view("frontend.layouts.contact.index");
    }
   
    
    // public function store(Request $request) { 
    //     $validator = Validator::make($request->all(), [
    //         "firstName" => "required|string",
    //         "lastName" => "required|string",
    //         "email" => "required|email",
    //         "phone" => "required|string",
    //         "city" => "required|string",
    //         "postal_code" => "required|string",
    //         "house_address" => "required|string",
    //         "interested_in" => "required|array", // Validate as an array
    //         "problems" => "nullable|array",
    //         "problems.*" => "in:limescale,legionella,dirty tap water,water pipes", // Validate each value
    //         "appointment_time" => "required|date_format:H:i:s",
    //         "note" => "nullable|string",
    //         "image.*" => "nullable|image|mimes:jpg,png,jpeg|max:2048",
    //     ]);
    
    //     if ($validator->fails()) { 
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }
    
    //     try {
    //         $contact = new Contact();
    //         $contact->firstName = $request->firstName;
    //         $contact->lastName = $request->lastName;
    //         $contact->email = $request->email;
    //         $contact->phone = $request->phone;
    //         $contact->city = $request->city;
    //         $contact->postal_code = $request->postal_code;
    //         $contact->house_address = $request->house_address;
    //         $contact->interested_in = json_encode($request->interested_in); 
    //         $contact->problems = json_encode($request->problems); 
    //         $contact->appointment_time = $request->appointment_time;
    //         $contact->note = $request->note;
    
    //         if ($request->hasFile('image')) {
    //             $imagePath = $request->file('image')->store('uploads/contact_img', 'public'); // Saves to storage/app/public/images
    //             $contact->image = $imagePath;
    //         }
    
            
    //         $contact->save();
    //         return redirect()->back()->with('success', 'Contact saved successfully!');
    //     } catch(\Exception $e) {
    //         return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
    //     }

    // }
    
    
    public function store(Request $request)
{
    // Validate incoming data
    $validator = Validator::make($request->all(), [
        "firstName" => "required|string",
        "lastName" => "required|string",
        "email" => "required|email",
        "phone" => "required|string",
        "city" => "required|string",
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput(); // Return errors if validation fails
    }

    try {
        // Creating a new contact instance
        $contact = new Contact();
        $contact->firstName = $request->firstName;
        $contact->lastName = $request->lastName;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->city = $request->city;
        $contact->postal_code = $request->postal_code;
        $contact->house_address = $request->house_address;
        $contact->interested_in = json_encode($request->interested_in); // Store array as JSON
        $contact->problems = json_encode($request->problems); // Store array as JSON
        $contact->appointment_time = $request->appointment_time;
        $contact->note = $request->note;

        // Check if an image was uploaded
        if ($request->hasFile('image')) {
            // Store the image in the 'uploads/contact_img' folder
            $imagePath = $request->file('image')->store('uploads/contact_img', 'public');
            $contact->image = $imagePath;
        }

        // Save the contact data to the database
        $contact->save();

        // Return a success message
        return redirect()->back()->with('success', 'Contact saved successfully!');
    } catch (\Exception $e) {
        // Return error message if something goes wrong
        return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
    }
}

}

