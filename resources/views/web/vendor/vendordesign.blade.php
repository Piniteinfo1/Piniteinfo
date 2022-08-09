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
 <div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
     
      <div class="media-body">
      
        <img src="{{asset('logo/Logo.png')}}" width="145" height="45" alt=""/>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

  <ul class="nav flex-column bg-white mb-0">
    
	
	  
	
	
	 
	  
	  
	 
	   <li class="nav-item">
                    <a class="nav-link" href="sidebar.html" target="_blank" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-house-door-fill" style="color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp;Home </a>
                    </li>
	  
	  

	   <li class="nav-item">
                    <a class="nav-link" href="Orders.html" data-toggle="collapse" data-target="#submenu11" style="color:black"><i class="bi bi-file-earmark-plus" style="color:black"></i>   &nbsp;&nbsp;&nbsp;&nbsp; Orders ▾ </a>
                     <ul class="list-unstyled flex-column pl-3 collapse" id="submenu11" aria-expanded="false">
                       <li class="nav-item"><a class="nav-link" href= "Allorders.html" style="color:black">All Orders</a></li>
                     </ul>
                </li>
	  
	  
	  
	   <li class="nav-item">
                    <a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-arrow-bar-up" style="color:black"></i>  &nbsp;&nbsp;&nbsp;&nbsp;View Uploads </a>
                   
                </li>
	  
	   
	   <li class="nav-item">
                    <a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-credit-card" style="color:black"></i>   &nbsp;&nbsp;&nbsp;&nbsp;Transactions </a>
                   
                </li>
	  
	   <li class="nav-item">
                    <a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-upload" style="color:black"></i>   &nbsp;&nbsp;&nbsp;&nbsp;Upload status </a>
                   
                </li>
	   <li class="nav-item">
                    <a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-building" style="color:black"></i>   &nbsp;&nbsp;&nbsp;&nbsp;Business Information </a>
                   
                </li>
	  <li class="nav-item">
                    <a class="nav-link" href="#submenu115" data-toggle="collapse" data-target="#submenu115" style="color:black"><i class="bi bi-file-earmark-plus" style="color:black"></i>   &nbsp;&nbsp;&nbsp;&nbsp; products ▾ </a>
                     <ul class="list-unstyled flex-column pl-3 collapse" id="submenu115" aria-expanded="false">
                       <li class="nav-item"><a class="nav-link" href="{{route('vendor_addproduct')}}" style="color:black">Add Products</a></li>
                     </ul>
                </li>
	  <li class="nav-item">
                    <a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-search" style="color:black"></i>   &nbsp;&nbsp;&nbsp;&nbsp;View Products </a>
                   
                </li>
	   <li class="nav-item">
                    <a class="nav-link" href="#submenu113" data-toggle="collapse" data-target="#submenu113" style="color:black"><i class="bi bi-gear" style="color:black"></i>    &nbsp;&nbsp;&nbsp;&nbsp;Settings▾</a>
                      <ul class="list-unstyled flex-column pl-3 collapse" id="submenu113" aria-expanded="false" >
                       <li class="nav-item"><a class="nav-link" href="" style="color:black">Services</a></li>
						<li class="nav-item"><a class="nav-link" href="" style="color:black">Banner</a></li>
						<li class="nav-item"><a class="nav-link" href="" style="color:black">Shipping Methods</a></li>
						<li class="nav-item"><a class="nav-link" href="" style="color:black">Packagings</a></li>
						<li class="nav-item"><a class="nav-link" href="" style="color:black">Social Links</a></li>
                       
                    </ul>
                </li>
	  
  
  </ul>

 

  
</div>
</body>
</html>