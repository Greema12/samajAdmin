 @include('Layout.header')

 @include('Layout.leftmenu')

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    
                                    <div class="">
                                
                                   <br/> 
                                   <h3><span class="ql-size-large">Member CV Page</span></h3>
                            <!-- <div class="button-list ">
                            <a href="{{URL::to('/')}}/marksheet/addNewMarksheet">
                            <button type="button" class="btn btn-lighten-info waves-effect  width-md waves-info">Add New Details</button>
                            </a>
                            </div> -->

                                    <br/>

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Member Name</th>
                                                
                                                <th>CV</th>
                                                
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($mark as $list)
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td>{{ $list->firstname}}</td>
                                                
                                                <td> <a class="btn btn-lighten-info " target="_blank" href="{{asset('files/' .$list->upload_cv) }} ">view</a></td>
                                               
                                                <td>                                      
                       
                        <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/CV/delete/{{ $list->id }}">
                        <i class="mdi mdi-delete"></i>
                        </a> 
                        </td>
                                                
                        </tr>
                        <?php $count++; ?> 
                         @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    </div>

                                    </div><!--end card-box-->
                                    
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->



</script>

  @include('Layout.footer')



