<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use App\Models\InteriorDesignerImage;

class DesignsController extends Controller
{
    public function DesignsToUsers()
    {
        if(JWTAuth::user()->role == 3)
        {
            $Designs = InteriorDesignerImage::with(['gallery_images'])->where('Isactive', 1)->get();
            return response()->json([
                'success' => true,
                'data' => $Designs,
            ]); 
        }
    }
    public function PopularDesigns()
    {
        $Designs = InteriorDesignerImage::where('Isactive', 1)->where('popular', 1)->get();
        return response()->json([
                'success' => true,
                'message' => 'Popular Designs',
                'data' => $Designs,
            ]);
    }
}
