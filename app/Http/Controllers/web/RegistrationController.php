<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrationController extends Controller
{
    public function Vendorregistration()
    {
        return view('web.Vendorregistration');
    }
    public function vendorregister(Request $request)
    {
        $password = Hash::make($request->password);
        // dd($password);
        $NewVendor = new User;
        $NewVendor->name = $request->name;
        $NewVendor->mobile = $request->mobile;
        $NewVendor->email = $request->email;
        $NewVendor->password = $password;
        $NewVendor->role = 1;
        $NewVendor->save();
        return redirect()->route('login');
    }
}
