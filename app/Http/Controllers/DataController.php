<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\models\Registration;
use App\models\UserCategorie;

class DataController extends Controller
{
    public function UserCheck(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'user_id' => 'required'
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $user_id = $request->user_id;
        $UserCheck = \DB::table('registrations')->where('user_id', $user_id)->first();
        if($UserCheck == null)
        {
        	$user_type = $request->user_type;
        	$user = new Registration;
            $user->user_id = $request->user_id;
            $user->user_type = $request->user_type;
            $user->save();
            $categories = \DB::table('user_categories')->where('user_id', $user_id)->select('category_id')->get();
            return response()->json([
            	'sucess' => true,
            	'message' => 'New User Registered Sucessfully',
            	'categories' =>  $categories,
            ]);
        }else{
            $categories = \DB::table('user_categories')->where('user_id', $user_id)->select('category_id')->get();
            return response()->json([
                'sucess' => true,
                'message' => 'user data',
                'categories' =>  $categories,  
        ]);    
        }
        
    }
    public function SelectCategories(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categories' => 'required',
            'user_id' => 'required'
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
            $list = \DB::table('user_categories')->where('user_id' ,$request->user_id)->where('category_id', $request->categories)->first();
            if($list == null)
            {
                $category = new UserCategorie;
                $category->user_id = $request->user_id;
                $category->category_id = $request->categories;
                $category->save();
            }
            $user_id = $request->user_id;
            $categories = \DB::table('user_categories')->where('user_id', $user_id)->select('category_id')->get();
            return response()->json([
                'sucess' => true,
                'message' => 'user data',
                'categories' =>  $categories,  
        ]);  


    }
    public function categoriesList(Request $request)
    {
        $Categories = \DB::table('categories')->get();
        return response()->json([
            'sucess' => true,
            'message' => 'categories list',
            'data' => $Categories
        ]);    
    }
}
