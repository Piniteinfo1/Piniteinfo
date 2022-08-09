<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Vendorimage;
use App\models\OrderedProduct;

class CheckUserController extends Controller
{
    public function CheckUser(Request $request)
    {
        // $Price = Vendorimage::where('user_id', Auth::user()->id)->select('price')->get();
        // foreach($Price  as $total)
        // {
        //     $value = $total->price;
        //     $sales = $value
        // }
        $ProductsCount = Vendorimage::where('user_id', Auth::user()->id)->count();
        $Orders = OrderedProduct::where('vendor_id', Auth::user()->id)->where('product_status', 'ordered')->count();
        $Processing = OrderedProduct::where('vendor_id', Auth::user()->id)->where('product_status', 'processing')->count();
        $Completed = OrderedProduct::where('vendor_id', Auth::user()->id)->where('product_status', 'completed')->count();
        $AllOrders = OrderedProduct::where('vendor_id', Auth::user()->id)->count();
        return view('web.Vendor_dashboard.index', compact('ProductsCount', 'Orders', 'Processing', 'Completed', 'AllOrders'));
    }
}
