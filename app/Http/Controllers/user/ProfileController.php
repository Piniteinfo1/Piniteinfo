<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function UserProfile(Request $request)
    {
        $UserProfile = JWTAuth::user();
        $Profile = public_path('images/ProfileImages' . '/' . $UserProfile->profile);
        $UserProfile['ProfilePhoto'] = $Profile;
        return response()->json([
            'sucess' => true,
            'message' => 'User Profile',
            'data' => $UserProfile,
           // 'ProfilePhoto' => $Profile,
        ]);    
    }
    public function UserProfilePhotoEdit(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'ProfilePhoto' => 'required',
            'address' => 'required',
            'name' => 'required'
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $ProfileImage = Str::random(40) . time().'.'.request()->ProfilePhoto->getClientOriginalExtension();
        request()->ProfilePhoto->move(public_path('images/ProfileImages'), $ProfileImage);
        $user_id = JWTAuth::user()->id;
        $ProfileImageUpdate = \DB::table('users')->where('id', $user_id)->update([
            'profile' => $ProfileImage,
            'address' => $request->address,
            'name' => $request->name
        ]);
        return response()->json([
            'sucess' => true,
            'message' => 'Profile Updated Sucessfully',
        ]);
    }
    public function UserProfileDataEdit(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            ]);
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $user_id = JWTAuth::user()->id;
        $ProfileImageUpdate = \DB::table('users')->where('id', $user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
        ]);
        return response()->json([
            'sucess' => true,
            'message' => 'Profile Data Updated Sucessfully',
        ]);

    }
    public function EmailUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users,email,',
            'mobile' => 'required|unique:users,mobile,'
            ]);
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $user_id = JWTAuth::user()->id;
        $EmailUpdate = \DB::table('users')->where('id', $user_id)->update([
            'email' => $request->email,
            'mobile' => $request->mobile
        ]);
        return response()->json([
            'sucess' => true,
            'message' => 'Profile Updated Sucessfully',
        ]);
    }
}
