<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\VendorImage;
use App\Models\VendorImagesGallerie;
use JWTAuth;


class VendorUploadDesignsController extends Controller
{
    public function VendorProductsUpload(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'status' => 'required',
            'description' => 'required',
            'size' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'spaces' => 'required',
            'tag' => 'required',
            'gst' => 'required',
            'baseprice' => 'required',
            'image' => 'required',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $Vendorproducts = new VendorImage;
        $Vendorproducts->user_id = JWTAuth::user()->id;
        $Vendorproducts->title = $request->title;
        $Vendorproducts->price = (int)$request->price;
        $Vendorproducts->stock = (int)$request->stock;
        $Vendorproducts->status = (int)$request->status;
        $Vendorproducts->description = $request->description;
        $Vendorproducts->size = $request->size;
        $Vendorproducts->brand = (int)$request->brand;
        $Vendorproducts->category = (int)$request->category;
        $Vendorproducts->subcategory = (int)$request->subcategory;
        $Vendorproducts->spaces = (int)$request->spaces;
        $Vendorproducts->tag = $request->tag;
        $Vendorproducts->gst = (int)$request->gst;
        $Vendorproducts->baseprice = (int)$request->baseprice;
        $Vendorproducts->isactive = 1;
        $Vendorproducts->save();
        $Product_id = $Vendorproducts->id;
        foreach($request->file('image') as $file)
        {
        $imagesName = Str::random(10) . time().'.'.$file->getClientOriginalName();
        $file->move(public_path('images/VendorimagesGallery'), $imagesName);
        $Vendorproducts = new VendorImagesGallerie;
        $Vendorproducts->product_image_id = $Product_id;
        $Vendorproducts->galleries = $imagesName;
        $Vendorproducts->slug = Str::random(40);
        $Vendorproducts->Isactive = 1;
        $Vendorproducts->save();
        }
        return response()->json([
            'success' => true,
            'message' => 'Product Uploaded Sucessfully', 
        ]);
    }
    public function ProductsToDesigners()
    {
        $Products = Vendorimage::with(['gallery_images'])->where('Isactive', 1)->get();
        if($Products != null)
        {
            return response()->json([
                'status' => true,
                'message' => 'particular Interior Designer Data',
                'data' => $Products,
            ]);
        }
            return response()->json([
                'status' => false,
                'message' => 'particular Interior Designer Data Not Found',
                'data' => $Products,
            ]);
    }
    public function ProductsToVendor()
    {
        $Products = Vendorimage::with(['gallery_images'])->where('user_id', JWTAuth::user()->id)->get();
        if($Products != null)
        {
            return response()->json([
                'status' => true,
                'message' => 'particular Interior Designer Data',
                'data' => $Products,
            ]);
        }
            return response()->json([
                'status' => false,
                'message' => 'particular Interior Designer Data Not Found',
                'data' => $Products,
            ]);
    }
    public function VendorInactiveProducts()
    {
        $Products = Vendorimage::with(['gallery_images'])->where('user_id', JWTAuth::user()->id)->where('status', 0)->get();
        if($Products != null)
        {
            return response()->json([
                'status' => true,
                'message' => 'particular Interior Designer Data',
                'data' => $Products,
            ]);
        }
            return response()->json([
                'status' => false,
                'message' => 'particular Interior Designer Data Not Found',
                'data' => $Products,
            ]);
    }
    public function DeleteVendorProducts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
        ]); 
       if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $DeleteProduct = \DB::table('vendor_images')->where('id', $request->product_id)->update([
            'Isactive' => 2,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Product Deleted Sucessfully', 
        ]);
    }
    public function InactivateAndActiveProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'status' => 'required',
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        switch ($request->status) {
          case 1:
                $status = \DB::table('vendor_images')->where('id', $request->id)->update([
                    'status' => 1,
                ]);
                if($status == 1)
                {
                    return response()->json([
                    'success' => true,
                    'message' => 'Product Activated Sucessfully' 
                    ]);
                }
                    return response()->json([
                    'success' => true,
                    'message' => 'Product Already Activated' 
                    ]);
            break;
          case 0:
                $status = \DB::table('vendor_images')->where('id', $request->id)->update([
                    'status' => 0,
                ]);
                if($status == 1)
                {
                    return response()->json([
                        'success' => true,
                        'message' => 'Product InActivated Sucessfully' 
                    ]); 
                }
                    return response()->json([
                        'success' => true,
                        'message' => 'Product Already InActivated' 
                    ]);
            break;
          default:
                return response()->json([
                    'success' => false,
                    'message' => 'Some thing Went Wrong' 
                ]);
        }
    }
    public function SingleProduct(Request $request)
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
        $Product = Vendorimage::with(['gallery_images'])->where('id', $request->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Single Product',
            'data' => $Product
        ]);
    }
}
