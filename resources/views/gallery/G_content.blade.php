


 @include('Layout.header')


@include('Layout.leftmenu')

 <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    
                                <div class="col-lg-6">
                                
                                   <br/> 
                                   <h3><span class="ql-size-large">Gallery Content Page</span></h3>
                                 
<br/>
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Image</th>
                                                <!-- <th>Gallery_Master_id </th> -->
                                                
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($G_content as $list)
                                          
                              <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td><img class="image" src="{{ URL::to('/') }}/img/gallery/{{ $list->image }}" style="width: 200px; height: 100px;"  /></td>
                                                <!-- <td>{{$list->gallery_id }} </td> -->
                                               
                                                <td>                                      
                                                    <a class="btn btn-success" href="{{URL::to('/')}}/gallery/G_contentEdit/{{ $list->id }}" >
                                                    <i class="mdi mdi-pencil"></i>  
                                                    </a> 

                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/gallery/delete1/{{ $list->id }}">
                        <i class="mdi mdi-delete"></i>
                        </a> 
                        </td>
                                                
                        </tr>
                        <?php $count++; ?> 
                         @endforeach
                                            </tbody>
                                        </table>
                                    </div>
<br/>                                   
 <a href="{{URL::to('/')}}/gallery/G_master" class="btn btn-lighten-info waves-effect  width-md waves-info" >Back</a>

                                    </div>
                                    
                                </div><!--end card-box-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               
              


  @include('Layout.footer')