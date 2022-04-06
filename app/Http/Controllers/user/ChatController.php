<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\models\Usertodesigner;

class ChatController extends Controller
{
    public function MessageToDesigner(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'designer_id' => 'required',
            'message' => 'required',
            ]);
        if ($validator->fails()){
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $chat = new Usertodesigner;
        $chat->user_id = $request->user_id;
        $chat->designer_id = $request->designer_id;
        $chat->message = $request->message;
        $chat->save();
        return response()->json([
        	'sucess' => true,
        	'message' => 'message sent',
        ]);

    }
}
