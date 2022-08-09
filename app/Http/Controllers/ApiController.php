<?php

namespace App\Http\Controllers;

use JWTAuth;
use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Mobileotp;
use Illuminate\Validation\Rule;
use App\Models\InteriorDesignerImage;

class ApiController extends Controller
{
    public function register(Request $request)
    {
        //Validate data
        // dd($request->all());
        $data = $request->only('name', 'email', 'password', 'mobile', 'role', 'address');
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => ['required' ,Rule::unique('users')->where(function ($query) use ($request) {
                return $query->where('verified', 1);
            })],
            'password' => 'required|string|max:50',
            'mobile' => 'required',
            'role' => 'required',
            'address' => 'required'
        ],
            [
            'name.required' => '0',
            'email.required' => '0',
            'password.required' => '0',
            'role.required' => '0',
            'address.required' => '0',
        ]);


        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
            // create new user 
           $user = new User;
           $user ->name = $request->name;
           $user->email = $request->email;
           $user->password = bcrypt($request->password);
           $user->mobile = $request->mobile;
           $user->isactive = 1;
           $user->role = $request->role;
           $user->address = $request->address;
           $user->profile = 'noimage.png';
           $user->verified = 0;
           $user->save();
           // sending otp
               // $basic  = new \Nexmo\Client\Credentials\Basic('ffa99032', 'oenfUtuAIwXeL2eD');
             //   $client = new \Nexmo\Client($basic);
               // $OTP  = mt_rand(1000,9999);
                //$mobile = $request->mobile;
                //$this->OTP($OTP , $mobile);
                //$message = $client->message()->send([
                  //  'to' => $mobile,
                    //'from' => 'Nexmo',
                    //'text' => $OTP
                //]);

        //User created, return success response
        return response()->json([
            'success' => true,
            'message' => 'User created successfully and otp send to mobile number',
            'data' => $user
        ], Response::HTTP_OK);
    }
    public function OTP($OTP, $mobile)
    {
        $OtpSave = \DB::table('mobileotps')->where('mobile' ,$mobile)->first();
        if($OtpSave == null)
        {
            $otp = new Mobileotp;
            $otp->mobile = $mobile;
            $otp->otp = $OTP;
            $otp->Isactive = 1;
            $otp->save();
        }else{
            $OtpSave = \DB::table('mobileotps')->where('mobile', $mobile)->update([
                'otp' => $OTP,
            ]);
        }
    }
 
    public function login(Request $request)
    {
        $credentials = $request->only('mobile', 'password');

        //valid credential
        $validator = Validator::make($credentials, [
            'mobile' => 'required',
            'password' => 'required|string|max:50'
        ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is validated
        //Crean token
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Login credentials are invalid.',
                ], 400);
            }
        } catch (JWTException $e) {
        return $credentials;
            return response()->json([
                    'success' => false,
                    'message' => 'Could not create token.',
                ], 500);
        }
    // dd($request->email);
    $email_check = $request->mobile;
            // dd($email);
    $verified = \DB::table('users')->where('mobile', $email_check)->select('verified')->first();
    if($verified->verified != 1)
    {
            return response()->json([
            'success' => false,
            'message' => 'mobile Number Not verified',
        ]);             
    }
// dd('sdfsdfsdf');
        //Token created, return with success response and jwt token
    //     if(JWTAuth::user()->role == 3)
    // {
    //   //  $Designs = InteriorDesignerImage::with(['gallery_images'])->get();
    //     return response()->json([
    //         'success' => true,
    //         'token' => $token,
    //         'categories' => 'no data',
    //   //      'data' => $Designs,
    //     ]); 
    // }
        return response()->json([
            'success' => true,
            'token' => $token,
        ]);
    }
    public function logout(Request $request)
    {
        //valid credential
      //  $validator = Validator::make($request->only('token'), [
        //    'token' => 'required'
        //]);

        //Send failed response if request is not valid
        //if ($validator->fails()) {
          //  return response()->json(['error' => $validator->messages()], 200);
    //    }

        //Request is validated, do logout        
        try {
            JWTAuth::invalidate($request->token);
 
            return response()->json([
                'success' => true,
                'message' => 'User has been logged out'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, user cannot be logged out'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
 
    public function get_user(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);
 
        $user = JWTAuth::authenticate($request->token);
 
        return response()->json(['user' => $user]);
    }
}
