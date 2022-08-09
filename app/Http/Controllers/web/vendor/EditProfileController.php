<?php

namespace App\Http\Controllers\web\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;
use App\Models\vendorbusines;
use App\Models\vendorbankdetail;

class EditProfileController extends Controller
{
    public function editprofile()
    {
        $ProfileDetails = User::where('id', Auth::user()->id)->select('id', 'name', 'email', 'mobile', 'profile', 'role', 'address')->first();
        // dd($ProfileDetails);
        return view('web.Vendor_dashboard.vendoreditprofile', compact('ProfileDetails'));
    }
    public function editprofiledetails(Request $request)
    {
        if(isset($request->profile)){
            $image = $request->file('profile');
            $imagename = Str::random(10) . time().'.'.$image->getClientOriginalName();
            $image->move(public_path('images/ProfileImages'), $imagename);
            $UpdateProfile = User::where('id', Auth::user()->id)->update
            ([
                'profile' => $imagename
            ]);
        }
        $UpdateProfile = User::where('id', Auth::user()->id)->update
            ([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
            ]);
            return redirect()->route('editprofile')->with('message', 'Profile Details Updated Sucessfully');
        
    }
    public function bussinessdetails()
    {
        $bussinessdetails = vendorbusines::where('user_id', Auth::user()->id)->first();
        $Bankdetails = vendorbankdetail::where('user_id', Auth::user()->id)->first();
        // dd($Bankdetails);
        // dd($bussinessdetails);
        // dd(Auth::user()->id);
        return view('web.Vendor_dashboard.bussinessdetails', compact('bussinessdetails', 'Bankdetails'));
    }
    public function updatebussinessdetails(Request $request)
    {
        if(isset($request->businesslogo) && $request->businesslogo != null)
        {
            $BusinessLogo = $request->file('businesslogo');
            $BusinessLogoName = Str::random(10) . time().'.'.$BusinessLogo->getClientOriginalName();
            $BusinessLogo->move(public_path('vendor/business/logo'), $BusinessLogoName);
            // dd($legalformname);
            $UpdateLegalForm = vendorbusines::where('user_id', Auth::user()->id)->update([
                    'logo' => $BusinessLogoName
            ]);
        }
        if(isset($request->legal_form) && $request->legal_form != null)
        {
            $Legalform = $request->file('legal_form');
            $legalformname = Str::random(10) . time().'.'.$Legalform->getClientOriginalName();
            $Legalform->move(public_path('vendor/business/legalform'), $legalformname);
            // dd($legalformname);
            $UpdateLegalForm = vendorbusines::where('user_id', Auth::user()->id)->update([
                    'legal_form' => $legalformname
            ]);
            // dd('done');
        }
        if(isset($request->bankcopy) && $request->bankcopy != null)
        {
            $BankCopy = $request->file('bankcopy');
            $BankCopyName = Str::random(10) . time().'.'.$BankCopy->getClientOriginalName();
            $BankCopy->move(public_path('vendor/business/bankcopy'), $BankCopyName);
            $UpdateLegalForm = vendorbankdetail::where('user_id', Auth::user()->id)->update([
                    'bankcopy' => $BankCopyName
            ]);
        }
        if(isset($request->identitycard) && $request->identitycard != null)
        {
            $IdentityCard = $request->file('identitycard');
            $IdentityCardName = Str::random(10) . time().'.'.$IdentityCard->getClientOriginalName();
            $IdentityCard->move(public_path('vendor/business/idcards'), $IdentityCardName);
            $UpdateIdentityCard = vendorbusines::where('user_id', Auth::user()->id)->update([
                    'IdentityCardName' => $IdentityCardName
            ]);
        }
        $UpdateBankDetails = vendorbankdetail::where('user_id', Auth::user()->id)->update([
                'accountnumber' => $request->accountnumber,
                'bankname' => $request->bankname,
                'ifsc' => $request->ifsc,
                'branchname' => $request->branchname,
                'name' => $request->name
        ]);
        $UpdateBusinessDetails =  vendorbusines::where('user_id', Auth::user()->id)->update([
                'bussinessname' => $request->shop_name,
                'city' => $request->city,
                'bussinessregistrationnumber' => $request->bussinessregistrationnumber,
                'address' => $request->address,
                'teamsize' => $request->teamsize
        ]);
        return redirect()->route('bussinessdetails')->with('message', 'Business Details Updated Sucessfully');
    }
    public function updatebusinesslogo()
    {
        dd('dsfsdffsd');
    }
}
