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
                                   <h3><span class="ql-size-large">Kutumb Master</span></h3>
                                        
                                  <br/>

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Kutumb Name</th>
                                                <th>Kutumb Code</th>
                                                <th>Pal Id</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                              	
                              	@foreach($kutumb as $list)
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td>{{ $list->kutumb_name }}</td>
                                                 <td>{{ $list->kutumb_code }}</td>
                                                <td>{{ $list->pal_id }}</td>
                                                <td>                                      
                                                	<a class="btn btn-success" href="{{URL::to('/')}}/Kutumb/KutumbEdit/{{ $list->id }}" >
                                     				<i class="mdi mdi-pencil"></i>  
                                      				</a> 

                		<a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/Kutumb/delete/{{ $list->id }}">
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
 <a href="{{URL::to('/')}}/Pal/pal" class="btn btn-lighten-info waves-effect  width-md waves-info" >Back</a>
                                    </div>
                                    
                                </div><!--end card-box-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

               
              


  @include('Layout.footer')