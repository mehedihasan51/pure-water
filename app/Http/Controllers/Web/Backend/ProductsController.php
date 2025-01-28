<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Helpers\Helper;
use App\Models\Product;
use App\Models\products;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller{

    /** Display the Products page.
    *
    * @ return View
    * @ param Request request
    */
    public function index(Request $request){
        if($request->ajax()){
            $data = Product::latest()->get();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('feature_image', function ($Product) {
                    if ($Product->feature_image) {
                        return '<img src="' . asset($Product->feature_image) . '" width="60" height="50" class="img-thumbnail">';
                    }
                    return "No Image Here";
                })
                ->addColumn('status', function ($Product) {
                    return '<div class="form-check form-switch" style="margin-left: 40px; width: 50px; height: 24px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck' . $Product->id . '" ' . ($Product->status == 'active' ? 'checked' : '') . ' onclick="showStatusChangeAlert(' . $Product->id . ')">
                    </div>';
                })
                ->addColumn('action', function ($Product) {
                    return '
                        <div class="d-flex justify-content-center align-items-center gap-3" style="height: 100%;">
                            <a href="' . route('products.edit', $Product->id) . '" class="link-primary text-decoration-none" title="Edit">
                                <i class="fa fa-edit" style="font-size: 18px;"></i>
                            </a>
                            <a href="javascript:void(0);" onclick="showDeleteConfirm(' . $Product->id . ')" class="link-danger text-decoration-none" title="Delete">
                                <i class="fa fa-times" style="font-size: 18px;"></i>
                            </a>
                        </div>';
                })
                ->rawColumns(['feature_image', 'status', 'action'])
                ->make();
        }
    
        return view('backend.layouts.products.index');
    }
    
     public function create(): View {
          return view('backend.layouts.products.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'title' => ['required','max:255','regex:/^[a-zA-Z\s]+$/u'],
                'category' => 'required|in:stationary,management,service',
                'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $product = new Product();
            $product->title = $request->title;
            $product->category = $request->category;
        
            if ($request->hasFile('feature_image')) {
                $image = $request->file('feature_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                if ($product->feature_image && file_exists(public_path($product->feature_image))) {
                    @unlink(public_path($product->cover_photo));
                }
                $imagePath = Helper::fileUpload($image, 'feature_image', $imageName);
                if (!$imagePath) {
                    throw new Exception('Failed to upload image.');
                }
                $product->feature_image = $imagePath;
                
            }
            $product->save();
        
            return redirect()->route('products.index')->with('success', 'Product created successfully!');
        }

      public function edit(int $id): View {
         $product = Product::findOrFail($id);
         return view('backend.layouts.products.edit', compact('product'));
   }

   public function update(Request $request, int $id): RedirectResponse {
    $validator = Validator::make($request->all(), [
        'title' => ['required','max:255','regex:/^[a-zA-Z\s]+$/u'],
        'category' => 'required|in:stationary,management,service',
        'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->category = $request->category;

        if ($request->input('remove_feature_image') == 1) {
            if ($product->feature_image && file_exists(public_path($product->feature_image))) {
                @unlink(public_path($product->feature_image)); 
            }
            $product->feature_image = null; 
        }

        if ($request->hasFile('feature_image')) {

            if ($product->feature_image && file_exists(public_path($product->feature_image))) {
                @unlink(public_path($product->feature_image));
            }

            $image = $request->file('feature_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/feature_image/' . $imageName;

            $image->move(public_path('uploads/feature_image/'), $imageName);
            $product->feature_image = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    } catch (Exception $e) {
        return redirect()->back()->with('error', 'Failed to update product.');
    }
}


    /**
     *  Remove the specified id from status.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function status(int $id): JsonResponse {
        $product = Product::findOrFail($id);

        if ($product->status == 'active') {
            $product->status = 'inactive';
            $product->save();
            return response()->json([
                'success' => false,
                'message' => 'Unpublished Successfully.',
                'data'    => $product,
            ]);
        } else {
            $product->status = 'active';
            $product->save();
            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data'    => $product,
            ]);
        }
    }

     /**
     * 
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse {
        $product = Product::findOrFail($id);
    
        if ($product->feature_image) {
            $imagePath = public_path($product->feature_image);
            if (file_exists($imagePath)) {
                @unlink($imagePath);
            }
        }

        $product->delete();
    
        return response()->json([
            't-success' => true,
            'message'   => 'Deleted successfully.',
        ]);
    }

}