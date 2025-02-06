<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller{

    public function index(Request $request): View | JsonResponse {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($user) {
                    $status = '<div class="form-check form-switch" style="margin-left: 40px; width: 50px; height: 24px;">';
                    $status .= '<input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck' . $user->id . '" ' . ($user->status == 'active' ? 'checked' : '') . ' onclick="showStatusChangeAlert(' . $user->id . ')">';
                    $status .= '</div>';

                    return $status;
                })
                ->addColumn('action', function ($user) {
                    return '
                            <div class="d-flex justify-content-center align-items-center gap-3" style="height: 100%;">
                               <a href="' . route('users.edit', ['id' => $user->id]) . '" class="link-primary text-decoration-none" title="Edit">
                                  <i class="fa fa-edit" style="font-size: 18px;"></i>
                                   </a>
                                   <a href="javascript:void(0);" onclick="showDeleteConfirm(' . $user->id . ')" class="link-danger text-decoration-none" title="Delete">
                                     <i class="fa fa-times" style="font-size: 18px;"></i>
                                    </a>
                                    </div>
                                         ';
                })
                  ->rawColumns(['status', 'action'])
                  ->make();
            }
            
            return view("backend.layouts.users.index");
    }


    public function create(): View | JsonResponse { 
        return view("backend.layouts.users.create");
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); // Fetch user by ID
        return view('backend.layouts.users.edit', compact('user')); // Pass $user to view
    }


    public function store(Request $request): RedirectResponse 
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:50',
            'userName' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'phone_number' => 'required|numeric|unique:users,phone_number,' . auth()->id(),
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $users = User::create([
            'fullName' => $request->fullName,
            'userName' => $request->userName,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => bcrypt($request->password),
        ]);

    
        return redirect()->back()->with('success', 'User Successfully Created');
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:50',
            'userName' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone_number' => 'required|numeric|unique:users,phone_number,' . $id,
            'password' => 'nullable|string|min:6|confirmed', // Allow empty password
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
    try {

       $user = User::findOrFail($id);
       $user->fullName = $request->fullName;
       $user->userName = $request->userName;
       $user->email = $request->email;
       $user->phone_number = $request->phone_number;
       $user->password = bcrypt($request->password);

        $user->save(); 
    
        return redirect()->back()->with('success', 'User updated successfully.');

    } catch (Exception $e) {
        return redirect()->back()->withErrors($e)->withInput();
    }
    

    }
    


    /**
     * Toggle the status of the specified client feedback.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function status(int $id): JsonResponse {
        $user = User::findOrFail($id);
    
        $user->status = $user->status === 'active' ? 'inactive' : 'active';
        $user->save();
    
        return response()->json([
            'success' => true,
            'message' => $user->status === 'active' ? 'Published Successfully.' : 'Unpublished Successfully.',
            'data' => $user,
        ]);
    }

    
    public function destory(int $id): JsonResponse{

        $user = User::findOrFail($id);
        $user->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Deleted successfully.',
        ]);
    }

    }
