<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sidebar</title>
<link href="{{asset('style.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS only -->
    
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <script src="{{asset('sidebar.js')}}" type="text/javascript"></script>
    
    
    
</head>

<body>
    @include('web.vendor.vendorsidemenu')
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->
    <div  class="d-flex flex-row justify-content-between">
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
<div>
    
     
    <modal class="nav-item">
                    <a class="nav-link" href="#submenu114" data-toggle="collapse" data-target="#submenu114" style="color:black;"><!-- <img src="{{asset('logo/wisteria-in-bloom-royalty-free-image-1653423554.jpg')}}" width="40px" height="40px" style="border-radius:50%;" alt=""/> --></a>
                    <ul class="list-unstyled flex-column pl-3 collapse" id="submenu114" aria-expanded="false">
                       <li class="nav-item"><a class="nav-link" href="" style="color:black;align-items: center" >Welcome!</a></li>
                        <li class="nav-item"><a class="nav-link" href="" style="color:black"><i class="bi bi-person"></i>&nbsp;Edit Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="" style="color:black"><i class="bi bi-envelope-paper"></i>&nbsp;Inbox</a></li>
                        <li class="nav-item"><a class="nav-link" href="" style="color:black"><i class="bi bi-box-arrow-left"></i>&nbsp;Logout</a></li>
                     </ul>
                </modal>
    </div>
    </div>
  <!-- Demo content -->
 
   
      <div class="container">
              <div class="row">
                  <div class="col-12 col-md-4" >
                       <div class="col-xl-3 col-sm-6 py-2" style="width:90%">
                    <div class="card  text-white h-100" style="border-radius: 10px;">
                        <div class="card-body" style="background-color: #F85108;border-radius: 10px;width:150%">
                            <div class="rotate">
                              <i class="fa fa-signal fa-3x" aria-hidden="true"></i>
                            </div>
                            <h6 class="text-uppercase"> Sales</h6>
                            <h1 class="display-4">1106</h1>
                            <button class="button bg-light" style="border:none;border-radius:10px;">View All</button>
                        </div>
                    </div>
                </div>
                </div>  
                   <div class="col-12 col-md-4">
                         <div class="col-xl-3 col-sm-6 py-2" style="width:90%">
                    <div class="card  text-white h-100" style="border-radius: 10px;">
                        <div class="card-body " style="background-color: #089CED;border-radius: 10px;width:150%">
                            <div class="rotate">
                                <i class="fa fa-credit-card fa-3x" aria-hidden="true"></i>
                            </div>
                            <h6 class="text-uppercase">
All Orders</h6>
                            <h1 class="display-4">{{$AllOrders}}</h1>
                            <button class="button bg-light" style="border:none;border-radius:10px;">View All</button>
                        </div>
                    </div>
                </div>
                </div>  
                   <div class="col-12 col-md-4">
                        <div class="col-xl-3 col-sm-6 py-2 col-lg-8" style="width:90%">
                    <div class="card  text-white h-100" style="border-radius: 10px;">
                        <div class="card-body " style="background-color: #0FA49B;border-radius: 10px;width:150%">
                            <div class="rotate">
                               <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                            </div>
                            <h6 class="text-uppercase">Products</h6>
                            <h1 class="display-4">{{$ProductsCount}}</h1>
                            <button class="button bg-light" style="border:none;border-radius:10px;">View All</button>
                        </div>
                    </div>
                </div>
                </div>  
                  
                  
                  
                  <div class="col-12 col-md-4" >
                       <div class="col-xl-3 col-sm-6 py-2" style="width:90%">
                    <div class="card  text-white h-100" style="border-radius: 10px;">
                        <div class="card-body " style="background-color: #6757EC;border-radius: 10px;width:150%">
                            <div class="rotate">
                                <i class="fa fa-truck fa-3x" aria-hidden="true"></i>
                            </div>
                            <h6 class="text-uppercase">Orders</h6>
                            <h1 class="display-4">{{$Orders}}</h1>
                            <button class="button bg-light" style="border:none;border-radius:10px;">View All</button>
                        </div>
                    </div>
                </div>
                </div>  
                   <div class="col-12 col-md-4">
                         <div class="col-xl-3 col-sm-6 py-2" style="width:90%">
                    <div class="card  text-white h-100" style="border-radius: 10px;">
                        <div class="card-body " style="background-color: #DD244B;border-radius:10px;width:150%">
                            <div class="rotate">
                                <i class="fa fa-check-square-o fa-3x" aria-hidden="true"></i>
                            </div>
                            <h6 class="text-uppercase">Processing Orders</h6>
                            <h1 class="display-4">{{$Processing}}</h1>
                            <button class="button bg-light" style="border:none;border-radius:10px;">View All</button>
                        </div>
                    </div>
                </div>
                </div>  
                   <div class="col-12 col-md-4">
                        <div class="col-xl-3 col-sm-6 py-2" style="width:90%">
                    <div class="card  text-white h-100" style="border-radius: 10px;">
                        <div class="card-body " style="background-color: #16A620;border-radius: 10px;width:150%">
                            <div class="rotate">
                                <i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>
                            </div>
                            <h6 class="text-uppercase">Completed Orders</h6>
                            <h1 class="display-4">{{$Completed}}</h1>
                            <button class="button bg-light" style="border:none;border-radius:10px;">View All</button>
                        </div>
                    </div>
                </div>
                </div>  
            </div>
            </div>
  </div>


    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- <script src="{{asset('main.js')}}"></script> -->
    <script>
    $(function() { 
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});
</script>

</body>
</html>
