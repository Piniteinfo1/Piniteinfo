<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Add Orders</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link href="htttp://fonts.googleapis.com/css2?family=Rubik&display=swap" />
        <script src="sidebar.js" type="text/javascript"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <style>
        .myDiv {
          border: 5px outset ;
          background-color: lightblue;    
          text-align: center;
        }
        </style>
    </head>

    <body>
        <body>
           @include('web.vendor.vendorsidemenu')

            <div class="page-content p-5" id="content">
                <!-- Toggle button -->
                <div class="d-flex flex-row justify-content-between">
                    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
                    <div>
                        <modal class="nav-item">
                            <a class="nav-link" href="#submenu114" data-toggle="collapse" data-target="#submenu114" style="color: black;">
                                <img src="img/wisteria-in-bloom-royalty-free-image-1653423554.jpg" width="40px" height="40px" style="border-radius: 50%;" alt="" />
                            </a>
                            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu114" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="" style="color: black; align-items: center;">Welcome!</a></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: black;"><i class="bi bi-person"></i>&nbsp;Edit Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: black;"><i class="bi bi-envelope-paper"></i>&nbsp;Inbox</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" style="color: black;"><i class="bi bi-box-arrow-left"></i>&nbsp;Logout</a>
                                </li>
                            </ul>
                        </modal>
                    </div>
                </div>
                <!-- Demo content -->
                <div>
                    <h2>Breadcrumb Pagination</h2>
                    <ul class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Orders</a></li>
                        <li>All Orders</li>
                    </ul>
                </div>

                <div id="statusdata" class="container" style="background-color: whitesmoke;">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            &nbsp;
                            <p>
                                <label for="spinner">Show</label>
                                <input type="number" pattern="[0-9]*" id="spinner" name="value" value="1" min="1" max="200" step="1" oninput="maxLengthCheck(this)" maxlength="3" />entries
                            </p>
                        </div>

                        <div class="col-12 col-md-5 topnav">
                            &nbsp;
                            <div class="input-group rounded">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-12 col-md-3"></div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-12 col-md-3">
                            <h6>Customer Email</h6>
                        </div>
                        <div class="col-12 col-md-3">
                            <h6>Order Number</h6>
                        </div>
                        <div class="col-12 col-md-2">
                            <h6>Status</h6>
                        </div>
                        <div class="col-12 col-md-2">
                            <h6>Price</h6>
                        </div>

                        <div class="col-12 col-md-2">
                            <h6>Options</h6>
                        </div>
                    </div>
                    <hr />
                    @foreach($ProductOrders as $Order)
                    <div  class="row" style="margin-top: 20px;">
                        <div class="col-12 col-md-3">
                            <h6>{{$Order->email}}</h6>
                        </div>
                        <div class="col-12 col-md-3">
                            <h6>{{$Order->transnumber}}</h6>
                        </div>
                        <div class="col-12 col-md-2">
                            <!-- <h6>{{$Order->status}}</h6> -->
                            <select id="status" onchange="changestatus('{{$Order->id}}')">
                                <option value="">{{$Order->status}}</option>
                                @foreach($trackings as $tracking)
                                @if($tracking->status != $Order->status)
                                <option value="{{$tracking->status}}">{{$tracking->status}}</option>
                                @endif
                                @endforeach   
                            </select>
                            
                        </div>
                        <div class="col-12 col-md-2">
                            <h6>{{$Order->price}}</h6>
                        </div>

                        <div class="col-12 col-md-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="bi bi-eye-fill"></i>&nbsp;Details</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="bi bi-envelope-fill"></i>&nbsp;Send</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('dailyupdate', $Order->id)}}"><i class="bi bi-truck">&nbsp;</i>Update Status</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i class="bi bi-currency-dollar">&nbsp;</i>Delivery Status</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-12 col-md-3">
                            <h6></h6>
                        </div>
                        <div class="col-12 col-md-3">
                            <h6></h6>
                        </div>
                        <div class="col-12 col-md-2">
                            <h6></h6>
                        </div>
                        <div class="col-12 col-md-2">
                            <h6></h6>
                        </div>

                        <div class="col-12 col-md-2"></div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-12 col-md-4">
                            <!-- <h6>Showing 0 to 0 of 0 entries</h6> -->
                        </div>
                        <div class="col-12 col-md-2">
                            <h6></h6>
                        </div>

                       <!--  <div class="col-12 col-md-6" style="border: none;">
                            <div class="wrapper">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script>
                var bannerImage = document.getElementById("bannerImg");
                var result = document.getElementById("res");
                var img = document.getElementById("tableBanner");

                //
                bannerImage.addEventListener("change", function () {
                    var file = this.files[0];
                    // declare a maxSize (3Mb)
                    var maxSize = 3000000;

                    if (file.type.indexOf("image") < 0) {
                        res.innerHTML = "invalid type";
                        return;
                    }
                    var fReader = new FileReader();
                    fReader.onload = function () {
                        img.onload = function () {
                            // if localStorage fails, it should throw an exception
                            try {
                                // pass the ratio of the file size/maxSize to your toB64 func in case we're already out of scope
                                localStorage.setItem("imgData", getBase64Image(img, file.size / maxSize, file.type));
                            } catch (e) {
                                var msg = e.message.toLowerCase();
                                // We exceeded the localStorage quota
                                if (msg.indexOf("storage") > -1 || msg.indexOf("quota") > -1) {
                                    // we're dealing with a jpeg image :  try to reduce the quality
                                    if (file.type.match(/jpe?g/)) {
                                        console.log("reducing jpeg quality");
                                        localStorage.setItem("imgData", getBase64Image(img, file.size / maxSize, file.type, 0.7));
                                    }
                                    // we're dealing with a png image :  try to reduce the size
                                    else {
                                        console.log("reducing png size");
                                        // maxSize is a total approximation I got from some tests with a random pixel generated img
                                        var maxPxSize = 750000,
                                            imgSize = img.width * img.height;
                                        localStorage.setItem("imgData", getBase64Image(img, imgSize / maxPxSize, file.type));
                                    }
                                }
                            }
                        };
                        img.src = fReader.result;
                    };

                    fReader.readAsDataURL(file);
                });

                function getBase64Image(img, sizeRatio, type, quality) {
                    // if we've got an svg, don't convert it, svg will certainly be less big than any pixel image
                    if (type.indexOf("svg+xml") > 0) return img.src;

                    // if we've got a jpeg
                    if (type.match(/jpe?g/)) {
                        // and the sizeRatio is okay, don't convert it
                        if (sizeRatio <= 1) return img.src;
                    }
                    // if we've got some other image type
                    else type = "image/png";

                    if (!quality) quality = 1;
                    var canvas = document.createElement("canvas");
                    // if our image file is too large, then reduce its size
                    canvas.width = sizeRatio > 1 ? img.width / sizeRatio : img.width;
                    canvas.height = sizeRatio > 1 ? img.height / sizeRatio : img.height;

                    var ctx = canvas.getContext("2d");
                    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                    // if we already tried to reduce its size but it's still failing, then reduce the jpeg quality
                    var dataURL = canvas.toDataURL(type, quality);

                    return dataURL;
                }

                function fetchimage() {
                    var dataImage = localStorage.getItem("imgData");
                    img.src = dataImage;
                }

                // Call fetch to get image from localStorage.
                fetchimage();
                
            </script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="main.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

            <script>
                function changestatus(val) {

                     var status = document.getElementById("status").value;
                     // alert(status)
                     let result = confirm('Are you sure you want to change status?');

                           let message = result ? '1' :
                               '0';
                           if(message == 1){
                            debugger
                              $.ajax({
                                    type: 'GET',
                                    data:{
                                       status: status,
                                       id:  val
                                    },
                                    url: '/orderchangestatus',
                                    contentType: 'application/json; charset=utf-8',
                                    success: function(data) {
                                        debugger
                                       alert('status updated Sucessfully')
                                       // window.location()
                                       // window.location.reload();
                                        $( "#statusdata" ).load(window.location.href + " #statusdata" );
                                    },
                                    error: function(data) {
                                       console.log(data);
                                    }
                                 });
                           }
                }
                $(function () {
                    $("#sidebarCollapse").on("click", function () {
                        $("#sidebar, #content").toggleClass("active");
                    });
                });
                
            </script>
        </body>
    </body>
</html>
