@include('Admin_Dashboard.Adminsidedashboard')

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users view start -->
                <section class="users-view">
                    <!-- users view media object start -->
                    <div class="row">
                        <div class="col-12 col-sm-7">
                            <div class="media mb-2">
                                <a class="mr-1" href="#">
                                    <img src="{{asset('app-assets/images/portrait/small/avatar-s-26.jpg')}}" alt="users view avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                                </a>
                                <div class="media-body pt-25">
                                    <h4 class="media-heading"><span class="users-view-name">{{$Houseowner->name}}</span><span class="text-muted font-medium-1"> </span><span class="users-view-username text-muted font-medium-1 "></span></h4>
                                    <span>ID:</span>
                                    <span class="users-view-id">{{$Houseowner->id}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
                            <a href="#" class="btn btn-sm mr-25 border"><i class="bx bx-envelope font-small-3"></i></a>
                            <a href="#" class="btn btn-sm mr-25 border">Profile</a>
                            <a href="html/ltr/vertical-menu-template/page-users-edit.html" class="btn btn-sm btn-primary">Edit</a>
                        </div>
                    </div>
                    <!-- users view media object ends -->
                    <!-- users view card data start -->
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>Registered:</td>
                                                    <td>{{$Houseowner->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Latest Activity:</td>
                                                    <td class="users-view-latest-activity">30/04/2021</td>
                                                </tr>
                                                @if($Houseowner->role != 3)
                                                <tr>
                                                    <td>Verified:</td>
                                                    <td class="users-view-verified">Yes</td>
                                                </tr>
                                                @endif
                                                <tr>
                                                    <td>Role:</td>
                                                    <td class="users-view-role">{{$role_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status:</td>
                                                    @if($Houseowner->isactive == 1)
                                                    <td><span class="badge badge-light-success users-view-status">Active</span></td>
                                                    @else
                                                    <td><span class="badge badge-light-success users-view-status">In Active</span></td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- users view card data ends -->
                    <!-- users view card details start -->
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row bg-primary bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">
                                    <div class="col-12 col-sm-4 p-2">
                                        <h6 class="text-primary mb-0">Posts: <span class="font-large-1 align-middle">125</span></h6>
                                    </div>
                                    <div class="col-12 col-sm-4 p-2">
                                        <h6 class="text-primary mb-0">Followers: <span class="font-large-1 align-middle">534</span></h6>
                                    </div>
                                    <div class="col-12 col-sm-4 p-2">
                                        <h6 class="text-primary mb-0">Following: <span class="font-large-1 align-middle">256</span></h6>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <!-- <tr>
                                                <td>Username:</td>
                                                <td class="users-view-username"></td>
                                            </tr> -->
                                            <tr>
                                                <td>Name:</td>
                                                <td class="users-view-name">{{$Houseowner->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="users-view-email">{{$Houseowner->email}}</td>
                                            </tr>
                                            @if($Houseowner->role != 3)
                                            <tr>
                                                <td>Comapny:</td>
                                                <td>XYZ Corp. Ltd.</td>
                                            </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                    <h5 class="mb-1"><i class="bx bx-link"></i> Social Links</h5>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Twitter:</td>
                                                <td><a href="#">https://www.twitter.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>Facebook:</td>
                                                <td><a href="#">https://www.facebook.com/</a></td>
                                            </tr>
                                            <tr>
                                                <td>Instagram:</td>
                                                <td><a href="#">https://www.instagram.com/</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h5 class="mb-1"><i class="bx bx-info-circle"></i> Personal Info</h5>
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>Birthday:</td>
                                                <td>03/04/1990</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>{{$Houseowner->address}}</td>
                                            </tr>
                                            <tr>
                                                <td>Languages:</td>
                                                <td>English</td>
                                            </tr>
                                            <tr>
                                                <td>Contact:</td>
                                                <td>{{$Houseowner->mobile}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- users view card details ends -->

                </section>
                <!-- users view ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo" data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="{{asset('app-assets/images/portrait/small/avatar-s-2.jpg')}}" alt="avtar images" width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Jahnavi</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey Nikhil, I am looking for the best Interior design Quotation.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Yeah Sure I'll Share You the Details</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
         <p class="clearfix mb-0"><span class="float-left d-inline-block">2022 &copy; DesignAlley</span><span class="float-right d-sm-inline-block d-none">Designed<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://piniteinfo.com" target="_blank">Piniteinfo</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

 
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets/js/scripts/configs/vertical-menu-light.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/components.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/footer.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="{{asset('app-assets/js/scripts/pages/page-users.js')}}"></script> -->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>