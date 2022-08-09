<?php

namespace App\Http\Controllers\like;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use App\Models\Like;
use App\Models\Comment;

class LikesController extends Controller
{
    public function Like(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'design_id' => 'required',
        ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
            $Likes = new Like;
            // dd(JWTAuth::user());
            $Likes->user_id = JWTAuth::user()->id;
            $Likes->design_id = $request->design_id;
            $Likes->save();
         return response()->json([
            'sucess' => true,
            'message' => 'Design Liked',
            ]);
    }
        
    public function Unlike(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'design_id' => 'required',
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
    $Unlike = \DB::table('likes')->where('design_id', $request->design_id)->where('user_id', JWTAuth::user()->id)->delete();
    if($Unlike == 1)
    {
         return response()->json([
            'sucess' => true,
            'message' => 'Design Unliked',
        ]);
    }
    return response()->json([
        'sucess' => false,
        'message' => 'Something went wrong',
        ]);
    }
    public function ParticularUserLikes()
    {
        $Likes = \DB::table('likes')->where('user_id', JWTAuth::user()->id)->select('user_id', 'design_id', 'id')->get();
        return response()->json([
            'sucess' => true,
            'message' => 'Likes Data',
            'data' => $Likes,
        ]);
        // dd($Likes);
    }
    public function LikesCount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'design_id' => 'required',
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $DesignCount = \DB::table('likes')->where('design_id', $request->design_id)->get();
        $Count = count($DesignCount);
        return response()->json([
                'sucess' => true,
                'message' => 'Design Count',
                'data' => $Count,
            ]);
    }
    public function CommentToDesign(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'design_id' => 'required',
            'comment' => 'required',
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) 
        {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
            $Comment = new Comment;
            $Comment->user_id = JWTAuth::user()->id;
            $Comment->design_id = $request->design_id;
            $Comment->comment = $request->comment;
            $Comment->save();
             return response()->json([
                'sucess' => true,
                'message' => 'Commented Sucessfully',
            ]);
    }
    public function ListOfComments(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'design_id' => 'required',
            ]);
        //Send failed response if request is not valid
        if ($validator->fails()) 
        {
            return response()->json([
                'sucess' => false,
                'message' => 'validation errors',
                'error' => $validator->errors(),
            ]);
        }
        $comments = \DB::table('comments')->where('design_id', $request->design_id)->get();
        return response()->json([
                'sucess' => true,
                'message' => 'Comments',
                'data' => $comments,
            ]);
    }
}
