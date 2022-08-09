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
          <aside class="navbar-aside" id="offcanvas_aside">
            <div class="aside-top">
                <a href="index.html" class="brand-wrap">
                    <img src="{{asset('assets1/imgs/theme/logo.png')}}" class="logo" alt="DesignAlley Dashboard" />
                </a>
                <div>
                    <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
                </div>
            </div>
            <nav>
                <ul class="menu-aside">
                    <li class="menu-item active">
                        <a class="menu-link" href="index.html">
                            <i class="icon material-icons md-home"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-products-list.html">
                            <i class="icon material-icons md-shopping_bag"></i>
                            <span class="text">Products</span>
                        </a>
                        <div class="submenu">
                            <a href="page-products-list.html">Product List</a>
                            <a href="page-products-grid.html">Product grid</a>
                           <!-- <a href="page-products-grid-2.html">Product grid 2</a> -->
                            <a href="page-categories.html">Categories</a>
                        </div>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-orders-1.html">
                            <i class="icon material-icons md-shopping_cart"></i>
                            <span class="text">Orders</span>
                        </a>
                        <div class="submenu">
                            <a href="page-orders-1.html">Order list 1</a>
                         <!---    <a href="page-orders-2.html">Order list 2</a> -->
                            <a href="page-orders-detail.html">Order detail</a>
                        </div>
                    </li>
                 <!--   <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-sellers-cards.html">
                            <i class="icon material-icons md-store"></i>
                            <span class="text">Sellers</span>
                        </a>
                        <div class="submenu">
                            <a href="page-sellers-cards.html">Sellers cards</a>
                            <a href="page-sellers-list.html">Sellers list</a>
                            <a href="page-seller-detail.html">Seller profile</a>
                        </div>
                    </li> -->
                     <li class="menu-item">
                        <a class="menu-link" href="page-form-product-1.html">
                            <i class="icon material-icons md-add_box"></i>
                            <span class="text">Add product</span>
                        </a>
                    </li>
                  <!--  <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-form-product-1.html">
                            <i class="icon material-icons md-add_box"></i>
                            <span class="text">Add product</span>
                        </a>
                        <div class="submenu">
                            <a href="page-form-product-1.html">Add product </a>
                          <a href="page-form-product-2.html">Add product 2</a>
                            <a href="page-form-product-3.html">Add product 3</a>
                            <a href="page-form-product-4.html">Add product 4</a>
                        </div>
                    </li> -->
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="page-transactions-1.html">
                            <i class="icon material-icons md-monetization_on"></i>
                            <span class="text">Transactions</span>
                        </a>
                        <div class="submenu">
                            <a href="page-transactions-1.html">Transaction 1</a>
                            <a href="page-transactions-2.html">Transaction 2</a>
                        </div>
                    </li>
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="#">
                            <i class="icon material-icons md-person"></i>
                            <span class="text">Account</span>
                        </a>
                        <div class="submenu">
                            <a href="page-account-login.html">User login</a>
                            <a href="page-account-register.html">User registration</a>
                            <a href="page-error-404.html">Error 404</a>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="page-reviews.html">
                            <i class="icon material-icons md-comment"></i>
                            <span class="text">Reviews</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="page-brands.html"> <i class="icon material-icons md-stars"></i> <span class="text">Brands</span> </a>
                    </li>
                     <li class="menu-item">
                        <a class="menu-link" href="page-settings-1.html">  <i class="icon material-icons md-settings"></i> <span class="text">Settings</span> </a>
                    </li>
                    <!---<li class="menu-item">
                        <a class="menu-link" disabled href="#">
                            <i class="icon material-icons md-pie_chart"></i>
                            <span class="text">Statistics</span>
                        </a>
                    </li> -->
                </ul>
                <hr />
            <!---     <ul class="menu-aside">
                    <li class="menu-item has-submenu">
                        <a class="menu-link" href="#">
                            <i class="icon material-icons md-settings"></i>
                            <span class="text">Settings</span>
                        </a>
                        <div class="submenu">
                            <a href="page-settings-1.html">Setting sample 1</a>
                            <a href="page-settings-2.html">Setting sample 2</a>
                        </div> -->
                     <!--  <li class="menu-item">
                        <a class="menu-link" href="page-blank.html">
                            <i class="icon material-icons md-local_offer"></i>
                            <span class="text"> Starter page </span>
                        </a>
                    </li> -->
              <!--  </ul>
                <br />
                <br /> -->
            </nav>
        </aside>
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
                        <h2 class="content-title card-title">Order detail</h2>
                        <p>Details for Order ID: {{$ordered_products->product_id}}</p>
                    </div>
                </div>
                <div class="card">
                    <header class="card-header">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                                <span> <i class="material-icons md-calendar_today"></i> <b>{{$ordered_products->created_at}}</b> </span> <br />
                                <small class="text-muted">Order ID: {{$ordered_products->product_id}}</small>
                            </div>
                            <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                                <select class="form-select d-inline-block mb-lg-0 mr-5 mw-200">
                                    <option>Change status</option>
                                    <option>Awaiting payment</option>
                                    <option>Confirmed</option>
                                    <option>Shipped</option>
                                    <option>Delivered</option>
                                </select>
                               
                                <a class="btn btn-primary" href="#">Save</a>
                                   <a class="btn btn-secondary" href="page-invoice.html">invoice</a>
                                <a class="btn btn-secondary print ms-2" onclick="window.print()"><i class="icon material-icons md-print"></i></a>
                            </div>
                        </div>
                    </header>
                    <!-- card-header end// -->
                    <div class="card-body">
                        <div class="row mb-50 mt-20 order-info-wrap">
                           <!-- <div class="col-md-4">
                                <article class="icontext align-items-start">
                                    <span class="icon icon-sm rounded-circle bg-primary-light">
                                        <i class="text-primary material-icons md-person"></i>
                                    </span>
                                    <div class="text">
                                        <h6 class="mb-1">Customer</h6>
                                        <p class="mb-1">
                                            John Alexander <br />
                                            alex@example.com <br />
                                            +998 99 22123456
                                        </p>
                                        <a href="#">View profile</a>
                                    </div>
                                </article>
                            </div> -->
                            <!-- col// -->
                            <div class="col-md-6">
                                <article class="icontext align-items-start">
                                    <span class="icon icon-sm rounded-circle bg-primary-light">
                                        <i class="text-primary material-icons md-local_shipping"></i>
                                    </span>
                                    <div class="text">
                                        <h6 class="mb-1">Order info</h6>
                                        <p class="mb-1">
                                            Shipping: Fargo express <br />
                                            Pay method: card <br />
                                            Status: new
                                        </p>
                                        <a href="#">Download info</a>
                                    </div>
                                </article>
                            </div>
                            <!-- col// -->
                            <div class="col-md-6">
                                <article class="icontext align-items-start">
                                    <span class="icon icon-sm rounded-circle bg-primary-light">
                                        <i class="text-primary material-icons md-place"></i>
                                    </span>
                                    <div class="text">
                                        <h6 class="mb-1">Deliver to</h6>
                                        <p class="mb-1">
                                            City: Tashkent, Uzbekistan <br />Block A, House 123, Floor 2 <br />
                                            Po Box 10000
                                        </p>
                                        <a href="#">View profile</a>
                                    </div>
                                </article>
                            </div>
                            <!-- col// -->
                        </div>
                        <!-- row // -->
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="20%">Product</th>
                                                <th width="20%">Unit Price</th>
                                                <th width="20%">Quantity</th>
                                               <th width="20%">Assign Team</th>
                                                <th width="20%" class="text-end">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a class="itemside" href="#">
                                                        <div class="left">
                                                            <img src="{{asset('assets1/imgs/items/1.jpg')}}" width="40" height="40" class="img-xs" alt="Item" />
                                                        </div>
                                                        <div class="info">Haagen-Dazs Caramel Cone Ice</div>
                                                    </a>
                                                </td>
                                                <td>$44.25</td>
                                                <td>2</td>
                                                <td><select class="form-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                     <option value="10">10</option>
                                                      <option value="15">15</option>
                                                </select></td>
                                                <td class="text-end">$99.50</td>
                                            </tr>
                                            
                            
                                        
                                
                                        </tbody>
                                    </table>
                                </div>
                                <!-- table-responsive// -->
                            </div>
                            <!-- col// -->
                            <div class="col-lg-1"></div>
                            <div class="col-lg-4">
                            </div>
                            <!-- col// -->
                        </div>
                    </div>
                    <!-- card-body end// -->
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
        <script src="{{asset('assets1/js/vendors/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets1/js/vendors/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets1/js/vendors/select2.min.js')}}"></script>
        <script src="{{asset('assets1/js/vendors/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('assets1/js/vendors/jquery.fullscreen.min.js')}}"></script>
        <!-- Main Script -->
        <script src="{{asset('assets1/js/main.js?v=1.1')}}" type="text/javascript"></script>
    </body>
</html>