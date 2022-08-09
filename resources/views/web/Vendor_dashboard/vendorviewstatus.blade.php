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

. {
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
    border-width: 2px;
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
    border-width: 2px;
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
}
img{
        width:62px;
        height:52px;
        }

</style>
    </head>

    <body>
        <div class="screen-overlay"></div>
       @include('web.Vendor_dashboard.vendorsidebar')
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
                <div class="row">
            <div class="col-lg-10">
                <p>View Status</p>
                <div class="timeline p-4 block mb-4">
                    <div class="tl-item">
                        <div class="tl-dot"><a class="tl-author" href="#" data-abc="true"><span style="height: 90px; width:90px" class="avatar circle gd-info"><img src="https://asset.targetfurniture.co.nz/thumb/VLD50LCM13/1_04502f6a58eb.jpg" alt="."></span></a></div>
                        <div class="tl-content">
                            <div class="">Order placed <a href="#" data-abc="true">@google</a> Store</div>
                            <div class="tl-date text-muted mt-1">22 june,2018</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot"><a class="tl-author" href="#" data-abc="true"><span style="height: 90px; width:90px" class=" avatar circle gd-info"><img src="https://asset.targetfurniture.co.nz/thumb/VLD50LCM13/1_04502f6a58eb.jpg" alt="."></span></a></div>
                        <div class="tl-content">
                            <div class="">Order placed <a href="#" data-abc="true">@google</a> Store</div>
                            <div class="tl-date text-muted mt-1">15 days ago</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot"><a class="tl-author" href="#" data-abc="true"><span style="height: 90px; width:90px" class=" avatar circle gd-info"><img src="https://asset.targetfurniture.co.nz/thumb/VLD50LCM13/1_04502f6a58eb.jpg" alt="."></span></a></div>
                        <div class="tl-content">
                            <div class="">Order placed <a href="#" data-abc="true">@google</a> Store</div>
                            <div class="tl-date text-muted mt-1">12 days ago</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot"><a class="tl-author" href="#" data-abc="true"><span style="height: 90px; width:90px" class=" avatar circle gd-info"><img src="https://asset.targetfurniture.co.nz/thumb/VLD50LCM13/1_04502f6a58eb.jpg" alt="."></span></a></div>
                        <div class="tl-content">
                            <div class="">Order placed <a href="#" data-abc="true">@google</a> Store</div>
                            <div class="tl-date text-muted mt-1">5 hours ago</div>
                        </div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-dot"><a class="tl-author" href="#" data-abc="true"><span style="height: 90px; width:90px" class=" avatar circle gd-info"><img src="https://asset.targetfurniture.co.nz/thumb/VLD50LCM13/1_04502f6a58eb.jpg" alt="."></span></a></div>
                        <div class="tl-content">
                            <div class="">Thank You For Your Support</div>
                            <div class="tl-date text-muted mt-1">6 hours ago</div>
                        </div>
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
