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
                ->addColumn('status', function ($users) {
                    $status = '<div class="form-check form-switch" style="margin-left: 40px; width: 50px; height: 24px;">';
                    $status .= '<input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck' . $users->id . '" ' . ($users->status == 'active' ? 'checked' : '') . ' onclick="showStatusChangeAlert(' . $users->id . ')">';
                    $status .= '</div>';

                    return $status;
                })
                ->addColumn('action', function ($users) {
                    return '
                            <div class="d-flex justify-content-center align-items-center gap-3" style="height: 100%;">
                               <a href="' . route('clients-feedback.edit', ['id' => $users->id]) . '" class="link-primary text-decoration-none" title="Edit">
                                  <i class="fa fa-edit" style="font-size: 18px;"></i>
                                   </a>
                                   <a href="javascript:void(0);" onclick="showDeleteConfirm(' . $users->id . ')" class="link-danger text-decoration-none" title="Delete">
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

       
    }
