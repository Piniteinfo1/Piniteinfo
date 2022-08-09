<?php

namespace App\Http\Controllers\vendor\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\vendorbrand;
use App\models\vendorcategory;
use App\models\vendorspace;
use App\models\vendorsubcategory;
use JWTAuth;
use App\models\vendorbankdetail;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function brands()
    {
        $brands = vendorbrand::where('isactive', 1)->select('id', 'brands')->get();
        return response()->json([
            'sucess' => true,
            'message' => 'brands',
            'data' => $brands
        ]);
    }
    public function categories()
    {
        $category = vendorcategory::where('isactive', 1)->select('id', 'category')->get();
        return response()->json([
            'sucess' => true,
            'message' => 'brands',
            'data' => $category
        ]);
    }
    public function subcategories()
    {
        $subcategory = vendorsubcategory::where('isactive', 1)->select('id', 'subcategory')->get();
        return response()->json([
            'sucess' => true,
            'message' => 'brands',
            'data' => $subcategory
        ]);
    }
    public function spaces()
    {
        $spaces = vendorspace::where('isactive', 1)->select('id', 'spaces')->get();
        return response()->json([
            'sucess' => true,
            'message' => 'brands',
            'data' => $spaces
        ]);
    }
    public function productcount(Request $request)
    {
        // dd(JWTAuth::user()->id);
        $count = \DB::table('vendor_images')->where('user_id', JWTAuth::user()->id)->count();
        return response()->json([
            'sucess' => true,
            'message' => 'count',
            'data' => $count
        ]);
    }
    public function bankdetails(Request $request)
    {
        $bankdetails = new vendorbankdetail;
        $bankdetails->accountnumber = $request->accountnumber;
        $bankdetails->name = $request->name;
        $bankdetails->ifsc = $request->ifsc;
        $bankdetails->user_id = JWTAuth::user()->id;
        $bankdetails->branchname = $request->branchname;
        $bankdetails->isactive = 1;
        $bankdetails->save();
        return response()->json([
            'success' => true,
            'message' => 'bankdetails created sucessfully'
        ]);
        
    }
    public function bankdetailsget()
    {
        $bankdetails = vendorbankdetail::where('user_id', JWTAuth::user()->id)->where('isactive', 1)->get();
        return response()->json([
            'success' => true,
            'message' => 'bankdetails',
            'data' => $bankdetails
        ]);
    }
    public function BankDetailsUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'accountnumber' => 'required',
            'name' => 'required',
            'ifsc' => 'required',
            'branchname' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $UpdateBankDetails = vendorbankdetail::where('id', $request->id)->update([
            'accountnumber' => $request->accountnumber,
            'name' => $request->name,
            'ifsc' => $request->ifsc,
            'branchname' => $request->branchname
        ]);
        return response()->json([
            'sucess' => true,
            'message' => 'bank details Updated Sucessfully',
        ]);
    }
    public function BankDetailsDelete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $UpdateBankDetails = vendorbankdetail::where('id', $request->id)->update([
            'isactive' => 0
        ]);
        return response()->json([
            'sucess' => true,
            'message' => 'bank details Deleted Sucessfully',
        ]);
    }
}
