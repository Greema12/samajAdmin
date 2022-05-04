 @include('Layout.header')

@include('Layout.leftmenu')



<div class="content-page">
                <div class="content">

                    
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
   
 <div class="">
                                
                                   <br/> 
                                   <h3><span class="ql-size-large">Advertise Page</span></h3>
                            

                                    <br/>

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Image1</th>
                                                <th>Image2</th>
                                                <th>Description</th>
                                                
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($about as $list)
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td><img name="image1" class="image" src="{{ URL::to('/') }}/img/about/{{ $list->image1 }}" style="width: 200px; height: 100px;"  /></td>
                                                <td><img name="image2" class="image" src="{{ URL::to('/') }}/img/about/{{ $list->image2 }}" style="width: 200px; height: 100px;"  /></td>
                                                <td><?php echo $list->details ?> </td>
                                                
                                                <td>                                      
                        <a class="btn btn-success" href="{{URL::to('/')}}/aboutus/About-usEdit/{{ $list->id }}" >
                        <i class="mdi mdi-pencil"></i>  
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

  @include('Layout.footer')