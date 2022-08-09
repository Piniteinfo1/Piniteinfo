<?php

namespace App\Http\Controllers\Follow;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use App\Models\Follow;

class FollowDesignersController extends Controller
{
    public function Designers()
    {
        $Designers = \DB::table('users')->where('role', 2)->select('id', 'name', 'role')->get();
        return response()->json([
                'success' => true,
                'message' => 'Designers data',
                'data' => $Designers
            ]);
        return $Designers;
    }
    public function FollowDesigners(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $CheckFollow = Follow::where('user_id', JWTAuth::user()->id)->where('Follower_id', $request->id)->first();
        if($CheckFollow != null)
        {
             return response()->json([
                'success' => false,
                'message' => 'You Are Already Following This Designer',
            ]);
        }
        $Follow = new Follow;
        $Follow->user_id = JWTAuth::user()->id;
        $Follow->Follower_id = $request->id;
        $Follow->isactive = 1;
        $Follow->save();
        return response()->json([
                'success' => true,
                'message' => 'Followed Sucessfully',
            ]);
    }
    // public function DesignerSearch(Request $request)
    // {
    //     dd('chandu akula');
    // }
}
