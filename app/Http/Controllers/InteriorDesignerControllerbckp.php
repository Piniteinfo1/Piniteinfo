<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InteriorDesignerImage;
use App\Models\InteriorDesignerGallerie;
use App\Models\PdfInteriorToUser;
use JWTAuth;
use File;
use Response;
use Illuminate\Support\Facades\Validator;

class InteriorDesignerController extends Controller
{
    public function UploadInteriorDesign(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'title' => 'required',
            'description' =>'required',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/InteriorImages'), $imageName);
        $InteriorDesigner = new InteriorDesignerImage;
        $InteriorDesigner->user_id = JWTAuth::user()->id;
        $InteriorDesigner->product_image = $imageName;
        $InteriorDesigner->slug = Str::random(40);
        $InteriorDesigner->Isactive = 1;
        $InteriorDesigner->title = $request->title;
        $InteriorDesigner->description = $request->description;
        $InteriorDesigner->save();
        $Product_id = $InteriorDesigner->id;
        foreach($request->file('images') as $file)
        {
        $imagesName = Str::random(40) . time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images/InteriorImagesGallery'), $imagesName);
        $InteriorDesigner = new InteriorDesignerGallerie;
        $InteriorDesigner->Interior_designer_id = $Product_id;
        $InteriorDesigner->galleries = $imagesName;
        $InteriorDesigner->slug = Str::random(40);
        $InteriorDesigner->Isactive = 1;
        $InteriorDesigner->save();
        }
        return response()->json([
                'success' => true,
                'message' => 'Designs Uploaded Sucessfully'
            ], 400);
    }
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
     public function SendImagesToParticularDesigner()
    {
        $Designs = InteriorDesignerImage::with(['gallery_images'])->where('user_id', JWTAuth::user()->id)->get();
        //dd($Designs);
       
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
            'image_id' => 'required',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $Designs = InteriorDesignerImage::with(['gallery_images'])->where('id', $request->image_id)->get();
        return $Designs;
    }
    public function InteriorDesignDelete(Request $request)
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
        $DeleteDesign = \DB::table('interior_designer_images')->where('id', $request->design_id)->update([
            'Isactive' => 2,
        ]);
        if($DeleteDesign == 1)
        {
           return response()->json([
            'success' => true,
            'message' => 'Design Deleted Sucessfully', 
        ]); 
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Design Already Deleted Or Data Not Found', 
        ]);
    }
    
}
