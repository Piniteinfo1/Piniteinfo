<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Illuminate\Support\Facades\Hash;
use Input;

class PasswordController extends Controller
{
    public function ConfirmPasswordChange(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $user_id = JWTAuth::user()->id;
        $OldPassword = JWTAuth::user()->password;
        $Check = Hash::check($request->old_password, $OldPassword);
        if($Check == true)
        {
            $NewPassword = \DB::table('users')->where('id', $user_id)->update([
                'password' => Hash::make($request->new_password),
            ]);
            return response()->json([
                'sucess' => true,
                'message' => 'Password Changed Sucessfully',
            ]);
        }else{
            return response()->json([
                'sucess' => false,
                'message' => 'Password Not Matched',
            ]);
        }
    }
}
