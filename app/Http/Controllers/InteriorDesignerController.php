<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\InteriorDesignerImage;
use App\Models\InteriorDesignerGallerie;
use App\Models\PdfInteriorToUser;
use JWTAuth;
use File;
use Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Follower;
use App\Models\Savedesign;

class InteriorDesignerController extends Controller
{
    //images and gallery uploaded by interior designers
    public function UploadInteriorDesign(Request $request)
    {
        $designs = $request->data;
        $i = 0;
        foreach($designs as $design)
        {
            $validator = Validator::make($design, [
                'image' => 'required',
                'title' => 'required',
                'description' =>'required',
                'category' => 'required|int',
                'subcategory' => 'required|int',
                'security' => 'required',
                'type' => 'required'
            ]);
             if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $validator->messages()
                ], 400);
        }
                if($i == 0){
                   
                      $image = $design['image'];
                    $name = time().'.'.$design['image']->getClientOriginalName();
                   
                    $destinationPath = public_path('designer/images/Interiordesigns');
                    $image->move($destinationPath, $name);
                    $InteriorDesigner = new InteriorDesignerImage;
                    $InteriorDesigner->user_id = JWTAuth::user()->id;
                    $InteriorDesigner->design_id = 1;
                    $InteriorDesigner->product_image = $name;
                    $InteriorDesigner->title = $design['title'];
                    $InteriorDesigner->description = $design['description'];
                    $InteriorDesigner->category = $design['category'];
                    $InteriorDesigner->subcategory = $design['subcategory'];
                    $InteriorDesigner->type = $design['type'];
                    $InteriorDesigner->security = $design['security'];
                    $InteriorDesigner->slug = Str::random(40);
                    $InteriorDesigner->Isactive = 1;
                    $InteriorDesigner->save();
                    $product_id = $InteriorDesigner->id;
                }
                if($i != 0)
                {
                    $image = $design['image'];
                    $name = time().'.'.$design['image']->getClientOriginalName();
                   
                    $destinationPath = public_path('designer/images/Interiordesignsgallery');
                    $image->move($destinationPath, $name);
                    $InteriorDesigner = new InteriorDesignerGallerie;
                    $InteriorDesigner->Interior_designer_id = $product_id;
                    $InteriorDesigner->galleries = $name;
                    $InteriorDesigner->category = $design['category'];
                    $InteriorDesigner->security = $design['security'];
                    $InteriorDesigner->subcategory = $design['subcategory'];
                    $InteriorDesigner->type = $design['type'];
                    $InteriorDesigner->slug = Str::random(40);
                    $InteriorDesigner->Isactive = 1;
                    $InteriorDesigner->save();
                }
         
                $i++;
    }
    return response()->json([
                'status' => true,
                'message' => 'Data Uploaded Sucessfully',
            ]);
}
    public function Designs()
    { 
        $Designs = InteriorDesignerImage::with(['gallery_images'])->get();
        if($Designs != null)
        {
            return response()->json([
                'status' => true,
                'message' => 'particular Interior Designer Data',
                'data' => $Designs,
            ]);
        }
            return response()->json([
                'status' => false,
                'message' => 'particular Interior Designer Data Not Found',
                'data' => $Designs,
            ]);
    }
    public function PublicDesigns()
    {
        // $FollowersData = Follower::with(['followings'])->where('user_id', JWTAuth::user()->id)->get();
        // return $FollowersData;
        $following = Follower::where('user_id', JWTAuth::user()->id)->select('Follower_id')->get();
        
        // dd(JWTAuth::user()->id);
        // $FollowDesigns[] = '';
        // dd($following);
        if(count($following) > 0)
        {
            foreach($following as $followingdata)
            {
                // if($followingdata->Follower_id)
                $FollowData = InteriorDesignerImage::with(['gallery_images'])->where('user_id', $followingdata->Follower_id)->orderBy('updated_at', 'DESC')->get();
                if(!$FollowData->isempty())
                {
                    $FollowDesigns[] = $FollowData;
                }
            }
        }
        // return $FollowDesigns;
        // array_filter($FollowDesigns);
        // return $i;
        // return $FollowDesigns;
        // dd(JWTAuth::user()->id);

        // dd(JWTAuth::user()->id);
        // $posts = InteriorDesignerImage::whereIn('user_id', User::find(JWTAuth::user()->id)->Follower::)->orderBy('user_id', 'ASC')->get();
        // return $posts;

        // $FollowingData = InteriorDesignerImage::with(['followings'])->get();
        // return $FollowingData;
        $PublicDesigns[] = InteriorDesignerImage::with(['gallery_images'])->where('security', 'public')->orderBy('updated_at', 'DESC')->get();
        // return $PublicDesigns;
        if(isset($FollowDesigns))
        {
            $Designs = array_merge($FollowDesigns, $PublicDesigns);   
            return response()->json([
                'status' => true,
                'message' => 'particular Interior Designer Data',
                'data' => $Designs,
            ]);
        }
         $Designs = $PublicDesigns;
        
        // return array_filter($FollowDesigns);
        // array_filter($linksArray);
        
        if($Designs != null)
        {
            return response()->json([
                'status' => true,
                'message' => 'particular Interior Designer Data',
                'data' => $Designs,
            ]);
        }
            return response()->json([
                'status' => false,
                'message' => 'particular Interior Designer Data Not Found',
                'data' => $Designs,
            ]);
    }
    public function VedioDesigns()
    {
        $Designs = InteriorDesignerImage::with(['article'])->get();
        if($Designs != null)
        {
            return response()->json([
                'status' => true,
                'message' => 'particular Interior Designer Data',
                'data' => $Designs,
            ]);
        }
            return response()->json([
                'status' => false,
                'message' => 'particular Interior Designer Data Not Found',
                'data' => $Designs,
            ]);
    }
    // upload quatation by interior designer
    public function SendPdfQuatationToUser(Request $request)
    {
        $file = Str::random(10) . time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('files/InteriorToUser'), $file);
        $Pdf = new PdfInteriorToUser;
        $Pdf->file_name = $file;
        $Pdf->user_id = $request->user_id;
        $Pdf->interior_designer_id = JWTAuth::user()->id;
        $Pdf->Isactive = 1;
        $Pdf->slug = Str::random(40);
        $Pdf->save();
    }
    public function GetPdfQuatation()
    {
        $pdf = \DB::table('pdf_interior_to_users')->select('file_name')->get();
        foreach($pdf as $pdfs)
        {
            return public_path('files/InteriorToUser' . '/' . $pdfs->file_name);
        }

    }
    // images to user uploades by interior designer
    public function GetImage()
    {
        // $images = \DB::table('interior_designer_images')->select('product_image', 'id')->get();
        $role =  InteriorDesignerImage::with(['gallery_images'])->get();
        return $role;
        foreach($images as $image)
        {
            // dd($image);
            // $data = [];
            $path = public_path('images/InteriorImages' .'/' . $image->product_image);
            $gallery = \DB::table('interior_designer_galleries')->select('galleries')->where('interior_designer_id', $image->id)->get();
            foreach($gallery as $gallaries)
            {

                $gallery_path = public_path('images/InteriorImagesGallery' . '/' . $gallaries->galleries);
                $items[] = $gallery_path;
                $items2[] = $gallery;
            }
        }
        // dd($path);
        return response()->json([
            'data' => $items2,
            'data2' => $items,
        ]); 

    // if (!File::exists($path)) {

    //     abort(404);

    // }

  

    // $file = File::get($path);

    // $type = File::mimeType($path);

  

    // $response = Response::make($file, 200);

    // $response->header("Content-Type", $type);

 

    // return $response;
    }
    // send images to particular interior designer
    public function SendImagesToParticularDesigner()
    {
        $Designs = InteriorDesignerImage::with(['gallery_images'])->where('user_id', JWTAuth::user()->id)->get();
        if($Designs != null)
        {
            return response()->json([
                'status' => true,
                'message' => 'particular Interior Designer Data',
                'data' => $Designs,
            ]);
        }
            return response()->json([
                'status' => false,
                'message' => 'particular Interior Designer Data Not Found',
                'data' => $Designs,
            ]);
    }
    public function ParticularImage(Request $request)
    {
        // dd($request->image_id);
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
        $Designs = InteriorDesignerImage::with(['gallery_images'])->where('id', $request->id)->get();
        return $Designs;
    }
    public function InteriorDesignDelete(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'image_id' => 'required',
        ]); 
       if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $DeleteDesign = \DB::table('interior_designer_images')->where('id', $request->image_id)->update([
            'Isactive' => 2,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Design Deleted Sucessfully', 
        ]);
    }
    public function GetVedios()
    {
        $vedio = InteriorDesignerImage::where('type', 'vedio')->where('security', '!=', 'private')->select('id', 'user_id', 'product_image', 'type', 'updated_at')->get();
        $vedios = InteriorDesignerGallerie::where('type', 'vedio')->where('security', '!=', 'private')->select('id', 'interior_designer_id', 'galleries', 'type', 'updated_at')->get();
        $data['vedio'] = $vedio->merge($vedios);
        $image = InteriorDesignerImage::where('type', 'image')->where('security', '!=', 'private')->select('id', 'user_id', 'product_image', 'type', 'updated_at')->get();
        $images = InteriorDesignerGallerie::where('type', 'image')->where('security', '!=', 'private')->select('id', 'interior_designer_id', 'galleries', 'type', 'updated_at')->get();
        $data['image'] = $image->merge($images);
        $image360 = InteriorDesignerImage::where('type', '360')->where('security', '!=', 'private')->select('id', 'user_id', 'product_image', 'type', 'updated_at')->get();
        $images360 = InteriorDesignerGallerie::where('type', '360')->where('security', '!=', 'private')->select('id', 'interior_designer_id', 'galleries', 'type', 'updated_at')->get();
        $data['360'] = $image360->merge($images360);
        return response()->json([
            'success' => true,
            'message' => 'designs',
            'data' => $data, 
        ]);
        // return $data;
    }
    public function GetImages()
    {
        $image = \DB::table('interior_designer_images')->where('type', 'image')->where('security', 'public')->select('id', 'user_id', 'product_image', 'type', 'updated_at')->get();
        $images = \DB::table('interior_designer_galleries')->where('type', 'image')->where('security', 'public')->select('id', 'interior_designer_id', 'galleries', 'type', 'updated_at')->get();
        $data1 = $image->merge($images);
        $data = $data1->merge(["url"=> env('URL') ]);
        return $data;
    }
    public function Get360()
    {
        $image360 = \DB::table('interior_designer_images')->where('type', '360')->where('security', 'public')->select('id', 'user_id', 'product_image', 'type', 'updated_at')->get();
        $images360 = \DB::table('interior_designer_galleries')->where('type', '360')->where('security', 'public')->select('id', 'interior_designer_id', 'galleries', 'type', 'updated_at')->get();
        $data1 = $image360->merge($images360);
        $data = $data1->merge(["url"=> env('URL') ]);
        return $data;
    }
    public function SaveDesign(Request $request)
    {
         $validator = Validator::make($request->all(), [
                'design_id' => 'required',
            ]);
             if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $validator->messages()
                ], 200);
        }
        $Check_saved = Savedesign::where('user_id', JWTAuth::user()->id)->where('design_id', $request->design_id)->get();
        if(count($Check_saved) > 0)
        {
            return response()->json([
                'sucess' => false,
                'message' => 'Already Liked',
            ]);
        }
        $SaveDedsign = new Savedesign;
        $SaveDedsign->user_id = JWTAuth::user()->id;
        $SaveDedsign->design_id = $request->design_id;
        $SaveDedsign->IsActive = 1;
        $SaveDedsign->save();
        return response()->json([
            'sucess' => true,
            'message' => 'design saved',
        ]);
    }
    public function SavedDesigns()
    {
        $SavedDesigns = Savedesign::with('Saveddesigns', 'gallery_images')->where('user_id', JWTAuth::user()->id)->where('IsActive', 1)->get();
        return response()->json([
            'sucess' => true,
            'message' => 'saved designs',
            'data' => $SavedDesigns
        ]);
    }
    public function SavedDesignId()
    {
        $SavedDesignId =  Savedesign::where('user_id', JWTAuth::user()->id)->where('IsActive', 1)->get();
        return response()->json([
            'sucess' => true,
            'message' => 'saved designs',
            'data' => $SavedDesignId
        ]);
    }
    public function ParticularDesignerData(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'user_id' => 'required',
            ]);
             if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $validator->messages()
                ], 200);
        }
        $Designs = InteriorDesignerImage::with(['gallery_images'])->where('user_id', $request->user_id)->get();
        return response()->json([
            'sucess' => true,
            'message' => 'Designs',
            'data' => $Designs
        ]);
    }
}
