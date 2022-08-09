<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Mobileotp;
use Illuminate\Support\Facades\Validator;


class SmsController extends Controller
{
    public function sms(Request $request)
    {
        // dd('szdcsd');

        $basic  = new \Nexmo\Client\Credentials\Basic('4ea19efe', 'mY2JHWXsCllMhxiH');
        $client = new \Nexmo\Client($basic);
        $OTP  = mt_rand(1000,9999);
        $mobile = $request->mobile;
        $this->OTP($OTP , $mobile);
        $message = $client->message()->send([
            'to' => $mobile,
            'from' => 'Nexmo',
            'text' => $OTP
        ]);
         return response()->json([
                'status' => true,
                'message' => 'Otp Has Been Sent Sucessfully',
                'number' => $mobile,
            ]);
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
    public function MobileOtpVerify(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'otp' => 'required'
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $mobile = $request->mobile;
        $OtpVerify = \DB::table('mobileotps')->where('mobile', $mobile)->select('otp')->first();
        $OrginalOtp = $OtpVerify->otp;
        $EnterdOtp = $request->otp;
        // dd($EnterdOtp);
        if($OrginalOtp == $EnterdOtp && $EnterdOtp != null && $OrginalOtp != null)
        {
             $Verified = \DB::table('users')->where('mobile', $request->mobile)->update([
                    'verified' => 1,
            ]);
             $email = $request->email;
            $id = $request->user_id;
            $delete = \DB::table('users')->where('email', $email)->where('id', '!=', $id)->delete();
            return response()->json([
                'status' => true,
                'message' => 'Otp Verifed Sucessfully',
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Entere An Wrong Otp',
                'mobile' => $mobile
            ]);
        }
    }
}
