<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Usertodesigner;
use App\Models\Chat;
use JWTAuth;

class ChatController extends Controller
{
    public function MessageToDesigner(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'reciver_id' => 'required',
            'message' => 'required',
            ]);
        if ($validator->fails()){
            return response()->json([  
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $chat = new Chat;
        $chat->sender_id = JWTAuth::user()->id;
        $chat->reciver_id = $request->reciver_id;
        $chat->message = $request->message;
        $chat->IsActive = 1;
        $chat->save();

        return response()->json([
        	'sucess' => true,
        	'message' => 'message sent',
        ]);

    }
    public function GetMessages()
    {
        $messages = \DB::table('chats')->where('sender_id', JWTAuth::user()->id)->orWhere('reciver_id', JWTAuth::user()->id)->orderBy('updated_at', 'desc')->select('sender_id', 'reciver_id', 'message')->get()->unique('reciver_id');
        return response()->json([
            'sucess' => true,
            'message' => 'messages',
            'data' => $messages,
        ]);
    }
    public function GetChat(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'reciver_id' => 'required',
            ]);
        if ($validator->fails()){
            return response()->json([  
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $chats = Chat::where([
             [ 'sender_id', '=', JWTAuth::user()->id ],
             [ 'reciver_id', '=', $request->reciver_id ] 
            ])->orWhere([
             [ 'sender_id', '=', $request->reciver_id ],
             [ 'reciver_id', '=', JWTAuth::user()->id ] 
            ])->orderBy('updated_at', 'asc')->select('sender_id', 'reciver_id', 'message')->get();
            return response()->json([
                'sucess' => true,
                'message' => 'Message data',
                'login_user' => JWTAuth::user()->id,
                'chats' => $chats,
            ]);
    }
}
