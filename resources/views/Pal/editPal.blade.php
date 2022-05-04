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
                                    <h3><span class="ql-size-large">Pal Master Page</span></h3> <br/>
                                    <div class="card-body table-bordered mb-1">
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
                                     
                     @foreach($pal as $list)                
                     <form method="post" action="{{URL::to('/')}}/Pal/store" >

                            {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $list->id }}"  class="form-control" >
                       
                            <div class="form-group" >
                            <label >Pal Code</label>
                            <input type="text" name="pal_code" value="{{ $list->pal_code }}"  class="form-control" >
                            </div>

                             <div class="form-group" >
                            <label >Pal Name</label>
                            <input type="text" name="pal_name" value="{{ $list->pal_name }}"  class="form-control" >
                            </div>
                       
                                        
                            @endforeach  
                                      <br/><br/><br/>

                                        <div class="">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                               Update
                                            </button>
                                            <a href="{{URL::to('/')}}/Pal/pal" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
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