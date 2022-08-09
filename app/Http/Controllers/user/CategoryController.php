<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\UserCategory;


class CategoryController extends Controller
{
    public function AddUserCategory(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'category_name' => 'required|unique:user_categorys',
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        // dd('ddsdfsdf');
           $category = new UserCategory;
           $category->category_name = $request->category_name;
           $category->isactive = 1;
           $category->slug = Str::random(12);
           $category->save();
           return response()->json([
            'sucess' => true,
            'message' => 'New Category Added Sucessfully',
           ]);

    }
    public function UserCategory()
    {
        $usercategory = \DB::table('user_categorys')->get();
        return response()->json([
            'sucess' => true,
            'message' => 'User Category',
            'data' => $usercategory,
        ]);
    }
}
