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
        <link href="{{asset('assets1/css/main.css?v=1.1')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="screen-overlay"></div>
          @include('web.Vendor_dashboard.vendorsidebar')
        <main class="main-wrap">
           <!-- <header class="main-header navbar">
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
                         <li class="nav-item">
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
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{asset('assets1/imgs/people/avatar-2.png')}}" alt="User" /></a>
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
                    <div>
                        <h2 class="content-title card-title">Categories</h2>
                        <p>Add, edit or delete a category</p>
                    </div>
                    <div>
                        <input type="text" placeholder="Search Categories" class="form-control bg-white" />
                    </div>
                </div>
                @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                            <form method="POST" action="{{route('addspace')}}">
                                @csrf
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Add Space</label>
                                        <input type="text" id="category" placeholder="Type here" name="space" class="form-control"  />
                                    </div>
                                      <div class="d-grid">
                                        <button  type="submit" value="submit" class="btn btn-primary">Create Space</button>
                                    </div>
                                    </form>
                                    <br><br>
                                    <form method="POST" action="{{route('addsubcategory')}}">
                                        @csrf
                                    <div class="mb-4">
                                        <label class="form-label">Category</label>
                                        <select name="category" class="form-select">
                                            <option>Select one</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Add Category</label>
                                        <input type="text" id="category" placeholder="Type here" name="subcategory" class="form-control"  />
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" value="submit" class="btn btn-primary">Create Sub Category</button>
                                    </div>
                                    </form>
                            </div>
                            <div class="col-md-9">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                </th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                </td>
                                                <td>{{$category->id}}</td>
                                                <td><b>{{$category->category}}</b></td>
                                                <td>
                                                    @foreach($category->subcategories as $sub)
                                                    {{$sub->subcategory}},
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- .col// -->
                        </div>
                        <!-- .row // -->
                    </div>
                    <!-- card body .// -->
                </div>
                <!-- card .// -->
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
        <script src="{{asset('assets1/js/vendors/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets1/js/vendors/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets1/js/vendors/select2.min.js')}}"></script>
        <script src="{{asset('assets1/js/vendors/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('assets1/js/vendors/jquery.fullscreen.min.js')}}"></script>
        <!-- Main Script -->
        <script src="{{asset('assets1/js/main.js?v=1.1')}}" type="text/javascript"></script>
    </body>
</html>

