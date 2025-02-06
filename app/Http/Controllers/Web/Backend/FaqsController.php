<?php

namespace App\Http\Controllers\Web\Backend;
use App\Models\Faq;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FaqsController extends Controller{
    public function index(Request $request){

        if ($request->ajax()) {
            $data = Faq::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($faqs) {
                    return '<div class="form-check form-switch" style="margin-left: 40px; width: 50px; height: 24px;">
                                <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck' . $faqs->id . '" 
                                    ' . ($faqs->status == 'active' ? 'checked' : '') . ' 
                                    onclick="statusChange(' . $faqs->id . ')">
                            </div>';
                
                })
                ->addColumn('action', function ($faqs) {
                    return '
                            <div class="d-flex justify-content-center align-items-center gap-3" style="height: 100%;">
                               <a href="' . route('faq.edit', ['id' => $faqs->id]) . '" class="link-primary text-decoration-none" title="Edit">
                                  <i class="fa fa-edit" style="font-size: 18px;"></i>
                                   </a>
                                   <a href="javascript:void(0);" onclick="showDeleteConfirm(' . $faqs->id . ')" class="link-danger text-decoration-none" title="Delete">
                                     <i class="fa fa-times" style="font-size: 18px;"></i>
                                    </a>
                                    </div>
                                         ';
                })
                  ->rawColumns(['status', 'action',])
                  ->make();
            }
            
           return view("backend.layouts.faq.index");
    }

    public function create(){
        return view("backend.layouts.faq.create");
    }

        /**
     * Show the form for editing the specified client feedback.
     *
     * @param  int  $id
     * @return View
     */

    public function edit($id){
        $faq = Faq::findOrFail($id);
        return view("backend.layouts.faq.edit", compact("faq"));
    }

    public function update(Request $request){

        $validator = Validator::make($request->all(), [
            "question"=> "required|string|max:255",
            "answer"=> "required|string|max:255",
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $faq = Faq::findOrFail($request->id);
        $faq->update($request->all());
        return redirect()->route('faq.index')->with("success","Faq Update Successfully");


    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "question" => "required|string|max:255",
            "answer" => "required|string|max:255",
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        Faq::create($request->only(['question', 'answer']));
    
        return redirect()->back()->with("success", "FAQ added successfully!");
    }

    public function status(int $id): JsonResponse {
        $faq = Faq::findOrFail($id);
        $faq->status = ($faq->status === 'active') ? 'inactive' : 'active';
        $faq->save();
    
        return response()->json(['message' => 'FAQ status updated successfully!']);
    }

    public function destroy(int $id): JsonResponse {
        $faq = Faq::findOrFail($id);
        $faq->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Deleted successfully.',
        ]);
    }
    
   

}