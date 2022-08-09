<?php

namespace App\Http\Controllers\web\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\VendorImage; 
use App\Models\User;
use App\Models\VendorImagesGallerie;
use Illuminate\Support\Str;
use App\Models\OrderedProduct;
use App\Models\dailyproductupdate;
use App\Models\vendorcategory;
use App\Models\vendorsubcategory;
use App\Models\vendorspace;

class VendorProductController extends Controller
{
    public function VendorAddProductView()
    {
        $Category = \DB::table('vendorcategory')->where('isactive', 1)->select('category', 'id')->get();
        $Subcategory = \DB::table('vendorsubcategory')->where('isactive', 1)->select('subcategory', 'id')->get();
        $Spaces = \DB::table('vendorspaces')->where('isactive', 1)->select('spaces', 'id')->get();
        $Designs = \DB::table('vendorspaces')->where('isactive', 1)->select('spaces', 'id')->get();
        // dd('asdasdsda');
        return view('web.Vendor_dashboard.Vendoraddproduct', compact('Category', 'Subcategory', 'Spaces', 'Designs'));
    }
    public function VendorProductAdd(Request $request)
    {
        $image = $request->file('product_image');
        $imagename = Str::random(10) . time().'.'.$image->getClientOriginalName();
        $image->move(public_path('images/vendorproductimage'), $imagename);
        $Vendorproducts = new VendorImage;
        $Vendorproducts->user_id = Auth::user()->id;
        $Vendorproducts->title = $request->product_name; 
        $Vendorproducts->price = (int)$request->price;
        $Vendorproducts->description = $request->product_description;
        $Vendorproducts->tax = (int)$request->tax;
        $Vendorproducts->shipping = (int)$request->shipping;
        $Vendorproducts->category = 1;
        $Vendorproducts->subcategory = 1;
        $Vendorproducts->spaces = 1;
        $Vendorproducts->deliverytime = $request->etd;
        $Vendorproducts->brand = (int)$request->product_brand_name;
        $Vendorproducts->length = $request->length;
        $Vendorproducts->breadth = $request->breadth;
        $Vendorproducts->height = $request->height;
        $Vendorproducts->units = $request->units;
        $Vendorproducts->tag = $request->tags;
        $Vendorproducts->status = 1;  
        $Vendorproducts->product_color = $request->product_color;
        $Vendorproducts->isactive = 1;
        $Vendorproducts->image = $imagename;
        $Vendorproducts->save();
        $ProductId = $Vendorproducts->id;
        foreach($request->file('product_images') as $file)
        {
            $imagesName = Str::random(10) . time().'.'.$file->getClientOriginalName();
            $file->move(public_path('images/vendorproductimagesgallery'), $imagesName);
            $Vendorproducts = new VendorImagesGallerie;
            $Vendorproducts->product_image_id = $ProductId;
            $Vendorproducts->galleries = $imagesName;
            $Vendorproducts->slug = Str::random(40);
            $Vendorproducts->Isactive = 1;
            $Vendorproducts->save();
        }
        // dd(Auth::user()->id);
        return redirect()->route('VendorProductsList')->with('message', 'New Product Added Sucessfully!');
    }
    public function VendorProductsList()
    {
        $Products = Vendorimage::with(['gallery_images'])->where('user_id', Auth::user()->id)->where('isactive', 1)->get();
        return view('web.Vendor_dashboard.vendorproductslist', compact('Products'));
    }
    public function Productdelete($val)
    {
        $inactiveProduct = \DB::table('vendor_images')->where('id', $val)->update([
            'isactive' => 0
        ]);
        return $inactiveProduct;
    }
    public function Productinactive(Request $request)
    {
        // $c = $request->all());
        $inactiveProduct = \DB::table('vendor_images')->where('id', $request->id[1])->update([
            'status' => $request->status
        ]);
        return $inactiveProduct;
    }
    public function vendororders()
    {
            // $users = 
            // dd($users);
        // $ProductOrders = \DB::table('ordered_products')->where('user_id', Auth::user()->id)->get();
        $ProductOrders = \DB::table('ordered_products')
            ->leftJoin('users', 'users.id', '=', 'ordered_products.user_id')->where('ordered_products.vendor_id', Auth::user()->id)->where('ordered_products.product_status', 'ordered')->select('ordered_products.product_id as id', 'ordered_products.payment_method as paymentmethod', 'ordered_products.price as price', 'ordered_products.product_status as status', 'users.email as email', 'ordered_products.transaction_id as transnumber')->get();
            $trackings = \DB::table('ordertracking')->where('isactive', 1)->get();
        // dd(Auth::user()->id);
        return view('web.vendor.vendororders', compact('ProductOrders', 'trackings'));
    }
    public function vendorallorders()
    {
        $ProductOrders = \DB::table('ordered_products')
            ->leftJoin('users', 'users.id', '=', 'ordered_products.user_id')->where('ordered_products.vendor_id', Auth::user()->id)->select('ordered_products.product_id as id', 'ordered_products.payment_method as paymentmethod', 'ordered_products.price as price', 'ordered_products.product_status as status', 'users.email as email', 'ordered_products.transaction_id as transnumber')->get();
            $trackings = \DB::table('ordertracking')->where('isactive', 1)->get();
        // dd(Auth::user()->id);
        return view('web.vendor.vendororders', compact('ProductOrders', 'trackings'));
    }
    public function vendorprocessingorders()
    {
        $ProductOrders = \DB::table('ordered_products')
            ->leftJoin('users', 'users.id', '=', 'ordered_products.user_id')->where('ordered_products.vendor_id', Auth::user()->id)->where('ordered_products.product_status', 'processing')->select('ordered_products.product_id as id', 'ordered_products.payment_method as paymentmethod', 'ordered_products.price as price', 'ordered_products.product_status as status', 'users.email as email', 'ordered_products.transaction_id as transnumber')->get();
            $trackings = \DB::table('ordertracking')->where('isactive', 1)->get();
        // dd(Auth::user()->id);
        return view('web.vendor.vendororders', compact('ProductOrders', 'trackings'));
    }
    public function vendorcompletedorders()
    {
        $ProductOrders = \DB::table('ordered_products')
            ->leftJoin('users', 'users.id', '=', 'ordered_products.user_id')->where('ordered_products.vendor_id', Auth::user()->id)->where('ordered_products.product_status', 'completed')->select('ordered_products.product_id as id', 'ordered_products.payment_method as paymentmethod', 'ordered_products.price as price', 'ordered_products.product_status as status', 'users.email as email', 'ordered_products.transaction_id as transnumber')->get();
            $trackings = \DB::table('ordertracking')->where('isactive', 1)->get();
        // dd(Auth::user()->id);
            // dd($ProductOrders);
        return view('web.vendor.vendororders', compact('ProductOrders', 'trackings'));
    }
    public function orderchangestatus(Request $request)
    {
        $status = $request->status;
        $id = (int)$request->id;
        // dd($status, $id);    
        $updatestatus = OrderedProduct::where('product_id', $id)->update([
            'product_status' => $status
        ]);
        return true;
    }
    public function dailyupdate(Request $request, $id)
    {
        // dd('sdfsdffsdfdfsddsffd');
        $Dailyupdates = dailyproductupdate::where('orderid', $id)->get();
        // dd($Dailyaupdates);
        return view('web.vendor.Vendorstatusupdate', compact('id', 'Dailyupdates'));
    }
    public function productstatusupdate(Request $request, $id)
    {
        // dd($request->all());
        $file = $request->file('image');
        $imagesName = Str::random(10) . time().'.'.$file->getClientOriginalName();
        $file->move(public_path('productstatus/dailyupdate'), $imagesName);
        $StatusUpdate = new dailyproductupdate;
        $StatusUpdate->orderid = (int)$id;
        $StatusUpdate->photo = $imagesName;
        $StatusUpdate->description = $request->text;
        $StatusUpdate->save();
        return redirect()->route('dailyupdate',$id)->with('message', 'Status Updated Sucessfully!');
    }




    ///////////////// vendor new dashboard
    public function VendorDashboard()
    {
        // dd('asfasdssddasdsa');
        return view('web.Vendor_dashboard.index');
        // code...
    }
    public function VendorProductsview()
    {
        $Products = Vendorimage::with(['gallery_images'])->where('user_id', Auth::user()->id)->where('isactive', 1)->get();
        return view('web.Vendor_dashboard.vendorgridview', compact('Products'));
    }
    public function vendororderslist()
    {
        $ProductOrders = \DB::table('ordered_products')
            ->leftJoin('users', 'users.id', '=', 'ordered_products.user_id')->where('ordered_products.vendor_id', Auth::user()->id)->select('ordered_products.product_id as id', 'ordered_products.payment_method as paymentmethod', 'ordered_products.price as price', 'ordered_products.product_status as status', 'users.email as email', 'ordered_products.transaction_id as transnumber', 'ordered_products.created_at as created_at')->get();
        $trackings = \DB::table('ordertracking')->where('isactive', 1)->get();
        // dd('asdfsdfdsf');
        return view('web.Vendor_dashboard.vendororders', compact('ProductOrders', 'trackings'));
    }
    public function vendororderdetails($id)
    {
        $ordered_products = OrderedProduct::where('product_id', $id)->first();
        return view('web.Vendor_dashboard.vendororder', compact('ordered_products'));
    }
    public function vendorcategories()
    {
        $categories = vendorcategory::with(['subcategories'])->get();
        return view('web.Vendor_dashboard.vendorcategories', compact('categories'));
    }
    public function vendorviewstatus()
    {
        return view('web.Vendor_dashboard.vendorviewstatus');
    }
    // public function vendorordersdetails()
    // {
    //     dd('asfadsfsasafd');
    // }
    public function addspace(Request $request)
    {
        // dd($request->all());
        $addspace = new vendorspace;
        $addspace->spaces = $request->space;
        $addspace->requestedby = Auth::user()->id;
        $addspace->isactive = 2;
        $addspace->save();
        return redirect()->route('vendorcategories')->with('message', 'New Space Requested Sucessfully');
    }
    public function addsubcategory(Request $request)
    {
        $subcategory = new vendorsubcategory;
        $subcategory->subcategory = $request->subcategory;
        $subcategory->category_id = (int)$request->category;
        $subcategory->isactive = 2;
        $subcategory->requestedby = Auth::user()->id;
        $subcategory->save();
        return redirect()->route('vendorcategories')->with('message', 'New Sub Category Requested Sucessfully');
    }
}
