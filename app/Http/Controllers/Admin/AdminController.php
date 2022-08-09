<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Validator;
use App\Models\InteriorDesignerImage;
use App\Models\chat;
use Auth;

class AdminController extends Controller
{
    public function Admin()
    {
        // $Products = Vendorimage::get();
        $ProductsCount = \DB::select('select count(*) as ProductsCount from vendor_images');
        $DesignsCount = \DB::select('select count(*) as DesignsCount from interior_designer_images');
        $users = \DB::select('select count(*) as users from users');
        return view('Admin_Dashboard.index',compact('ProductsCount', 'DesignsCount', 'users'));
    }
    public function HouseownersList()
    {
        $Houseowners = User::where('role', 3)->paginate(1);
        return view('Admin_Dashboard.page-users-list', compact('Houseowners'));
    }
    public function DesignerList()
    {
        $Designers = User::where('role', 2)->get();
        return view('Admin_Dashboard.page-designers-list', compact('Designers'));
    }
    public function VendorsList()
    {
        $Vendors = User::where('role', 1)->get();
        return view('Admin_Dashboard.page-vendor-list', compact('Vendors'));
    }
    public function Houseownerview(Request $request, $id)
    {
        $Houseowner = User::where('id', $id)->first();
        $role = \DB::table('roles')->where('role_id', $Houseowner->role)->select('role_name')->first();
        $role_name = $role->role_name;
        return view('Admin_Dashboard.page-users-view', compact('Houseowner', 'role_name'));
    }
    public function UserEdit(Request $request, $id)
    {
        $HouseownerEdit = User::where('id', $id)->first();
        $role = \DB::table('roles')->where('role_id', $HouseownerEdit->role)->select('role_name')->first();
        $role_name = $role->role_name;
        return view('Admin_Dashboard.page-users-edit', compact('HouseownerEdit', 'role_name'));
        
    }
    public function userupdate(Request $request)
    {
         $validator = Validator::make($request->all(), [
                'id' => 'required',
                'name' => 'required',
                'email' =>'required',
                'role' => 'required',
                'status' => 'required',
            ]);
         $Role = \DB::table('roles')->where('role_name', $request->role)->select('role_id')->first();

         $UpdateUser = User::where('id', $request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $Role->role_id,
                'isactive' => (int)$request->status,
         ]);
         if($Role->role_id == 3){
            return redirect()->route('Admin-houseowners-list')->with('message', 'User  ' . $request->name . '  Updated Sucessfully');
         }
         if($Role->role_id == 2)
         {
            return redirect()->route('Admin-designer-list')->with('message', 'Designer  ' . $request->name . '  Updated Sucessfully');
         }
         if($Role->role_id == 1)
         {
            return redirect()->route('Admin-Vendors-List')->with('message', 'Vendor  ' . $request->name . '  Updated Sucessfully');
         }
         
         // dd('asfadsfasdf');
    }
    public function AdminViewallproducts()
    {
        return view('Admin_Dashboard.page-products');
    }
    public function AdminAnalytics()
    {
        return view('Admin_Dashboard.dashboard-analytics');
    }
    public function AdminEmail()
    {
        return view('Admin_Dashboard.app-email');
    }
    public function AdminChat()
    {
        // dd(Auth::user()->id);
        // $Chats = Chat::get();
        // $c = Chat::where('sender_id', Auth::user()->id)->orWhere('reciver_id', Auth::user()->id)->latest()->first();
        $Chats = Chat::where('sender_id', Auth::user()->id)->orWhere('reciver_id', Auth::user()->id)->orderBy('updated_at', 'desc')->select('sender_id', 'reciver_id', 'message')->get()->unique('reciver_id');
        // dd($Chats);
        return view('Admin_Dashboard.app-chat', compact('Chats'));
    }
    public function Adminecommerce()
    {
        return view('Admin_Dashboard.dashboard-ecommerce');
    }
    public function Adminetodo()
    {
        return view('Admin_Dashboard.app-todo');
    }
    public function Admincalander()
    {
        return view('Admin_Dashboard.app-calendar');
    }
    public function Adminkanban()
    {
        return view('Admin_Dashboard.app-kanban');
    }
    public function Adminprofile()
    {
        return  view('Admin_Dashboard.page-user-profile');
    }
    public function Adminproducts()
    {
        $designs = InteriorDesignerImage::with('gallery_images')->get();
        return view('Admin_Dashboard.page-products-view', compact('designs'));
    }
    public function h()
    {
       return view('Admin_Dashboard.insta');
    }
}
