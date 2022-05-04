@include('Layout.header')

@include('Layout.leftmenu')
            <!-- ========== Left Sidebar Start ========== -->
         
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h2 class="text-success header-title mt-0 mb-4">Member Master</h2>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                      <h1 class="text-info">   <i class=" dripicons-user"></i></h1>
                                          
                                       
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <?php
                                $countmain = DB::table('member_master')->where('member_type','0')->count();
                                ?>
                                            <h2 class="font-weight-normal">{{$countmain }} </h2>
                                             <p class="text-pink  mb-1">Main Member</p> 
                                             
                                        </div>
                                    </div>
                                </div></div>


                                <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="text-success header-title mt-0 mb-4">Member Master</h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-chart-box-1 float-left" dir="ltr">
                                         
                                      <h1 class="text-info">   <i class=" dripicons-user"></i></h1>
                                         
                                        </div>

                                        <div class="widget-detail-1 text-right">
                                            <?php
                                $countsub = DB::table('member_master')->where('member_type','1')->count();
                                ?>
                                            <h2 class="font-weight-normal">{{$countsub }} </h2>
                                             <p class="text-pink  mb-1">Sub Member</p> 
                                             
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->

                            <!-- end col -->

                           
                        <!-- end row -->

                       
                        <!-- end row -->


                       <!--  <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <div class="avatar-lg float-left mr-3">
                                            <img src="assets/images/users/user-3.jpg" class="img-fluid rounded-circle" alt="user">
                                        </div>
                                        <div class="wid-u-info">
                                            <h5 class="mt-0">Chadengle</h5>
                                            <p class="text-muted mb-1 font-13 text-truncate">coderthemes@gmail.com</p>
                                            <small class="text-warning"><b>Admin</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <div class="avatar-lg float-left mr-3">
                                            <img src="assets/images/users/user-2.jpg" class="img-fluid rounded-circle" alt="user">
                                        </div>
                                        <div class="wid-u-info">
                                            <h5 class="mt-0"> Michael Zenaty</h5>
                                            <p class="text-muted mb-1 font-13 text-truncate">coderthemes@gmail.com</p>
                                            <small class="text-pink"><b>Support Lead</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <div class="avatar-lg float-left mr-3">
                                            <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="user">
                                        </div>
                                        <div class="wid-u-info">
                                            <h5 class="mt-0">Stillnotdavid</h5>
                                            <p class="text-muted mb-1 font-13 text-truncate">coderthemes@gmail.com</p>
                                            <small class="text-success"><b>Designer</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div>
                                        <div class="avatar-lg float-left mr-3">
                                            <img src="assets/images/users/user-10.jpg" class="img-fluid rounded-circle" alt="user">
                                        </div>
                                        <div class="wid-u-info">
                                            <h5 class="mt-0">Tomaslau</h5>
                                            <p class="text-muted mb-1 font-13 text-truncate">coderthemes@gmail.com</p>
                                            <small class="text-info"><b>Developer</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div> -->
                        <!-- end row -->


                              
                        
                    </div> <!-- container -->

                </div> <!-- content -->

   

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

      

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
@include('Layout.footer')