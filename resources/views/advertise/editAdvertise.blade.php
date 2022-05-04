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
                                    <h3><span class="ql-size-large">Advertise Page</span></h3> <br/>
                                    <div class="card-body table-bordered mb-1">
                                        
                                     
                     @foreach($advertise as $list)                
                     <form method="post"   action="{{URL::to('/')}}/advertise/masterUpdate/{{ $list->id }}" >

                            {{ csrf_field() }}


                            <div class="form-group">
                            <label >Image</label>
                            <input type="file" name="image" src="{{ URL::to('/') }}/img/advertise/{{ $list->image }}" style="width: 400px; height: 45px;"  class="form-control" >
                                                   
                            </div>
                                       
                            <div class="form-group">
                            <label >Image</label>
                            <input name="image" type="image" style="width: 400px; height: 200px;" src="{{ URL::to('/') }}/img/advertise/{{ $list->image }}" class="form-control">

                            </div>


                            <div class="form-group" >
                            <label >Title</label>
                            <input type="text" name="title" value="{{ $list->title }}"  class="form-control" >
                            </div>
                            

                            <div class="form-group "  >  
                            <label >Description</label>                          
                            <textarea  class="nicEdit-panel form-control" name="description" rows="5" ><?php echo $list->description;?></textarea>
                            </div>
                            
  
                                        
                            @endforeach  
                                      <br/><br/><br/>

                                        <div class="">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                               Update
                                            </button>
                                            <a href="{{URL::to('/')}}/advertise/advertise" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
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