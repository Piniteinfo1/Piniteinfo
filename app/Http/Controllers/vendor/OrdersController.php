<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderedProduct;
use App\Models\Orderstatus;
use JWTAuth;
use Illuminate\Support\Facades\Validator;
use App\Models\Productorderphoto;
use Illuminate\Support\Str;

class OrdersController extends Controller
{
    public function GetOrders()
    {
        // $Products = OrderedProduct::with(['products'])->get();
        // return $Products;
        // join('profiles','profiles.id','=','users.id')
        //     ->select('users.*','profiles.photo', 'profiles.one_by_one')
        //     ->get();
        $shares = \DB::table('ordered_products')
                // ->join('vendor_images', 'ordered_products.product_id', '=', 'vendor_images.id')
                // ->join('vendor_images_galleries', 'ordered_products.product_id', '=', 'vendor_images_galleries.product_image_id')
                // ->select('ordered_products.*', 'vendor_images.*', 'vendor_images_galleries.*')
                ->get();
                return $shares;
    }
    public function Orderstatus(Request $request)
    {
        $status = new Orderstatus;
        $status->order_id = $request->order_id;
        $status->status = $request->status;
        $status->date = $request->date;
        $status->team = $request->team;
        $status->user_id = JWTAuth::user()->id;
        $status->save();
        return response()->json([
            'success' => true,
            'message' => 'OrderStatus Updated', 
        ]);
    }
    public function Orderstatuspics(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'orderid' => 'orderid',
            'image' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => $validator->messages()
            ], 200);
        }
        $image = Str::random(40) . time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/productstatus'), $image);
        $photo = new productorderphoto;
        $photo->order_id = $request->order_id;
        $photo->status = $request->status;
        $photo->photo = $image;
        $photo->user_id = JWTAuth::user()->id;
        $photo->save();
        return response()->json([
            'success' => true,
            'message' => 'OrderStatus Updated', 
        ]);
    }
}
