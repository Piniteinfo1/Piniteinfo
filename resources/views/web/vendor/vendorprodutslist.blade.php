<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>View Product</title>
      <link href="viewproduct.html.css" rel="stylesheet" type="text/css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link href="htttp://fonts.googleapis.com/css2?family=Rubik&display=swap">
      <script src="sidebar.js" type="text/javascript"></script>
   </head>
   <body>
      <div class="vertical-nav bg-white" id="sidebar">
         <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center">
               <div class="media-body">
                  <h4 class="m-0">Menu</h4>
               </div>
            </div>
         </div>
         <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>
         <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
               <a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-house-door-fill" style="color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp;Home </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#submenu111" data-toggle="collapse" data-target="#submenu11" style="color:black"><i class="bi bi-cash-coin" style="color:black"></i>&nbsp;&nbsp;&nbsp;&nbsp;Orders▾ </a>
               <ul class="list-unstyled flex-column pl-3 collapse" id="submenu11" aria-expanded="false">
                  <li class="nav-item"><a class="nav-link" href="" style="color:black">All Orders</a></li>
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
                  <li class="nav-item"><a class="nav-link" href="" style="color:black">Add Products</a></li>
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
      <div class="page-content p-5" id="content">
         <!-- Toggle button -->
         <div  class="d-flex flex-row justify-content-between">
            <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
            <div>
               <modal class="nav-item">
                  <a class="nav-link" href="#submenu114" data-toggle="collapse" data-target="#submenu114" style="color:black;"><img src="img/wisteria-in-bloom-royalty-free-image-1653423554.jpg" width="40px" height="40px" style="border-radius:50%;" alt=""/></a>
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
         @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
         <div>
            <div class="container" align="center">
               <div class="row">
                  <h2>Breadcrumb Pagination</h2>
                  <ul class="breadcrumb">
                     <li><a href="#">Dashboard</a></li>
                     <li> View Product </li>
                  </ul>
                  <div class= "col-12">
                     <div class= "card-container">
                        <div class="container">
                           <div class="row">
                              <div class="container"  style="background-color: whitesmoke;">
                                 <div class="row">
                                    <div class="col-12 col-md-4">
                                       &nbsp;
                                       <p>
                                          <label for="spinner">Show</label>
                                          <input type="number" pattern="[0-9]*" id="spinner" name="value" value="1" min="1" max="200" step="1" oninput="maxLengthCheck(this)" maxlength="3">entries
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
                                    <div class="col-12 col-md-3">
                                    </div>
                                 </div>
                                 <div class="row" style="margin-top:20px">
                                    <div class="col-12 col-md-1">
                                       <h6>ID</h6>
                                    </div>
                                    <div class="col-12 col-md-3">
                                       <h6>Product Name</h6>
                                    </div>
                                    <div class="col-12 col-md-2">
                                       <h6>Description</h6>
                                    </div>
                                    <div class="col-12 col-md-2">
                                       <h6>View</h6>
                                    </div>
                                    <div class="col-12 col-md-2">
                                       <h6>Status</h6>
                                    </div>
                                    <div class="col-12 col-md-2">
                                       <h6>Actions</h6>
                                    </div>
                                 </div>
                                 @foreach($Products as $Product)
                                 
                                 <hr>
                                 <div class="row" id="productdata" style="margin-top:20px">
                                    
                                    <div class="col-12 col-md-1">
                                       <?php
                                          $i = 1;
                                       ?>
                                       @foreach($Product->gallery_images as $Gallery)
                                       @if($i === 1)
                                       <img src="{{$Gallery->image_path}}" width="100" height="100" alt>
                                       @endif
                                       <?php
                                          $i++;
                                       ?>
                                       @endforeach
                                       
                                    </div>
                                    <div class="col-12 col-md-3">
                                       <h6>{{$Product->title}}</h6>
                                    </div>
                                    <div class="col-12 col-md-2">
                                       <p>{{$Product->description}}</p>
                                    </div>
                                    <div class="col-12 col-md-2">
                                       <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#basicExampleModal">
                                       View
                                       </button>
                                       <!-- Modal -->
                                       <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLabel">View Product</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="container">
                                                      <div class="row">
                                                         <div class="col-12 col-md-6">
                                                            <img src="img/4.jpg" width="200" height="200" alt=""/>
                                                            &nbsp;
                                                            &nbsp;
                                                            &nbsp;
                                                            &nbsp;
                                                         </div>
                                                         <div class="col-12 col-md-3" >
                                                            <h6> ProductName:</h6>
                                                            <h6 style="margin-top:20px;">Description</h6>
                                                            <h6 style="margin-top:80px;">ProductSize:</h6>
                                                         </div>
                                                         <div class="col-12 col-md-3">
                                                            <p>A01</p>
                                                            <p style="font-size:10px;margin-top:20px;text-align: left">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>3000x2400mm</p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="col-10 col-md-2">
                                       <select name="cars" onchange="deactivateproduct('{{$Product->status}}, {{$Product->id}}')" id="cars" width="10%;">
                                          @if($Product->status == 1)
                                          <option value="1">Active</option>
                                          <option value="0">Deactive</option>
                                          @endif
                                          @if($Product->status != 1)
                                          <option value="0">Deactivated</option>
                                          <option value="1">Activate</option>
                                          @endif
                                       </select>
                                    </div>
                                 
                                 
                                    <div class="col-12 col-md-2" style="display:flex;">
                                       <div style="width:20%;">
                                          <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa-solid fa-pen-to-square"></i>
                                          </button>
                                       </div>
                                       <div style="width:20%;">
                                          <button type="button" class="btn btn-lg" data-toggle="modal" 
                                           onclick="DeleteProduct('{{$Product->id}}')" id="ProductDelete" value=""> <i class="fa-solid fa-trash-can"></i>
                                          </button>
                                       </div>
                                    </div>
                                    
                                    </div>
                                    
                                       @endforeach
                                          <!-- Modal HTML -->
                                          <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                   <div class="modal-body">
                                                      <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                                                      <div class="row">
                                                         <div class="col-md-6">
                                                            <div class="text-center mt-2">
                                                               <img src="https://i.imgur.com/3dG6dJo.jpg" width="200">
                                                            </div>
                                                         </div>
                                                         <div class="col-md-6">
                                                            <div class="text-white mt-5">
                                                               <h1 class="mb-0">Premium</h1>
                                                               <span class="intro-1">Take your writing to next level</span>
                                                               <div class="mt-4">
                                                                  <span class="intro-2">Gain access to analytic tools, desktop apps, templates, read-through, features, and autp-translate all for the price of a pro subscription</span>
                                                               </div>
                                                               <div class="mt-4 mb-5">
                                                                  <button class="btn btn-primary">25% off premium <i class="fa fa-long-arrow-right"></i></button>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       
                                          <!-- Modal HTML -->
                                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <div class="container d-flex pl-0">
                                                         <img src="https://imgur.com/Kh1gwTq.png">
                                                         <h5 class="modal-title ml-2" id="exampleModalLabel">Delete the link?</h5>
                                                      </div>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                      </button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <p class="text-muted">If you delete the link will be gone forever. Are you sure you want to proceed?</p>
                                                   </div>
                                                   <div class="modal-footer">
                                                      <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                                      <button type="button" class="btn btn-danger">Delete</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              
                                 <div id="app"></div>
                                 <div class="row" style="margin-top:20px">
                                    <!-- <div class="col-12 col-md-4">
                                       <h6>Showing 0 to 0 of 0 entries</h6>
                                    </div> -->
                                    <div class="col-12 col-md-2">
                                       <h6></h6>
                                    </div>
                                    <div class="col-12 col-md-6"  style="border:none;">
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
                  <!--  <script src="main.js"></script> -->
                  <script>
                     $(function() { 
                      $('#sidebarCollapse').on('click', function() {
                        $('#sidebar, #content').toggleClass('active');
                      });
                     });
                        
                        
                     $(function(){
                     
                        $('.spinner .btn:first-of-type').on('click', function() {
                          var btn = $(this);
                          var input = btn.closest('.spinner').find('input');
                          if (input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max'))) {    
                            input.val(parseInt(input.val(), 10) + 1);
                          } else {
                            btn.next("disabled", true);
                          }
                        });
                        $('.spinner .btn:last-of-type').on('click', function() {
                          var btn = $(this);
                          var input = btn.closest('.spinner').find('input');
                          if (input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min'))) {    
                            input.val(parseInt(input.val(), 10) - 1);
                          } else {
                            btn.prev("disabled", true);
                          }
                        });
                     
                     });    
                     
                        
                        
                     (function($) {
                     
                        'use strict';
                     
                     /**
                      *
                      * @param {Object} options
                      * @param {string} options.counterMode - Values: time, numeric. Default numeric
                      * @param {Number} options.steps - The steps to increment the input value. If counter mode is time, the steps will increment as minutes. Default 30
                      * @param {Boolean} options.readonly
                      * @param {Number} options.speedOnMouseDown - Speed counter on mousedown. Set value in milliseconds
                      * @returns {*}
                      */
                        $.fn.incremental = function(options) {
                     
                            var settings = $.extend({
                                counterMode: 'time',     // Values: time, numeric. Default numeric
                                steps: 30,                // The steps to increment the input value. If counter mode is time, the steps will increment as minutes. Default 30
                                readonly: false,
                                speedOnMouseDown: 10      // Speed counter on mousedown. Set value in milliseconds
                            }, options);
                     
                            var btn_reduce = '<span class="input-group-btn"><button type="button" class="btn btn-white" data-operator="-">-</button></span>';
                     
                            var btn_increment  = '<span class="input-group-btn"><button type="button" class="btn btn-white" data-operator="+">+</button></span>';
                     
                            var operators = {
                                '+' : function(a, b) { return a + b; },
                                '-' : function(a, b) { return a - b; }
                            };
                     
                            /**
                             * Render the incremental input component
                             *
                             * @param element
                             */
                            function renderInput(element) {
                                var input_html = btn_reduce;
                                input_html += element.innerHTML.trim();
                                input_html += btn_increment;
                     
                                element.innerHTML = input_html;
                     
                                $(element).addClass('input-group');
                                $(element).find('input').prop({
                                    readonly: settings.readonly
                                });
                            }
                     
                            /**
                             * Return a valid value. When counterMode is numeric, the value would be
                             * returned as an integer and not as string. When nothing given, the default
                             * value would be 0
                             *
                             * @param $input
                             * @returns {number}
                             */
                            function getValue($input) {
                                var input_value = 0;
                                if ($input.val().length > 0) {
                                    input_value = settings.counterMode == 'numeric' ? parseInt($input.val()) : $input.val();
                                }
                                return input_value;
                            }
                     
                            /**
                             *
                             * @param count
                             * @param op
                             * @returns {*}
                             */
                            function calculateCount(count, op) {
                                switch (settings.counterMode) {
                                    case 'time':
                                    var maxCount = 24 * 60; // max count 24 hours
                                        var minutes = operators[op]($.fn.incremental.hoursToMinutes(count), settings.steps);
                                        if ((minutes < 0) || (minutes >= maxCount)) {
                                            return count;
                                        }
                                        count = $.fn.incremental.minutesToHours(minutes);
                                        break;
                     
                                    case 'numeric':
                                    default:
                                        var new_count = operators[op](count, settings.steps);
                                        if (new_count < 0) {
                                            return count;
                                        }
                                        count = new_count;
                                        break;
                                }
                                return count;
                            }
                     
                            /**
                             * Initialize incremental input and attach click event to
                             * the buttons and blur event to the input field
                             *
                             */
                            return this.each(function(index, element) {
                                renderInput(element);
                     
                                var $input = $(element).find('input'), count, counterInterval;
                     
                                // Calculate the count on click
                                $(element).find('button').on('click', function() {
                                    var op = this.getAttribute('data-operator');
                                    count = calculateCount(getValue($input), op);
                                    $input.val(count);
                                });
                     
                                //
                                $input.on('blur', function() {
                                    count = (settings.counterMode == 'numeric') ? parseInt(this.value) : this.value.trim();
                                });
                     
                                $(element).find('button').on('mousedown', function(event) {
                                    var op = this.getAttribute('data-operator');
                                    counterInterval = setInterval(function() {
                                        var inputValue = getValue($input);
                                        count = calculateCount(inputValue, op);
                                        $input.val(count);
                                    }, settings.speedOnMouseDown);
                                });
                     
                                $(document).on('mouseup', function(event) {
                                    clearInterval(counterInterval);
                                });
                     
                                // Calculate the value when the mousewheel is used
                                $input.on('wheel', function(e) {
                                    var event = e.originalEvent;
                                    var operator = event.wheelDelta > 0 ? '+' : '-';
                                    var value = getValue($input);
                                    count = calculateCount(value, operator);
                                    $input.val(count);
                                });
                     
                                // #todo: Create regex to reject alpha characters
                                //
                                // Skip non-numeric characters in the field
                                // $input.on('keydown keypress', function(event) {
                                //     // if ((event.which >= 48 && event.which <= 57) || event.which == 12 || event.which == 8) {
                                //     //   return true;
                                //     // }
                                //     //
                                //     // return false;
                                //
                                //     var regex = /([a-zA-Z]|[^:0-9])/g;
                                //     var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                                //     if (regex.test(key)) {
                                //         $input.val(count);
                                //         return false;
                                //     }
                                // });
                            });
                        };
                     
                        /**
                         * Convert minutes to hours. Returns at formatted time string
                         * Example: 150 minutes to 2:30
                         *
                         * @param {number} value
                         * @returns {string}
                         */
                        $.fn.incremental.minutesToHours = function(value) {
                            var hours = Math.floor(value / 60);
                            var minutes = value % 60;
                            if (minutes < 10) {
                                minutes = '0' + minutes
                            }
                            return hours + ':' + minutes;
                        };
                     
                        /**
                         * Convert hours to minute. Example: 2:00 to 60
                         *
                         * @param {string} value
                         * @returns {number}
                         */
                        $.fn.incremental.hoursToMinutes = function (value) {
                            var time = value.split(':').map(Number);
                            var minutes = 0;
                     
                            if (time.length == 2) {
                                minutes = time[0] * 60 + time[1];
                            }
                     
                            if (time.length == 1) {
                                minutes = time[0] * 60;
                            }
                     
                            return minutes;
                        };
                     
                     })(jQuery);
                     
                     
                     $(document).ready(function() {
                     $('#time-input').incremental({
                        steps: 15,
                        readonly: true,
                        speedOnMouseDown: 100
                     });
                     
                     $('#counter-input').incremental({
                        readonly: true,
                        speedOnMouseDown: 100,
                        counterMode: 'numeric',
                        steps: 1
                     });
                     });
                     
                        
                     function incrementValue(e) {
                            e.preventDefault();
                            var fieldName = $(e.target).data('field');
                            var parent = $(e.target).closest('div');
                            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
                     
                            if (!isNaN(currentVal)) {
                                parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
                            } else {
                                parent.find('input[name=' + fieldName + ']').val(0);
                            }
                        }
                     
                        function decrementValue(e) {
                            e.preventDefault();
                            var fieldName = $(e.target).data('field');
                            var parent = $(e.target).closest('div');
                            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
                     
                            if (!isNaN(currentVal) && currentVal > 0) {
                                parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
                            } else {
                                parent.find('input[name=' + fieldName + ']').val(0);
                            }
                        }
                     
                        $('.input-group').on('click', '.button-plus', function(e) {
                            incrementValue(e);
                        });
                     
                        $('.input-group').on('click', '.button-minus', function(e) {
                            decrementValue(e);
                        });
                        
                        
                     function handleFileSelect(evt) {
                      var files = evt.target.files; // FileList object
                     
                      // Loop through the FileList and render image files as thumbnails.
                      for (var i = 0, f; f = files[i]; i++) {
                     
                        // Only process image files.
                        if (!f.type.match('image.*')) {
                          continue;
                        }
                     
                        var reader = new FileReader();
                     
                        // Closure to capture the file information.
                        reader.onload = (function(theFile) {
                          return function(e) {
                            // Render thumbnail.
                            var span = document.createElement('span');
                            span.innerHTML = ['<img class="thumb" src="', e.target.result,
                              '" title="', escape(theFile.name), '"/>'
                            ].join('');
                            document.getElementById('list').insertBefore(span, null);
                          };
                        })(f);
                     
                        // Read in the image file as a data URL.
                        reader.readAsDataURL(f);
                      }
                     }
                     
                     document.getElementById('files').addEventListener('change', handleFileSelect, false);
                        
                        
                        
                        
                        
                     var $select1 = $( '#select1' ),
                        $select2 = $( '#select2' ),
                        $options = $select2.find( 'option' );
                        
                     $select1.on( 'change', function() {
                     $select2.html( $options.filter( '[value="' + this.value + '"]' ) );
                     } ).trigger( 'change' );
                        
                        </script>
                        <!-- <script type="text/javascript"> -->
                            <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
                        <script>
                         function DeleteProduct(val) {
                           let result = confirm('Are you sure you want to delete?');

                           let message = result ? '1' :
                               '0';
                           if(message == 1){
                              $.ajax({
                                    type: 'GET',
                                    url: '/Productdelete/' + val,
                                    contentType: 'application/json; charset=utf-8',
                                    success: function(data) {
                                       alert('Product deleted Sucessfully')
                                       // window.location()
                                       window.location.reload();
                                        // $( "#productdata" ).load(window.location.href + " #productdata" );
                                    },
                                    error: function(data) {
                                       console.log(data);
                                    }
                                 });
                           }
                         }
                     
                     function deactivateproduct(val) {
                        var data = val.split(",");

                        if(data[0] == 1)
                        {
                           var value = 0;
                        }
                        else if (data[0] == 0) {
                           var value = 1;
                        }
                        debugger;
                        $.ajax({
                           type: 'GET',
                           data:{
                               status: value,
                               id:  data
                            },
                           url: '/Productinactive/',
                           
                           contentType: 'application/json; charset=utf-8',
                           success: function(data) {
                              alert('Product Status Changed Sucessfully')
                              window.location.reload();
                               // $( "#productdata" ).load(window.location.href + " #productdata" );
                           },
                           error: function(data) {
                              console.log(data);
                           }
                        });
                     }
                             
                  </script>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>