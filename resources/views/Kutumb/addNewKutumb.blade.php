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

                                   <h3><span class="ql-size-large">Kutumb Master Page</span></h3>
                                    <p class="text-muted font-17 mb-3">
                                     
             <?php
                $pal = DB::table('pal_master')->where('id',request()->route('id'))->value('pal_name');  
                ?>                                   

                 
                                     <code>  .Add Your New Kutumb ({{ $pal }}) </code> .

                                      
                                    </p> 
                                  



                            <div class="card-body table-bordered mb-1">
                                    <form action="{{URL::to('/')}}/Kutumb/store" method="post"  enctype="multipart/form-data">
                                      {{ csrf_field() }}      
                            <input type="hidden" name="pal_id" value="{{request()->route('id')}}">
                            
                            <div class="form-group">
                            <label  >Kutumb Name</label>
                            
                            <input type="text" name="kutumb_name" class="form-control" > 
                            
                            </div>


                            <!-- <div class="form-group">
                            <label  >Kutumb Code</label>
                            
                            <input type="text" name="kutumb_code" class="form-control" > 
                            
                            </div>
                            
 -->
                            <div class="form-group text-right mb-0">
                            
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                              Submit </button>
                            <a href="{{URL::to('/')}}/Pal/pal" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
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