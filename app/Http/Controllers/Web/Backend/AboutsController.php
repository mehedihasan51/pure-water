<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Models\User;
use App\Helpers\Helper;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class AboutsController extends Controller{

    /**
     * Summary of index
     * @return View
     */

    public function index()
    {
        $about = About::first() ?? new About();
        return view("backend.layouts.about_us.index", compact('about'));
    }
    

/**
 * @param Request $request
 * 
 */


public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'companyName' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Find the first record or create a new one
    $about = About::firstOrNew([]);

    $about->name = $request->name;
    $about->companyName = $request->companyName;
    $about->designation = $request->designation;
    $about->description = $request->description;

    if ($request->hasFile('image')) {
        if ($about->image && file_exists(public_path('uploads/about_images/' . $about->image))) {
            unlink(public_path('uploads/about_images/' . $about->image));
        }
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/about_images'), $imageName);
        $about->image = $imageName;
    }

    $about->save();

    return redirect()->route('about.index')->with('success', 'About info saved successfully!');
}


  }

