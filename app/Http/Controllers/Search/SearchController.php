<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InteriorDesignerImage;
use App\Models\InteriorDesignerGallerie;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\Savedesign;
use JWTAuth;

class SearchController extends Controller
{
    public function SearchDesignerData(Request $request)
    {
        // dd($request->all());
        if(isset($request->search) && !isset($request->category_id) && !isset($request->subcategory_id))
        {
            $data = $request->search;
            $Designs = InteriorDesignerImage::with(['gallery_images'])->where('title', 'like', "%{$data}%")
                             ->orWhere('description', 'like', "%{$data}%")
                             ->get();
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]);
        }
        elseif(!isset($request->search) && isset($request->category_id) && !isset($request->subcategory_id))
        {
            $data = $request->search;
            $Designs = InteriorDesignerImage::with(['gallery_images'])->where('category', $request->category_id)->get();
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]);
        }
        elseif(!isset($request->search) && !isset($request->category_id) && isset($request->subcategory_id))
        {
            $Image = InteriorDesignerImage::where('subcategory', $request->subcategory_id)->orderBy('updated_at', 'DESC')->get();
            $Gallery = InteriorDesignerGallerie::where('subcategory', $request->subcategory_id)->orderBy('updated_at', 'DESC')->get();
            // $c = $Image->merge($Gallery);
            $Designs = collect(array_merge($Image->all(), $Gallery->all()))->sortByDesc("updated_at");
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]); 
// return $c;
            // return $array;
            // $c = array_merge($Image,$Gallery);
            // return $data;
            // $c = $Image->merge($Gallery);
            // // $c = array_unique(array_merge($Image, $Gallery));
            // usort($c, function($Image, $Gallery) { 
            //     return strtotime($image) - strtotime($Gallery); 
            // });
//             function cmp($a, $b){
//     $ad = strtotime($Image['updated_at']);
//     $bd = strtotime($Gallery['updated_at']);
//     return ($ad-$bd);
// }
// $arr = array_merge($Image, $Gallery);
// usort($arr, 'cmp');
// return $arr;

        }
        elseif(isset($request->search) && isset($request->category_id) && !isset($request->subcategory_id))
        {
            $data = $request->search;
            $Designs = InteriorDesignerImage::with(['gallery_images'])->where('category', $request->category_id)
                   ->where(function ($query) use ($data) {
                       $query->where('title', 'like', "%{$data}%")
                         ->orWhere('description', 'like', "%{$data}%");
                   })
                        ->get();
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]);
                             // return $Designs;

            // ->where('title', 'like', "%{$data}%")
            //                  ->orWhere('description', 'like', "%{$data}%")

            // $Designs = InteriorDesignerImage::join('interior_designer_galleries', 'interior_designer_images.id', 'interior_designer_galleries.interior_designer_id')->where(function ($query) use ($search) {
            //     dd($query->count());
            //            $query->where('interior_designer_images.category', $search)
            //              ->orWhere('interior_designer_galleries.category', $search);
            //        })
            // // ->where('interior_designer_galleries.category', $request->category_id)
            //        ->where(function ($query) use ($data) {
            //            $query->where('title', 'like', "%{$data}%")
            //              ->orWhere('description', 'like', "%{$data}%");
            //        })
            //        ->get();
            //        return $Designs;
            // dd('saerxc');
            // return $query->where('interior_designer_images.category', 'LIKE', '%' . $searchTerm . '%')->join('interior_designer_galleries', 'interior_designer_galleries.category', '=', 'interior_designer_images.category');
            // return $c;
            // $eventHosts = \DB::table('interior_designer_galleries') //select your main table
            //         ->join('interior_designer_images','interior_designer_images.id','=','interior_designer_galleries.interior_designer_id') //join it on related columns
            //         ->Where('interior_designer_galleries.category', $request->category_id) //apply your condition on client_events
            //         ->get();
            //         return $eventHosts;
            // $showcampaign = InteriorDesignerImage::join('interior_designer_galleries','interior_designer_images.id', '=', 'interior_designer_galleries.interior_designer_id')
            // // ->where('users.name','LIKE', '%'.$q.'%')
            // // ->orWhere('posts.caption', 'LIKE','%'.$q.'%')
            // // ->orWhere('posts.description', 'LIKE','%'.$q.'%')
            // // ->orWhere('posts.duration', 'LIKE','%'.$q.'%') 
            // // ->orWhere('posts.amount', 'LIKE','%'.$q.'%')
            // ->get();
            // $Image = InteriorDesignerImage::where('category', $search)->get();
            // $Gallery = InteriorDesignerGallerie::where('category', $search)->get();
            // return $Gallery;
            // return $Image;
            // return $showcampaign->count();
            
        }
        elseif(isset($request->search) && !isset($request->category_id) && isset($request->subcategory_id))
        {
            $Image = InteriorDesignerImage::where('subcategory', $request->subcategory_id)->orderBy('updated_at', 'DESC')->get();
            $Gallery = InteriorDesignerGallerie::where('subcategory', $request->subcategory_id)->orderBy('updated_at', 'DESC')->get();
            // $c = $Image->merge($Gallery);
            $Designs = collect(array_merge($Image->all(), $Gallery->all()))->sortByDesc("updated_at");
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]);
            // dd('ADSAdasd');
            $data = $request->search;
            $Designs = InteriorDesignerImage::with(['gallery_images'])->where('title', 'like', "%{$data}%")
                             ->orWhere('description', 'like', "%{$data}%")
                             ->get();
            return $Designs;
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]);
        }
        elseif(isset($request->search) && isset($request->category_id) && isset($request->subcategory_id))
        {
            $data = $request->search;
            $Designs = InteriorDesignerImage::with(['gallery_images'])->where('subcategory', $request->subcategory_id)
                   ->where(function ($query) use ($data) {
                       $query->where('title', 'like', "%{$data}%")
                         ->orWhere('description', 'like', "%{$data}%");
                   })
                   ->get();
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]);
        }

    }
    public function SearchFilter(Request $request)
    {
        if($request->filter == "Today")
        {
            $Designs = InteriorDesignerImage::with(['gallery_images'])->where('security', 'public')->whereDate('created_at', Carbon::today())->get();
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]);
        }
        if($request->filter == "Week")
        {
            $UpToDate = Carbon::now()->subDays(7);
            // dd($date);
            // ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            $Designs = InteriorDesignerImage::with(['gallery_images'])->where('security', 'public')->where('created_at', '>=', $UpToDate)->get();
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]);
        }
        if($request->filter == "Month")
        {
            $UpToDate = Carbon::now()->subDays(30);
            // dd($date);
            // ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            $Designs = InteriorDesignerImage::with(['gallery_images'])->where('security', 'public')->where('created_at', '>=', $UpToDate)->get();
            return response()->json([
                'sucess' => true,
                'message' => 'Search Results',
                'data' => $Designs,
            ]);
        }
    }
    
}
