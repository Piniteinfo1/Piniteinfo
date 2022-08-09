<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='#' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body{
    background-color:#f9f9fa;
}

@media (min-width:992px) {
    .page-container {
        max-width: 1140px;
        margin: 0 auto
    }
    .page-sidenav {
        display: block!important
    }
}


.padding {
    padding: 2rem
}

.w-32 {
    width: 32px!important;
    height: 32px!important;
    font-size: .85em;
}
.tl-item .avatar {
    z-index: 2;
}

.circle {
    border-radius: 500px;
	
}

									
.gd-warning {
    color: #fff;
    border: none;
    background: #f4c414 linear-gradient(45deg,#f4c414,#f45414);
}

.timeline {
    position: relative;
    border-color: rgba(160, 175, 185, .15);
    padding: 0;
    margin: 0
}

.p-4 {
    padding: 1.5rem!important
}


.block,
.card {
    background: #fff;
    border-width: 0;
    border-radius: .25rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
    margin-bottom: 1.5rem
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem!important
}

.tl-item {
    border-radius: 3px;
    position: relative;
    display: -ms-flexbox;
    display: flex
}

.tl-item>* {
    padding: 10px
}

.tl-item .avatar {
    z-index: 2
}

.tl-item:last-child .tl-dot:after {
    display: none
}

.tl-item.active .tl-dot:before {
    border-color: #448bff;
    box-shadow: 0 0 0 4px rgba(68, 139, 255, .2)
}

.tl-item:last-child .tl-dot:after {
    display: none
}

.tl-item.active .tl-dot:before {
    border-color: #448bff;
    box-shadow: 0 0 0 4px rgba(68, 139, 255, .2)
}

.tl-dot {
    position: relative;
    border-color: rgba(160, 175, 185, .15)
}

.tl-dot:after,
.tl-dot:before {
    content: '';
    position: absolute;
    border-color: inherit;
    border-width: 4px;
    border-style: solid;
    border-radius: 50%;
    width: 10px;
    height: 10px;
    top: 15px;
    left: 50%;
    transform: translateX(-50%)
}

.tl-dot:after {
    width: 0;
    height: auto;
    top: 25px;
    bottom: -15px;
    border-right-width: 0;
    border-top-width: 0;
    border-bottom-width: 0;
    border-radius: 0
}

tl-item.active .tl-dot:before {
    border-color: #448bff;
    box-shadow: 0 0 0 4px rgba(68, 139, 255, .2)
}

.tl-dot {
    position: relative;
    border-color: rgba(160, 175, 185, .15)
}

.tl-dot:after,
.tl-dot:before {
    content: '';
    position: absolute;
    border-color: inherit;
    border-width: 4px;
    border-style: solid;
    border-radius: 50%;
    width: 10px;
    height: 10px;
    top: 15px;
    left: 50%;
    transform: translateX(-50%)
}

.tl-dot:after {
    width: 0;
    height: auto;
    top: 25px;
    bottom: -15px;
    border-right-width: 0;
    border-top-width: 0;
    border-bottom-width: 0;
    border-radius: 0
}

.tl-content p:last-child {
    margin-bottom: 0
}

.tl-date {
    font-size: .85em;
    margin-top: 2px;
    min-width: 100px;
    max-width: 100px
}
	
	button{
	border-radius: 4px;
		font-family: Roboto;
		font-size:12px;
		height:32px;
		width:100%;
		margin:2px;
		}
	img{
		width:62px;
		height:52px;
		}
			
		.modal{
          max-width: 100%;
			max-height:100%;
			padding:50px;
 
        }
									
									.modal-content{
										width:100%;
										height:320px;
										border-radius:5px;
										padding:5px;
									}
 
.avatar {
    position: relative;
    line-height: 1;
    border-radius: 500px;
    white-space: nowrap;
    font-weight: 700;
    border-radius: 100%;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    border-radius: 500px;
    box-shadow: 0 5px 10px 0 rgba(50,50,50,.15);
}</style>
                                </head>
                                <body className='snippet-body'>
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif                              
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row">
            <div class="col-lg-6">
                @foreach($Dailyupdates as $Dailyupdate)
                  <div class="timeline p-4 block mb-4">

                    <div class="tl-item">

                        <div class="tl-dot" ><a class="tl-author" href="#" data-abc="true"><span class=" avatar circle gd-info" style="height:90px; width: 90px"><img src="{{$Dailyupdate->image_path}}" alt="."></span></a></div>
                        <div class="tl-content">
                            <div class="">{{$Dailyupdate->description }}</div>
                            <div class="tl-date text-muted mt-1">{{$Dailyupdate->created_at}}</div>
                        </div>
                    </div>
					   </div>
                    @endforeach
                	<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  update Status
</button>
    </div>
</div>
       

<!-- The Modal -->

<form method="POST" action="{{route('productstatusupdate', $id)}}" enctype="multipart/form-data">
    @csrf
<div class="modal" id="myModal">
  <div class="modal-dialog">
    
    <div class="modal-content">

      <!-- Modal Header -->
      
      <!-- Modal body -->
		
      <div class="modal-body">
		  <div class="tl-content">
					 <div class="form-group">
      	  <textarea class="form-control" rows="6" cols="30" name="text" placeholder="Enter The Status"></textarea>
				</div>
				 <div class="custom-file">
					<input type="file" name="image" class="custom-file-input" id="customInput" required>
					<label class="custom-file-label" for="customInput">Choose file...</label>
				</div>
           </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <input  type="submit" value="submit" name="submit" class="btn btn-danger" >
      </div>
    </div>
  </div>
</div>
</form>
									
									
									
									<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>