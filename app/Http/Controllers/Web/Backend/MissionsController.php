<?php

namespace App\Http\Controllers\Web\Backend;
use DB;

use App\Models\Mission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MissionsController extends Controller
{

    public function index() {
        $mission = Mission::first() ?? new Mission();
        return view("backend.layouts.our_mission.index", compact("mission"));
    }
    
    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            "title" => "required|string|max:100",
            "des" => "required|string|max:255",
            "image" => "nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Find the first Mission record or create a new one
        $mission = Mission::first() ?? new Mission();
        $mission->title = $request->input("title");
        $mission->des = $request->input("des");
    
        // Handle the image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($mission->image && file_exists(public_path('uploads/mission_image/' . $mission->image))) {
                unlink(public_path('uploads/mission_image/' . $mission->image));
            }
    
            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/mission_image'), $imageName);
            $mission->image = $imageName;
        }
    
        // Save the mission record
        $mission->save();
    
        return redirect()->route("our-mission.index")->with("t-success", "Update Mission is Successfully");
    }

}
