<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use JWTAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Reportproduct;

class ReportsController extends Controller
{
    public function ReportProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'orderid' => 'required',
            'productid' => 'required',
            'comment' => 'required',
        ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $Report = new Reportproduct;
        $Report->order_id = $request->orderid;
        $Report->product_id = $request->productid;
        $Report->comment = $request->comment;
        $Report->user_id = JWTAuth::user()->id;
        $Report->save();
        return response()->json([
            'success' => true,
            'message' => 'Reported Done', 
        ]);
    }
    public function ParticularProductReports(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'productid' => 'required',
        ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $Reports = Reportproduct::where('product_id', $request->productid)->get();
        return response()->json([
            'success' => true,
            'message' => 'Reports data',
            'data' =>  $Reports
        ]);
    }
    
}
