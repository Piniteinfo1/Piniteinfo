<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Reviewproduct;
use JWTAuth;

class ReviewController extends Controller
{
    public function ReviewProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'productid' => 'required',
            'vendorwork' => 'required',
            'productquality' => 'required',
            'deliverytime' => 'required',
        ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $review = new Reviewproduct;
        $review->productid = $request->productid;
        $review->vendorwork = $request->vendorwork;
        $review->productquality = $request->productquality;
        $review->deliverytime = $request->deliverytime;
        $review->user_id = JWTAuth::user()->id;
        $review->save();
        return response()->json([
            'success' => true,
            'message' => 'Reviewd Done', 
        ]);
    }
    public function ParticularReview(Request $request)
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
        $Reviews = Reviewproduct::where('productid', $request->productid)->get();
        return response()->json([
            'success' => true,
            'message' => 'Reviews data',
            'data' =>  $Reviews
        ]);
    }
}
