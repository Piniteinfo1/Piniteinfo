<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\vendorbusines;
use JWTAuth;

class BussinessController extends Controller
{
    public function AddBussiness(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bussinessname' => 'required',
            'legal_form' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'bussinessregistrationnumber' => 'required',
            'idtype' => 'required',
            'number' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $AddBussiness = new vendorbusines;
        $AddBussiness->bussinessname = $request->bussinessname;
        $AddBussiness->legal_form = $request->legal_form;
        $AddBussiness->address = $request->address;
        $AddBussiness->city = $request->city;
        $AddBussiness->state = $request->state;
        $AddBussiness->bussinessregistrationnumber = $request->bussinessregistrationnumber;
        $AddBussiness->idtype = $request->idtype;
        $AddBussiness->number = $request->number;
        $AddBussiness->user_id = JWTAuth::user()->id;
        $AddBussiness->isactive = 1;
        $AddBussiness->save();
        return response()->json([
            'sucess' => true,
            'message' => 'Bussiness Created Sucessfully'
        ]);
    }
    public function GetBussiness()
    {
        $vendorbusines = vendorbusines::where('user_id', JWTAuth::user()->id)->where('isactive', 1)->get();
        return response()->json([
            'sucess' => true,
            'message' => 'Bussiness Details',
            'data' => $vendorbusines
        ]);
        
    }
    public function BussinessUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'bussinessname' => 'required',
            'legal_form' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'bussinessregistrationnumber' => 'required',
            'idtype' => 'required',
            'number' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $BussinessUpdate = vendorbusines::where('id', $request->id)->update([
                'bussinessname' => $request->bussinessname,
                'legal_form' => $request->legal_form,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'bussinessregistrationnumber' => $request->bussinessregistrationnumber,
                'idtype' => $request->idtype,
                'number' => $request->number,
        ]);
        return response()->json([
            'sucess' => true,
            'message' => 'Bussiness Updated',
        ]);
    }
    public function BussinessDelete(Request $request)
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
        $BussinessUpdate = vendorbusines::where('id', $request->id)->update([
                'isactive' => 0,
        ]);
        return response()->json([
            'sucess' => true,
            'message' => 'Bussiness deleted',
        ]);
        
    }
}
