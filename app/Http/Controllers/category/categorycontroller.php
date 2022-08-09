<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designercategorie;
use App\Models\designersubcategorie;
use Illuminate\Support\Facades\Validator;

class categorycontroller extends Controller
{
    public function CategoryList()
    {
        $Categories = Designercategorie::where('isactive', 1)->select('id', 'category_name')->get();
         return response()->json([
            'success' => true,
            'message' => 'Categories List',
            'data' => $Categories
        ]);
    }
    public function SubCategoryList(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $SubCategories = designersubcategorie::where('category_id', $request->id)->select('id', 'category_id', 'subcategoryname')->get();
        return response()->json([
            'success' => true,
            'message' => 'Sub Categories List',
            'data' => $SubCategories
        ]);
    }
}
