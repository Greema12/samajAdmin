 <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- User box -->
                        <div class="user-box text-center">
                       <!-- <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
                         <div class="dropdown">
                            <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Nowak Helme</a>
                            
                        </div> -->
                        <!-- <p class="text-muted">Admin Head</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-muted">
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#" class="text-custom">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul> -->
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{URL::to('/')}}/home">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

<li>
<a href="{{URL::to('/')}}/Pal/pal">
<i class="mdi mdi-invert-colors"></i>    
<span>Pal Master</span>
</a>
</li>


                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-invert-colors"></i>
                                    <span> Logo Master </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/Logo/head">Header Logo</a></li>
                                    <li><a href="{{URL::to('/')}}/Logo/footer">footer Logo</a></li>

                                </ul>
                            </li>


                            <li>
                                <a href="{{URL::to('/')}}/Page/slider">
                                    <i class="mdi mdi-format-font"></i>
                                    <span> Slider </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{URL::to('/')}}/member/member">
                                    <i class=" mdi mdi-emoticon"></i>
                                    <span> Main Member Team </span>
                                </a>
                            </li>

                            

                         <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-texture"></i>
                                    <span class="badge badge-info float-right">2</span>
                                    <span> Upload Data </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/marksheet/marksheet">Marksheet</a></li>
                                    <li><a href="{{URL::to('/')}}/CV/cv">Upload CV</a></li>
                                    
                                </ul>
                            </li> 
                            <li>
                                <a href="javascript: void(0);">
                                    <i class=" mdi mdi-emoticon"></i>
                                    <span>  Member_master </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/member_master/submember1">View Sub Member_master</a></li>
                                    <li><a href="{{URL::to('/')}}/member_master/member1">View Main Member_master</a></li>
                                    <li><a href="{{URL::to('/')}}/member_master/addmember">Add Main Member</a></li>
                                    
                                </ul>

                            </li>
                           <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-invert-colors"></i>
                                    <span class="badge badge-success float-right">5</span>
                                    <span> Home Page </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/samaj/samaj">Samaj Activity</a></li>
                                    <li><a href="{{URL::to('/')}}/upcoming/upcoming">Upcoming Event</a></li>
                                    <li><a href="{{URL::to('/')}}/kelvani/kelvani">Kelvani Mandal</a></li>
                                    <li><a href="{{URL::to('/')}}/Counter/counter">Counter</a></li>
                                    <li><a href="{{URL::to('/')}}/advertise/advertise">Advertise Manage</a></li>
                                    
                                    
                                </ul>
                            </li>
                            

                            
                            <li>
                                <a href="{{URL::to('/')}}/gallery/G_master">
                                    <i class="mdi mdi-calendar"></i>
                                    <span>Gallery Master </span>
                                </a>
                            </li>

                           

                            <li>
                                <a href="{{URL::to('/')}}/Page/Contact-us">
                                    <i class="mdi mdi-email"></i>
                                    <span> Contact-Us </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{URL::to('/')}}/keyperson/keymaster">
                                    <i class="mdi mdi-email"></i>
                                    <span> Key Person </span>
                                </a>
                            </li>
                            
                           <li>
                                <a href="{{URL::to('/')}}/aboutus/About-us">
                                    <i class="mdi mdi-format-font"></i>
                                    <span> About-Us </span>
                                </a>
                            </li> 
                            
                           
 
                            
               
                           


                        
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
   <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
