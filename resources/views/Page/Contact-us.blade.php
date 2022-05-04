@include('Layout.header')


@include('Layout.leftmenu')

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    
						<div class="row">
                            <div class="col-7">
                                <div class="card">
                                	<h3><span class="ql-size-large">Contact Us Page</span></h3> <br/>
                                    <div class="card-body table-bordered mb-1">
                                        
                                     
                     @foreach($contact as $list)              	
					 <form  action="{{URL::to('/')}}/Page/masterUpdate/{{ $list->id }}" >

					 		{{ csrf_field() }} 
							
					 		
                            <div class="form-group">  
                            <label >Address</label>                          
                            <textarea  class="form-control" name="address" rows="3" ><?php echo $list->address;?></textarea>
                            </div>
                            

                            <div class="form-group">
                            <label  for="emailAddress">Email address</label>
                         	<input type="email" name="email_id_1" value="{{ $list->email_id_1 }}"  class="form-control" >
                            </div>

							<div class="form-group" >
                            <label >Mobile No.</label>
                            <input type="text" name="mobile_1" value="{{ $list->mobile_1 }}"  class="form-control" >
                            </div>
                                       
                            <div class="form-group">
                            <label >Website</label>
                            <input type="text" name="website" value="{{ $list->website }}" class="form-control">
                            </div>
                                        
                            <!-- <div class="form-group">
                            <label for="passWord2">Confirm Password *</label>
                           	<input type="password" placeholder="Password" class="form-control" >
                            </div> -->
                                        
                            @endforeach  
                                      <br/><br/><br/>

                                        <div class="">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                               Update
                                            </button>
                                            <a href="{{URL::to('/')}}/home" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
                                        </div>

                                    </form>



                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>



                                    </div><!--end card-box-->
                                    
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

@include('Layout.footer')