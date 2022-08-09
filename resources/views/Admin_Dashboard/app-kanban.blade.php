@include('Admin_Dashboard.Adminsidedashboard')
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static menu-collapsed " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Basic Kanban App -->
                <div class="kanban-overlay"></div>
                <section id="kanban-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary mb-1" id="add-kanban">
                                <i class='bx bx-add-to-queue mr-50'></i> Add New Board
                            </button>
                            <div id="kanban-app"></div>
                        </div>
                    </div>

                    <!-- User new mail right area -->
                    <div class="kanban-sidebar">
                        <div class="card shadow-none quill-wrapper">
                            <div class="card-header d-flex justify-content-between align-items-center border-bottom px-2 py-1">
                                <h3 class="card-title">UI Design</h3>
                                <button type="button" class="close close-icon">
                                    <i class="bx bx-x"></i>
                                </button>
                            </div>
                            <!-- form start -->
                            <form class="edit-kanban-item">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Card Title</label>
                                            <input type="text" class="form-control edit-kanban-item-title" placeholder="kanban Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Due Date</label>
                                            <input type="text" class="form-control edit-kanban-item-date" placeholder="21 August, 2021">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <select class="form-control text-white">
                                                        <option class="bg-primary" selected>Primary</option>
                                                        <option class="bg-danger">Danger</option>
                                                        <option class="bg-success">Success</option>
                                                        <option class="bg-info">Info</option>
                                                        <option class="bg-warning">Warning</option>
                                                        <option class="bg-secondary">Secondary</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Member</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar m-0 mr-1">
                                                            <img src="app-assets/images/portrait/small/avatar-s-20.jpg" height="36" width="36" alt="avtar img holder">
                                                        </div>
                                                        <div class="badge-circle badge-circle-light-secondary">
                                                            <i class="bx bx-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Attachment</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="emailAttach">
                                                <label class="custom-file-label" for="emailAttach">Attach file</label>
                                            </div>
                                        </div>
                                        <!-- Compose mail Quill editor -->
                                        <div class="form-group">
                                            <label>Comment</label>
                                            <div class="snow-container border rounded p-1">
                                                <div class="compose-editor"></div>
                                                <div class="d-flex justify-content-end">
                                                    <div class="compose-quill-toolbar">
                                                        <span class="ql-formats mr-0">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-image"></button>
                                                            <button class="btn btn-sm btn-primary btn-comment ml-25">Comment</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <button type="reset" class="btn btn-light-danger delete-kanban-item d-flex align-items-center mr-1">
                                        <i class='bx bx-trash mr-50'></i>
                                        <span>Delete</span>
                                    </button>
                                    <button class="btn btn-primary glow update-kanban-item d-flex align-items-center">
                                        <i class='bx bx-send mr-50'></i>
                                        <span>Save</span>
                                    </button>
                                </div>
                            </form>
                            <!-- form start end-->
                        </div>
                    </div>
                    <!--/ User Chat profile right area -->
                </section>
                <!--/ Sample Project kanban -->

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
                                <img src="app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
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
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/jkanban/jkanban.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-kanban.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>