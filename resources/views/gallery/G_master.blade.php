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
                                   <h3><span class="ql-size-large">Gallery Master Page</span></h3>
                                
                                <br/>
                                
                            <div class="button-list ">
                                       <a href="{{URL::to('/')}}/gallery/addNewG_master">
                                        <button type="button" class="btn btn-lighten-info waves-effect  width-md waves-info">Add New Category</button>
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
                                                <th>Category Name</th>
                                                <th>No. Of Images</th>
                                                
                                                <th>Action</th>
                                                <th>view</th>
                                                
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($G_master as $list)
                                <?php
                                $countGallery = DB::table('gallery_content')->where('gallery_id',$list->id)->count();
                                ?>
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td>{{ $list->name }}</td>
                                                <td>{{$countGallery }} </td>
                                                
                                                <td>  
                    <a class="btn btn-icon waves-effect waves-light btn-success" href="{{URL::to('/')}}/gallery/addNewG_content/{{ $list->id }}"><i class="fa fa-plus" aria-hidden="true"></i></a> 
                     

                    <a class="btn btn-icon waves-effect waves-light btn-info" href="{{URL::to('/')}}/gallery/G_masterEdit/{{ $list->id }}" >
                    <i class="mdi mdi-pencil"></i> </a> 
                                                   

                    <a class="btn btn-icon waves-effect waves-light btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/gallery/delete/{{ $list->id }}"> <i class="mdi mdi-delete"></i></a> 
                       
                        
                                        
                                           


                        </td>
                                                
                        <td> <p>
                                  &nbsp;<a href="{{URL::to('/')}}/gallery/G_content/{{ $list->id }}">   <button class="btn btn-lighten-info waves-effect  width-md waves-info">view gallery image</button> </a>
                                            
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