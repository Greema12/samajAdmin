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
    <!-- <li>please select the image with minimum 2000 width and 1300 height..</li> -->
    @endforeach
    </ul>
    </div>
@endif 


        <h3><span class="ql-size-large">Header Logo Page</span></h3> <br/>
            <div class="card-body table-bordered mb-1">
                                        
                    @foreach($head as $list)
                    <form action="{{URL::to('/')}}/Logo/masterUpdate/{{ $list->id }}" method="post"   enctype="multipart/form-data">
                     {{ csrf_field() }}      
                            
                    <div class="form-group">
                    <label  >1st Header Logo </label>
                    <input type="file" name="logo_image1" src="{{ URL::to('/') }}/img/logo/{{ $list->logo_image1 }}" style="width: 400px; height: 45px;" class="form-control" >
                    </div>                                
                    
                    <div class="form-group">
                    <label >1st Header Logo </label>
                    <input name="logo_image1" type="image" style="width: 400px; height: 200px;" src="{{ URL::to('/') }}/img/logo/{{ $list->logo_image1 }}"  class="form-control">
                    </div>   

                    <div class="form-group">
                    <label  >2nd Header Logo </label>
                    <input type="file" name="logo_image2" src="{{ URL::to('/') }}/img/logo/{{ $list->logo_image2 }}" style="width: 400px; height: 45px;" class="form-control" >
                    </div>                                
                    
                    <div class="form-group">
                    <label >2nd Header Logo </label>
                    <input name="logo_image2" type="image" style="width: 400px; height: 200px;" src="{{ URL::to('/') }}/img/logo/{{ $list->logo_image2 }}"  class="form-control">
                    </div>                             
                                        
                                        
                    @endforeach  
                    <br/><br/><br/>

                    <div class="">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit"> Update</button>
                    <a href="{{URL::to('/')}}/Logo/head" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
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