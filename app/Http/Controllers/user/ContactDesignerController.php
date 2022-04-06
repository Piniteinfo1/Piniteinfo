<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\models\Contactdesigner;

class ContactDesignerController extends Controller
{
    public function ContactDesigner(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'designer_id' => 'required',
            'post_id' => 'required',
            'mobile' => 'required',
            ]);
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $contact = new Contactdesigner;
        $contact->user_id = $request->user_id;
        $contact->post_id = $request->post_id;
        $contact->mobile = $request->mobile;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->save();
        return response()->json([
        	'sucess' => true,
        	'message' => 'your request has been submited to particular designer',
        ]);
    }
}
