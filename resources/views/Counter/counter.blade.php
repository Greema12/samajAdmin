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
                                    <h3><span class="ql-size-large">Counter Page</span></h3> <br/>
                                    <div class="card-body table-bordered mb-1">
                                        
                                     
                     @foreach($counter as $list)                
                     <form  action="{{URL::to('/')}}/Counter/masterUpdate/{{ $list->id }}" >

                            {{ csrf_field() }} 
                            
                            
                            <div class="form-group">
                            <label >Kada</label>
                            <input type="text" name="kada" value="{{ $list->kada }}"  class="form-control" >
                            </div>
                            

                            <div class="form-group">
                            <label >Dipra</label>
                            <input type="text" name="dipra" value="{{ $list->dipra }}"  class="form-control" >
                            </div>

                            <div class="form-group" >
                            <label >Fatehpura</label>
                            <input type="text" name="fatehpur" value="{{ $list->fatehpur }}"  class="form-control" >
                            </div>
                                       
                            <div class="form-group">
                            <label >Example</label>
                            <input type="text" name="example" value="{{ $list->example }}" class="form-control">
                            </div>

                           
                                        
                             
                            @endforeach  
                                      <br/><br/><br/>

                                        <div class="">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                               Update
                                            </button>
                                            <a href="{{URL::to('/')}}/home" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
                                        </div>

                                    </form>


                                    </div><!--end card-box-->
                                    
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

  @include('Layout.footer')