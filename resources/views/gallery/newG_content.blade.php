 @include('Layout.header')

 @include('Layout.leftmenu')

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                  

                                <div class="col-lg-6 ">


@if (count($errors) > 0)
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }} </li>
    <!-- <li>please select the image with minimum 2000 width and 1300 height..</li> -->
    @endforeach
    </ul>
    </div>
@endif 

                                   <h3><span class="ql-size-large">Gallery Content Page</span></h3>
                                    <p class="text-muted font-17 mb-3">
                                      <code>  .Add Your New image  </code> .
                                    </p> 
                                  
                            <div class="card-body table-bordered mb-1">
                                    <form action="{{URL::to('/')}}/gallery/store1" method="post"  enctype="multipart/form-data">
                                      {{ csrf_field() }}      
                            
                            <div class="form-group">
                            <label  >Image</label>
                            
                            <input type="file" name="image" class="form-control" > 
                            <input type="hidden" name="gallery_id" value="{{request()->route('id')}}">
                            </div>


                                
                            <!-- <div class="form-group" >
                            <label >Gallery Master id</label>
                            <input type="text" name="gallery_id"  class="form-control" >
                            </div> -->
                            

                            <div class="form-group text-right mb-0">
                            
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                              Submit </button>
                            <a href="{{URL::to('/')}}/gallery/G_master" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
                            </div>

                            </form>
       

       </div>
                            </div>
                                    
                                    
                                </div>
                            </div><!--end card-box-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                       
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

  @include('Layout.footer')