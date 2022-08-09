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
            @include('web.Vendor_dashboard.vendorheader')
            <section class="content-main">
                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Products List</h2>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div>
                        <a href="#" class="btn btn-light rounded font-md">Export</a>
                        <a href="#" class="btn btn-light rounded font-md">Import</a>
                        <a href="page-form-product-1.html" class="btn btn-primary btn-sm rounded">Create new</a>
                    </div>
                </div>
                <div id="productslist" class="card mb-4">
                    <header class="card-header">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                            </div>
                            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                                <select class="form-select">
                                    <option selected>All category</option>
                                    <option>Electronics</option>
                                    <option>Clothes</option>
                                    <option>Automobile</option>
                                </select>
                            </div>
                            @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                            <div class="col-md-2 col-6">
                                <input type="date" value="02.05.2021" class="form-control" />
                            </div>
                            <div class="col-md-2 col-6">
                                <select class="form-select">
                                    <option selected>Status</option>
                                    <option>Active</option>
                                    <option>Disabled</option>
                                    <option>Show all</option>
                                </select>
                            </div>
                        </div>
                    </header>
                    @foreach($Products as $product)
                    <div class="card-body">
                        <article class="itemlist">
                            <div class="row align-items-center">
                                <div class="col col-check flex-grow-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                    <a class="itemside" href="#">
                                        <div class="left">
                                            <img src="{{public_path('images/vendorproductimage/') . $product->image}}" alt="Item" />
                                        </div>
                                        <div class="info">
                                            <h6 class="mb-0">{{$product->title}}</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-2 col-sm-2 col-4 col-price"><span>{{$product->price}}</span></div>
                                @if($product->status == 1)
                                <div class="col-lg-2 col-sm-2 col-4 col-status">
                                    <span class="badge rounded-pill alert-success">Active</span>
                                </div>
                                @else
                                <div class="col-lg-2 col-sm-2 col-4 col-status">
                                    <span class="badge rounded-pill alert-success">In Active</span>
                                </div>
                                @endif
                                <div class="col-lg-1 col-sm-2 col-4 col-date">
                                    <span>{{$product->created_at}}</span>
                                </div>
                                <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                    <a href="#" class="btn btn-sm font-sm rounded btn-brand"> <i class="material-icons md-edit"></i> Edit </a>
                                    <a onclick="deleteproduct('{{$product->id}}')" class="btn btn-sm font-sm btn-light rounded"> <i class="material-icons md-delete_forever"></i> Delete </a>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
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
        <script src="assets1/js/vendors/jquery-3.6.0.min.js"></script>
        <script src="assets1/js/vendors/bootstrap.bundle.min.js"></script>
        <script src="assets1/js/vendors/select2.min.js"></script>
        <script src="assets1/js/vendors/perfect-scrollbar.js"></script>
        <script src="assets1/js/vendors/jquery.fullscreen.min.js"></script>
        <!-- Main Script -->
        <script src="assets1/js/main.js" type="text/javascript"></script>
    </body>
</html>
<script type="text/javascript">
    function deleteproduct(val) {
        let result = confirm('Are you sure you want to delete?');
        let message = result ? 1 : 0;
        if(message == 1)
        {
            $.ajax({
                type: 'GET',
                url: '/Productdelete/' + val,
                contentType: 'application/json; charset=utf-8',
                success: function(data) {
                   alert('Product deleted Sucessfully')
                    $( "#productslist" ).load(window.location.href + " #productslist" );
                },
                error: function(data) {
                   console.log(data);
                }
             });
        }
    }
</script>