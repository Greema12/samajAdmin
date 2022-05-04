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
                                   <h3><span class="ql-size-large">Key Person Page</span></h3>
                                
                                <br/>
                                
                            <div class="button-list ">
                                       <a href="{{URL::to('/')}}/keyperson/addNewkey_master">
                                        <button type="button" class="btn btn-lighten-info waves-effect  width-md waves-info">Add New Category</button>
                                        </a>

                                       <!--  <a href="{{URL::to('/')}}/keyperson/addNewkey_data">
                                        <button type="button" class="btn btn-lighten-success waves-effect  width-md waves-success">Add New Details</button>
                                        </a> -->
                                        
                            </div>
                                    <br/>
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Category Name</th>
                                                <th>No. Of Images</th>
                                                <th>Action</th>
                                                <th>view</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($key_master as $list)
                                 <?php
                                $countimage = DB::table('key_person_data')->where('key_per_id',$list->id)->count();
                                ?>
                                    
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td>{{ $list->name }}</td>
                                                <td>{{$countimage }}</td>
                                                <td>

                        <a class="btn btn-icon waves-effect waves-light btn-success" href="{{URL::to('/')}}/keyperson/addNewkey_data/{{ $list->id }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                      
                                        
                        

                        <a class="btn btn-icon waves-effect waves-light btn-info" href="{{URL::to('/')}}/keyperson/key_masterEdit/{{ $list->id }}" >
                        <i class="mdi mdi-pencil"></i>  
                        </a> 

                        <a class="btn btn-icon waves-effect waves-light btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/keyperson/delete/{{ $list->id }}">
                        <i class="mdi mdi-delete"></i>
                        </a> 



                        </td>
                                                
                        <td> <p>
                                  &nbsp;<a href="{{URL::to('/')}}/keyperson/key_data/view/{{$list->id}}">   <button class="btn btn-lighten-info waves-effect  width-md waves-info">view key data </button> </a>
                                            
                        </p></td>

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

  @include('Layout.footer')