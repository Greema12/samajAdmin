 @include('Layout.header')


@include('Layout.leftmenu')

 <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    
                                <div class="col-lg-12">
                                
                                   <br/> 
                                   <h3><span class="ql-size-large">Pal Master & Kutumb Master</span></h3>
                                
                                <br/>
                                
                            <div class="button-list ">
                                       <a href="{{URL::to('/')}}/Pal/addNewPal">
                                        <button type="button" class="btn btn-lighten-info waves-effect  width-md waves-info">Add New Pal</button>
                                        </a>

                                        <!-- <a href="{{URL::to('/')}}/gallery/addNewG_content">
                                        <button type="button" class="btn btn-lighten-success waves-effect  width-md waves-success">Add New Image</button>
                                        </a> -->
                                        
                            </div>
                                    <br/>
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Pal Name</th>
                                                <th>Pal Code</th>
                                                <th>No. Of Kutumb</th>
                                                
                                                <th>Action</th>
                                                <th>view</th>
                                                
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($pal as $list)
                                <?php
                                $countkutumb = DB::table('kutumb_master')->where('pal_id',$list->id)->count();
                                ?>
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>

                                                <td>{{ $list->pal_name }}</td>
                                                <th>{{ $list->pal_code }}</th>
                                                <td>{{$countkutumb }} </td>
                                                
                                                <td>  
                    <a class="btn btn-icon waves-effect waves-light btn-success" href="{{URL::to('/')}}/Kutumb/addNewKutumb/{{ $list->id }}"><i class="fa fa-plus" aria-hidden="true"></i></a> 
                     

                    <a class="btn btn-icon waves-effect waves-light btn-info" href="{{URL::to('/')}}/Pal/palEdit/{{ $list->id }}" >
                    <i class="mdi mdi-pencil"></i> </a> 
                                                   

                    <a class="btn btn-icon waves-effect waves-light btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/Pal/delete/{{ $list->id }}"> <i class="mdi mdi-delete"></i></a> 
                       
                        
                                        
                                           


                        </td>
                                                
                        <td> <p>
                                  &nbsp;<a href="{{URL::to('/')}}/Kutumb/kutumb/{{ $list->id }}">   <button class="btn btn-lighten-info waves-effect  width-md waves-info">view kutumb</button> </a>
                                            
                        </p></td>
                        

                        </tr>
                        <?php $count++; ?> 
                         @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    </div>
                                    
                                </div><!--end card-box-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               
              


  @include('Layout.footer')