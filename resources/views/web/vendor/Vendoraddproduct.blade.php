<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Untitled Document</title>
		<link href="{{asset('style.css')}}" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="{{asset('style.css')}}" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
		<link href="htttp://fonts.googleapis.com/css2?family=Rubik&display=swap" />
		<script src="{{asset('sidebar.js')}}" type="text/javascript"></script>
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
					<a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-arrow-bar-up" style="color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp;View Uploads </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-credit-card" style="color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp;Transactions </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-upload" style="color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp;Upload status </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-building" style="color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp;Business Information </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#submenu115" data-toggle="collapse" data-target="#submenu115" style="color:black"><i class="bi bi-file-earmark-plus" style="color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp; products ▾ </a>
					<ul class="list-unstyled flex-column pl-3 collapse" id="submenu115" aria-expanded="false">
						<li class="nav-item"><a class="nav-link" href="" style="color:black">Add Products</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#submenu112" data-toggle="collapse" data-target="#submenu112" style="color:black"><i class="bi bi-search" style="color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp;View Products </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#submenu113" data-toggle="collapse" data-target="#submenu113" style="color:black"><i class="bi bi-gear" style="color:black"></i> &nbsp;&nbsp;&nbsp;&nbsp;Settings▾</a>
					<ul class="list-unstyled flex-column pl-3 collapse" id="submenu113" aria-expanded="false">
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
			<div class="d-flex flex-row justify-content-between">
				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
				<div>
					<modal class="nav-item">
						<!-- <a class="nav-link" href="#submenu114" data-toggle="collapse" data-target="#submenu114" style="color:black;"><img src="" width="40px" height="40px" style="border-radius:50%;" alt=""/></a> -->
						<ul class="list-unstyled flex-column pl-3 collapse" id="submenu114" aria-expanded="false">
							<li class="nav-item"><a class="nav-link" href="" style="color:black;align-items: center">Welcome!</a></li>
							<li class="nav-item">
								<a class="nav-link" href="" style="color:black"><i class="bi bi-person"></i>&nbsp;Edit Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="" style="color:black"><i class="bi bi-envelope-paper"></i>&nbsp;Inbox</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="" style="color:black"><i class="bi bi-box-arrow-left"></i>&nbsp;Logout</a>
							</li>
						</ul>
					</modal>
				</div>
			</div>
			<!-- Demo content -->
			<div>
				<div class="container" align="center">
					<div class="row">
						<h2>Breadcrumb Pagination</h2>
						<ul class="breadcrumb">
							<li><a href="#">Dashboard</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">Add products</a></li>
							<li>Residental Product</li>
						</ul>

						<div class="col-12">
							<div class="card-container">
								<div class="container">
									<div class="row">
										<div class="col-12 col-md-5 product" style="margin-top: 20px;">
											<form method="POST" action="{{route('VendorProductAdd')}}" enctype="multipart/form-data">
												@csrf
											<h5>Product Name*</h5>
										</div>
										<div class="col-12 col-md-5" style="margin-top:20px;">
											<input type="text" name="title" class="input" placeholder="Product Name" name="ship" />
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 25px;">
											<h5>Category Name*</h5>
										</div>
										<div class="col-12 col-md-5">
											<label for="fname"></label>
											<select name="category">
												<option value="">Select One</option>
												@foreach($Category as $Category)
												<option value="{{$Category->id}}">{{$Category->category}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 25px;">
											<h5>Sub Category*</h5>
										</div>
										<div class="col-12 col-md-5">
											<label for="fname"></label>

											<select id="country" name="subcategory">
												<option value="">Please select one</option>
												@foreach($Subcategory as $subcategorys)
												<option value="{{$subcategorys->id}}">{{$subcategorys->subcategory}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 25px;">
											<h5>Select Brand*</h5>
										</div>
										<div class="col-12 col-md-5">
											<label for="fname"></label>

											<select id="country2" name="brand">
												<option value="">Select One</option>
												@foreach($Spaces as $space)
												<option value="{{$space->id}}">{{$space->spaces}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 25px;">
											<h5>Select Design *</h5>
										</div>
										<div class="col-12 col-md-5">
											<label for="fname"></label>

											<select id="country3" name="Design">
												<option value="0">Select One</option>
												@foreach($Designs as $Design)
												<option value="{{$space->id}}">{{$Design->spaces}}</option>
												@endforeach
											</select>
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 25px;">
											<h5>Current Featured Image*</h5>
										</div>
										<div class="col-12 col-md-5" style="margin-top: 25px;">
											<input type="file" name="image[]" id="files"  multiple>
											<br />
											.
											<output id="list"> </output>
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 25px;">
											<!-- <h5>Gallery Images *</h5> -->
										</div>
										<div class="col-12 col-md-5" style="margin-top: 25px;">
											<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
												+Set Gallery
											</button> -->

											<!-- The Modal -->
											<div class="modal" id="myModal">
												<div class="modal-dialog">
													<div class="modal-content">
														<!-- Modal Header -->
														<div class="modal-header">
															<h4 class="modal-title">Image Gallery</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>

														<!-- Modal body -->
														<div class="modal-body">
															<input type="file" id="files1" name="images[]" multiple />
															<br />
															.
															<output id="list1"> </output>
														</div>

														<!-- Modal footer -->
														<div class="modal-footer">
															<button type="button" class="btn btn-danger" data-dismiss="modal">Done</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<!--<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
			&nbsp;
			
			</div>
        <div class="col-12 col-md-6">
			<div style="text-align:left;">
			<label for="myCheck">Checkbox:</label>
			<input type="checkbox" id="myCheck" onclick="myFunction()"></div>
			
			</div>
					<div >
			<div id="text" style="display: none;">
			     <div class="container-fluid">
				<div class="row">
				
				
				<div class="col-12 col-md-6">
					<h4 class="heading">Product Estimated Shipping <br>Time* </h4>
				</div>
				<div class="col-12 col-md-6">
				<input type="text" class="input" placeholder="Product Name" name="ship">
				</div>
				</div>
			</div>
					 </div>
						</div>
				
				</div>
				
			</div> -->

										<div class="col-12 col-md-5 product" style="margin-top: 20px;">
											<h5>Estimated Delivery Time*</h5>
										</div>
										<div class="col-12 col-md-1" style="margin-top:20px;">
											<input type="text" class="input" placeholder="00" name="time[]" />
										</div>
										<div class="col-12 col-md-2" style="margin-top: 15px;display: flex;margin-right:28px;">
											<div class="col-xs-3 formo">
												<select class="form-control" name="time[]" id="select1">
													<option value="1">Days</option>
													<option value="2">Weeks</option>
													<option value="3">Months</option>
													<option value="4">Years</option>
												</select>
											</div>
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 20px;">
											<h5>Product Price*</h5>
										</div>
										<div class="col-12 col-md-5" style="margin-top:20px;">
											<input type="text" class="input" placeholder="Product price" name="price" />
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 20px;">
											<h5>Product Size*</h5>
										</div>
										<div class="col-12 col-md-1" style="margin-top: 20px;display:flex;height:5%;width:2px;"><input type="text" placeholder="L" name="size[]" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x</div>

										<div class="col-12 col-md-1" style="margin-top: 20px;display:flex;height:5%;width:2px;"><input type="text" placeholder="B" name="size[]" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x</div>

										<div class="col-12 col-md-1" style="margin-top: 20px;display:flex;height:5%;width:2px;"><input type="text" placeholder="H" name="size[]" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

										<br />

										<div class="col-12 col-md-2">
											&nbsp;
										</div>
										<br />

										<div class="col-12 col-md-5 product" style="margin-top: 20px;">
											<h5>Product Description*</h5>
										</div>
										<div class="col-12 col-md-5" style="margin-top:10px;">
											<label for="subject"></label>
											<textarea id="subject" name="description" placeholder="Write something.." style="height:150%;width:100%;outline:none;"></textarea>
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 80px;">
											<h5>Product Buy/Return Policy*</h5>
											(Optional)
										</div>
										<div class="col-12 col-md-5" style="margin-top:60px;">
											<label for="subject"></label>
											<textarea id="subject1" name="policy" placeholder="Write something.." style="height:150%;width:100%;outline:none;"></textarea>
										</div>
										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 60px;">
											<h5>&nbsp;</h5>
										</div>
										<div class="col-12 col-md-5" style="margin-top:80px;">
											<h5>Feature Tags</h5>
											<!-- <div class="container">
												<div class="row">
													<div class="col-12 col-md-6">
														<input type="text" class="input-field" placeholder="Enter Your Keyword" name="ship" />
													</div>
													<div class="col-12 col-md-4">
														<input type="text" class="input-field" placeholder="#000000" name="ship" />
													</div>
													<div class="col-12 col-md-2" style="margin-top: -25px">
														
															<label class="form-label"></label>
															<input type="color" name="" class="form-control form-control-color" />
														
													</div>
												</div>
											</div> -->
										</div>

										<div class="col-12 col-md-2">
											&nbsp;
										</div>

										<div class="col-12 col-md-5 product" style="margin-top: 20px;">
											<h5>Tags</h5>
										</div>
										<div class="col-12 col-md-5">
											<label for="subject"></label>
											<textarea id="subject2" name="tag" placeholder="Write something.." style="height:50%;width:100%;outline:none;"></textarea>
										</div>
										<!-- <input type="file" name="data"> -->
										<div class="col-12 col-md-2">
											&nbsp;
										</div>
										<input type="submit" name="submit" class="form-control form-control-color" />
									</form>
									</div>
								</div>
							</div>
						</div>

						<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
						<!-- <script src="main.js"></script> -->
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
							            //     // 	return true;
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
							function multipleFunc() {
								document.getElementById("multiselectdd").multiple = true;
								}
						</script>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
