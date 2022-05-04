
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
   
    @endforeach
    </ul>
    </div>
@endif 

                                   <h3><span class="ql-size-large">Upcoming Event Page</span></h3>
                                  <br/>
<div class="card-body table-bordered mb-1">
                                    <form action="{{URL::to('/')}}/upcoming/store" method="post"  enctype="multipart/form-data">
                                      {{ csrf_field() }}      
                            <div class="form-group">
                            <label  >Image</label>
                            <input type="file" name="photo" class="form-control" > 
                            </div>

                                
                            <div class="form-group" >
                            <label >Title</label>
                            <input type="text" name="title"  class="form-control" >
                            </div>

                            <div class="form-group" >
                            <label >Event date</label>
                            <input type="date" name="event_date" id="datepicker"  class="form-control" >
                            </div>
                            

                            <div class="form-group "  >
                            <label >Short Description</label>
                            <input  type="text" style="height: 80px;" name="short_description"  class="form-control" > 
                            </div> 

                            <div class="form-group ">
                            <label >Long Description</label>
                            <textarea class="nicEdit-panel form-control" name="long_description" ></textarea>
                            </div>
                           
                            <div class="form-group text-right mb-0">
                            
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                              Submit </button>
                            <a href="{{URL::to('/')}}/upcoming/upcoming" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
                            </div>

                            </form>
       

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