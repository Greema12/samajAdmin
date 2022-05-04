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
                                    <h3><span class="ql-size-large">Members Team</span></h3> <br/>
                                    <div class="card-body table-bordered mb-1">
                                        
                                     
                     @foreach($member as $list)                
                     <form  action="{{URL::to('/')}}/member/masterUpdate/{{ $list->id }}" >

                            {{ csrf_field() }}


                            <div class="form-group">
                            <label >Image</label>
                            <input type="file" name="image" src="{{ URL::to('/') }}/img/member/{{ $list->image }}" style="width: 400px; height: 45px;"  class="form-control" >
                                                   
                            </div>
                                       
                            <div class="form-group">
                            <label >Image</label>
                            <input name="image" type="image" style="width: 400px; height: 200px;" src="{{ URL::to('/') }}/img/member/{{ $list->image }}" class="form-control">

                            </div>


                            <div class="form-group" >
                            <label >Name</label>
                            <input type="text" name="name" value="{{ $list->name }}"  class="form-control" >
                            </div>
                            
                            <div class="form-group "  >  
                            <label >Post</label>                          
                            <input type="text" name="post" value="{{ $list->post }}"  class="form-control" >
                            </div>

                            <div class="form-group "  >
                            <label >Short Description</label>
                             <textarea  class="nicEdit-panel form-control" name="short_description" rows="5" ><?php echo $list->short_description;?></textarea>
                             </div> 
                             

                            
                            
  
                                        
                            @endforeach  
                                      <br/><br/><br/>

                                        <div class="">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                               Update
                                            </button>
                                            <a href="{{URL::to('/')}}/member/member" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
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