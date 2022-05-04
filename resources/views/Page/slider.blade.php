 @include('Layout.header')


@include('Layout.leftmenu')

 <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    
  								<div class="col-lg-8">
                                
                                   <br/> 
                                   <h3><span class="ql-size-large">Slider Page</span></h3>
                                    <!-- <p class="text-muted font-14 mb-3">
                                        Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                    </p> -->

                                   
                                    <br/>
                                   <p>
                                  &nbsp;<a href="{{URL::to('/')}}/Page/addNewSlider">   <button class="btn btn-lighten-info waves-effect  width-md waves-info">Add New Slider</button> </a>
                                            
                                  </p><br/>

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                              	
                              	@foreach($slider as $list)
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td><img class="image" src="{{ URL::to('/') }}/img/slider/{{ $list->slider_image }}" style="width: 200px; height: 100px;"  /></td>
                                                <td>                                      
                                                	<a class="btn btn-success" href="{{URL::to('/')}}/Page/sliderEdit/{{ $list->id }}" >
                                     				<i class="mdi mdi-pencil"></i>  
                                      				</a> 

                		<a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/Page/delete/{{ $list->id }}">
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
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               
              


  @include('Layout.footer')