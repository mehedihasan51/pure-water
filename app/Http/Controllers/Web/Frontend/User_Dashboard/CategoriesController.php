<?php

namespace App\Http\Controllers\Web\Frontend\User_Dashboard;


use App\Helpers\Helper;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function CategoryList(): JsonResponse
    {
        $data = Categorie::all();
    
        if ($data->isEmpty()) {
            return Helper::Success('No categories found', [], 404);
        }
    
        return Helper::Success('Success', $data, 200);
    }
}
