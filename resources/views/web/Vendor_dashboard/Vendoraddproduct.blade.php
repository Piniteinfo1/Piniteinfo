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
        <link rel="stylesheet" type="text/css" href="{{asset('assets1/css/example-styles.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets1/css/demo-styles.css')}}" />
        <style type="text/css"></style>
    </head>

    <body>
        <div class="screen-overlay"></div>
    @include('web.Vendor_dashboard.vendorsidebar')
        <main class="main-wrap">
            <header class="main-header navbar">
                <div class="col-search">
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
                <div class="row">
                    <div class="col-9">
                        <div class="content-header">
                            <h2 class="content-title">Add New Product</h2>
                            <div>
                                <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                                <button class="btn btn-md rounded font-sm hover-up">Publish</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Add New Product</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('VendorProductAdd')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Product Name</label>
                                        <input type="text" placeholder="Type here" name="product_name" class="form-control" id="product_name" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Product description</label>
                                        <textarea placeholder="Type here" name="product_description" class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="text" name="price" placeholder="₹" class="form-control" id="price" />
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="tax" class="form-label">Tax rate</label>
                                                <input type="text" placeholder="%" name="tax" class="form-control" id="taxrate" />
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="shipping" class="form-label">Shipping fees</label>
                                                <input type="text" name="shipping" placeholder="₹" class="form-control" id="shipping" />
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="etd" class="form-label">Estimate Time To Deliver</label>
                                                <input type="number" name="etd" placeholder="No. of days" class="form-control" id="etd" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label">Brand name</label>
                                                <select class="form-select" name="product_brand_name">
                                                    <option value="asian"> Asian Paints </option>
                                                    <option value="fevicol"> Fevicol </option>
                                                    <option value="neroloc"> Neroloc </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="form-label">Create Brand</label>
                                                <input type="checkbox" class="mx-2" name="brand_name1" onclick="dynInput(this);" />
                                            </div>
                                            <div class="col-lg-4">
                                                <p id="insertinputs"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <label for="select-category" class="form-label">Select Category:</label>
                                                <select id="select-category" name="select-category" multiple>
                                                    <option value="Residential">Residential Interiors</option>
                                                    <optgroup label="Home">
                                                        <option value="Livingroom">Living Room</option>
                                                        <option value="Bedroom">Bedroom</option>
                                                        <option value="kitchen">Kitchen</option>
                                                        <option value="Bathroom">Bathroom</option>
                                                        <option value="Poojaroom">Pooja Room</option>
                                                    </optgroup>
                                                    <option value="Commercial">Commercial Interiors</option>
                                                    <option value="Renovation">Renovation</option>
                                                    <option value="Office">Office Interiors</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <label for="select-sub_category" class="form-label">Select Sub Category:</label>
                                                <select id="select-sub_category" name="select-sub_category" multiple>
                                                    <option value="Tiles">Tiles</option>
                                                    <option>Wallpapers</option>
                                                    <option value="">Paints</option>
                                                    <option>Fabrics</option>
                                                    <option>Laminates</option>
                                                    <option>Marbles</option>
                                                    <option>Sanitaryware</option>
                                                    <option>Furniture</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="form-label">Create Category</label>
                                            <input type="checkbox" class="mx-2" name="Category_name1" onclick="dynInput1(this);" />
                                            <p id="insertinputs1" class="mt-2"></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Create Sub Category</label>
                                            <input type="checkbox" class="mx-2" name="sub_Category_name1" onclick="dynInput2(this);" />
                                            <p id="insertinputs2" class="mt-2"></p>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="row">
                                            <div class="col-lg-3"><label for="length" class="form-label">Length</label> <input type="text" placeholder="inch" name="length" class="form-control" id="length" /></div>
                                            <div class="col-lg-3">
                                                <label for="breadth" class="form-label">Breadth</label>
                                                <input type="text" name="breadth" placeholder="inch" class="form-control" id="breadth" />
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="height" class="form-label">Height</label>
                                                <input type="text" name="height" placeholder="inch" class="form-control" id="height" />
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="form-label">Units</label>
                                                <select class="form-select" name="units">
                                                    <option value="fts">Sq. Ft</option>
                                                    <option value="inches">Sq. Inches</option>
                                                    <option value="cms">Sq. Cms</option>
                                                    <option value="mts">Sq. Mts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="product_image" class="form-label">Upload Image</label>
                                                <div class="input-upload">
                                                    <input class="form-control" name="product_image" accept="image/png, image/gif, image/jpeg" type="file" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="product_images" class="form-label mt-2">Upload Image Gallery</label>
                                                <input type="file" name="product_images[]" accept="image/*" class="form-control" multiple />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="tags" class="form-label">Tags</label>
                                        <input type="text" name="tags" class="form-control" />
                                    </div>
                                    <div class="mb-4">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label" for="color">Color</label>
                                                <select class="form-select" name="product_color">
                                                    <option value="red">Red</option>
                                                    <option value="blue">Blue</option>
                                                    <option value="green">Green</option>
                                                    <option value="yellow">Yellow</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="violet">Violet</option>
                                                    <option value="black">Black</option>
                                                    <option value="white">White</option>
                                                    <option value="orange">Orange</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="form-label">Custom Color</label>
                                                <input type="checkbox" class="mx-2" name="color_name" onclick="dynInput3(this);" />
                                            </div>
                                            <div class="col-lg-4">
                                                <p id="insertinputs3" class="mb-2"></p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                                <input type="submit" name="submit" value="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('assets1/js/jquery-2.2.4.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('jquery.multi-select.js')}}"></script>
        <script type="text/javascript">
            function dynInput(cbox) {
                if (cbox.checked) {
                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "product_brand_name";
                    input.classList.add("form-control");
                    var div = document.createElement("div");
                    div.id = cbox.name;
                    div.innerHTML = "Enter Brand name ";
                    div.appendChild(input);
                    document.getElementById("insertinputs").appendChild(div);
                } else {
                    document.getElementById(cbox.name).remove();
                }
            }
            function dynInput1(cbox) {
                if (cbox.checked) {
                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "product_category_name";
                    input.classList.add("form-control");
                    var div = document.createElement("div");
                    div.id = cbox.name;
                    div.innerHTML = "Enter Category name ";
                    div.appendChild(input);
                    document.getElementById("insertinputs1").appendChild(div);
                } else {
                    document.getElementById(cbox.name).remove();
                }
            }
            function dynInput2(cbox) {
                if (cbox.checked) {
                    var input = document.createElement("input");
                    input.type = "text";
                    input.classList.add("form-control");
                    input.name = "product_sub_category_name";
                    var div = document.createElement("div");
                    div.id = cbox.name;
                    div.innerHTML = "Enter Sub Category name ";
                    div.appendChild(input);
                    document.getElementById("insertinputs2").appendChild(div);
                } else {
                    document.getElementById(cbox.name).remove();
                }
            }
            function dynInput3(cbox) {
                if (cbox.checked) {
                    var input = document.createElement("input");
                    input.type = "color";
                    input.classList.add("form-control");
                    input.name = "product_color_name";
                    var div = document.createElement("div");
                    div.id = cbox.name;
                    div.innerHTML = "Choose Custom Color ";

                    div.appendChild(input);
                    document.getElementById("insertinputs3").appendChild(div);
                } else {
                    document.getElementById(cbox.name).remove();
                }
            }
            $(function () {
                $("#select-category").multiSelect();
                $("#select-sub_category").multiSelect();
                $("#line-wrap-example").multiSelect({
                    positionMenuWithin: $(".position-menu-within"),
                });
            });
        </script>
    </body>
</html>
