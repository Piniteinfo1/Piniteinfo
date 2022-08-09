<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DesignAlley Dashboard</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets1/imgs/theme/fav-da.png" />
        <!-- Template CSS -->
        <link href="assets1/css/main.css?v=1.1" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="screen-overlay"></div>
          @include('web.Vendor_dashboard.vendorsidebar')
        <main class="main-wrap">
            <header class="main-header navbar">
                <div class="col-search">
                    <form class="searchform">
                        <div class="input-group">
                            <input list="search_terms" type="text" class="form-control" placeholder="Search term" />
                            <button class="btn btn-light bg" type="button"><i class="material-icons md-search"></i></button>
                        </div>
                        <datalist id="search_terms">
                            <option value="Products"></option>
                            <option value="New orders"></option>
                            <option value="Apple iphone"></option>
                            <option value="Ahmed Hassan"></option>
                        </datalist>
                    </form>
                </div>
                <div class="col-nav">
                    <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i class="material-icons md-apps"></i></button>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link btn-icon" href="#">
                                <i class="material-icons md-notifications animation-shake"></i>
                                <span class="badge rounded-pill">3</span>
                            </a>
                        </li>
                      <!--   <li class="nav-item">
                            <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                        </li>
-->                       <!---  <li class="dropdown nav-item">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                                <a class="dropdown-item text-brand" href="#"><img src="assets1/imgs/theme/flag-us.png" alt="English" />English</a>
                                <a class="dropdown-item" href="#"><img src="assets1/imgs/theme/flag-fr.png" alt="Français" />Français</a>
                                <a class="dropdown-item" href="#"><img src="assets1/imgs/theme/flag-jp.png" alt="Français" />日本語</a>
                                <a class="dropdown-item" href="#"><img src="assets1/imgs/theme/flag-cn.png" alt="Français" />中国人</a>
                            </div>
                        </li> -->
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="assets1/imgs/people/avatar-2.png" alt="User" /></a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                                <a class="dropdown-item" href="page-settings-1.html"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                                <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
                                <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                                <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                                <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <section class="content-main">
                <div class="content-header">
                    <h2 class="content-title">Profile setting</h2>
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-5">
                           <!-- <aside class="col-lg-3 border-end">
                                <nav class="nav nav-pills flex-lg-column mb-4">
                                    <a class="nav-link active" aria-current="page" href="#">General</a>
                                    <a class="nav-link" href="#">Moderators</a>
                                    <a class="nav-link" href="#">Admin account</a>
                                    <a class="nav-link" href="#">SEO settings</a>
                                    <a class="nav-link" href="#">Mail settings</a>
                                    <a class="nav-link" href="#">Newsletter</a>
                                </nav>
                            </aside> -->
                            <div class="col-lg-12">
                                <section class="content-body p-xl-4">
                                    <form method="post" action="{{route('updatebussinessdetails')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="row gx-3">
                                                    <div class="col-6 mb-3">
                                                        <label class="form-label">Shop name</label>
                                                        <input name="shop_name" class="form-control" type="text" name="bussinessname"  value="{{$bussinessdetails->bussinessname ?? ''}}" placeholder="Type here" />
                                                    </div>
                                                    <!-- col .// -->
                                                   <div class="col-lg-6 mb-3">
                                                        <label class="form-label">Businees Registration Form</label>
                                                        <input class="form-control" type="file" name="legal_form" placeholder="Business Registration Form" />
                                                    </div>
                                                    <!-- col .// -->
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="form-label">City/ Town</label>
                                                        <input class="form-control" type="text" value="{{$bussinessdetails->city ?? ''}}"  name="city" />
                                                    </div>
                                                    <!-- col .// -->
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="form-label">Business Registration Number</label>
                                                        <input class="form-control" value="{{$bussinessdetails->bussinessregistrationnumber ?? ''}}" name="bussinessregistrationnumber" type="text" placeholder="MGRP123" />
                                                    </div>
                                                    <!-- col .// -->
                                                    <div class="col-lg-12 mb-3">
                                                        <label class="form-label">Address</label>

                                                        <input class="form-control" type="text" value="{{$bussinessdetails->address}}" placeholder="Type here" name="address" />
                                                    </div>
                                                    <!-- col .// -->
                                                       <!-- <div class="col-lg-6 mb-3">
                                                        <label class="form-label">National Identity Card</label>
                                                        <input class="form-control" type="file" name="identity" placeholder="UIDAI/PAN" />
                                                    </div> -->
                                                    <!-- col .// -->
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="form-label">Account Holder Name</label>
                                                        <input class="form-control" type="text" name="name" value="{{$Bankdetails->name ?? ''}}" placeholder="Ram" />
                                                    </div>
                                                       <div class="col-lg-6 mb-3">
                                                        <label class="form-label">Account Number</label>
                                                    <input class="form-control" type="text" name="accountnumber" value="{{$Bankdetails->accountnumber ?? ''}}" placeholder="ANDB000357" />
                                                    </div>
                                                     <div class="col-lg-6 mb-3">
                                                       <label class="form-label">Bank Name</label>
                                                    <input class="form-control" type="text" name="bankname" value="{{$Bankdetails->bankname ?? ''}}" placeholder="Union Bank" />
                                                    </div>
                                                     <div class="col-lg-6 mb-3">
                                                        <label class="form-label">IFSC Code</label>
                                                    <input class="form-control" type="text" name="ifsc" value="{{$Bankdetails->ifsc ?? ''}}" placeholder="ANDB000357" />
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                       <label class="form-label">Branch Name</label>
                                                    <input class="form-control" type="text" name="branchname" value="{{$Bankdetails->branchname ?? ''}}" placeholder="Governorpet" />
                                                    </div>
                                                     <div class="col-lg-6 mb-3">
                                                        <label class="form-label">Team Size</label>
                                                    <input class="form-control" type="text" name="teamsize" value="{{$bussinessdetails->teamsize ?? ''}}" placeholder="50" />
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                       <label class="form-label">Upload Cheque</label>
                                                    <input class="form-control" type="file" name="bankcopy" placeholder="Cheque book" />
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="form-label">National Identity Card</label>
                                                        <input class="form-control" type="file" name="identitycard" placeholder="UIDAI/PAN" />
                                                    </div>
                                                    
                                                </div>
                                                <!-- row.// -->
                                            </div>
                                            <!-- col.// -->
                                            <aside class="col-lg-4">
                                                <figure class="text-lg-center">

                                                    <img class="img-lg mb-3 img-avatar" src="{{asset('vendor/business/logo') . '/' . $bussinessdetails->logo}}" alt="No Image Please Choose " />
                                                    <figcaption>
                                                        <input class="btn btn-light rounded font-md" type="file" name="businesslogo">
                                                       <!--  <a class="btn btn-light rounded font-md" href="#"> <i class="icons material-icons md-backup font-md"></i> Upload </a> -->
                                                    </figcaption>
                                                </figure>
                                            </aside>
                                            <!-- col.// -->
                                        </div>
                                        <!-- row.// -->
                                        
                                        <br />
                                        <button class="btn btn-primary" type="submit" name="submit" value="submit">Save changes</button>
                                    </form>
                                    <hr class="my-5" />
                                    <div class="row" style="max-width: 920px">
                                        <div class="col-md">
                                            <article class="box mb-3 bg-light">
                                                <a class="btn float-end btn-light btn-sm rounded font-md" href="#">Change</a>
                                                <h6>Password</h6>
                                                <small class="text-muted d-block" style="width: 70%">You can reset or change your password by clicking here</small>
                                            </article>
                                        </div>
                                        <!-- col.// -->
                                        <div class="col-md">
                                            <article class="box mb-3 bg-light">
                                                <a class="btn float-end btn-light rounded btn-sm font-md" href="{{route('editprofile')}}">General Information</a>
                                                <h6>General Information</h6>
                                                <small class="text-muted d-block" style="width: 70%">You can Fill Your general Details here</small>
                                            </article>
                                        </div> 
                                     <!--   <div class="col-md">
                                            <article class="box mb-3 bg-light">
                                                <a class="btn float-end btn-light rounded btn-sm font-md" href="#">Deactivate</a>
                                                <h6>Remove account</h6>
                                                <small class="text-muted d-block" style="width: 70%">Once you delete your account, there is no going back.</small>
                                            </article>
                                        </div> -->
                                        <!-- col.// -->
                                    </div>
                                    <!-- row.// -->
                                </section>
                                <!-- content-body .// -->
                            </div>
                            <!-- col.// -->
                        </div>
                        <!-- row.// -->
                    </div>
                    <!-- card body end// -->
                </div>
                <!-- card end// -->
            </section>
            <!-- content-main end// -->
            <footer class="main-footer font-xs">
                <div class="row pb-30 pt-15">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        &copy; DesignAlley . All Right Reserved
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end">All rights reserved</div>
                    </div>
                </div>
            </footer>
        </main>
        <script src="assets1/js/vendors/jquery-3.6.0.min.js"></script>
        <script src="assets1/js/vendors/bootstrap.bundle.min.js"></script>
        <script src="assets1/js/vendors/select2.min.js"></script>
        <script src="assets1/js/vendors/perfect-scrollbar.js"></script>
        <script src="assets1/js/vendors/jquery.fullscreen.min.js"></script>
        <!-- Main Script -->
        <script src="assets1/js/main.js?v=1.1" type="text/javascript"></script>
    </body>
</html>
