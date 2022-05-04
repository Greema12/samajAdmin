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


@if (count($errors) > 0)
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }} </li>
     <li>please select the image with minimum 220 width and 100 height..</li> 
    @endforeach
    </ul>
    </div>
@endif 


        <h3><span class="ql-size-large">Footer Logo Page</span></h3> <br/>
            <div class="card-body table-bordered mb-1">
                                        
                    @foreach($footer as $list)
                    <form action="{{URL::to('/')}}/Logo/masterUpdate1/{{ $list->id }}" method="post"   enctype="multipart/form-data">
                     {{ csrf_field() }}      
                            
                    <div class="form-group">
                    <label  >Footer Logo </label>
                    <input type="file" name="logo_image" src="{{ URL::to('/') }}/img/logo/{{ $list->logo_image }}" style="width: 400px; height: 45px;" class="form-control" >
                    </div>                                
                    
                    <div class="form-group">
                    <label >Footer Logo </label>
                    <input name="logo_image" type="image" style="width: 400px; height: 200px;" src="{{ URL::to('/') }}/img/logo/{{ $list->logo_image }}"  class="form-control">
                    </div>   

                                 
                                        
                    @endforeach  
                    <br/><br/><br/>

                    <div class="">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit"> Update</button>
                    <a href="{{URL::to('/')}}/Logo/footer" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
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