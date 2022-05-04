 @include('Layout.header')

 @include('Layout.leftmenu')

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    
                                    <div class="">
                                
                                   <br/> 
                                   <h3><span class="ql-size-large">Advertise Page</span></h3>
                            <div class="button-list ">
                            <a href="{{URL::to('/')}}/advertise/addNewAdvertise">
                            <button type="button" class="btn btn-lighten-info waves-effect  width-md waves-info">Add New Advertise</button>
                            </a>
                            </div>

                                    <br/>

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($advertise as $list)
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td><img class="image" src="{{ URL::to('/') }}/img/advertise/{{ $list->image }}" style="width: 200px; height: 100px;"  /></td>
                                                <td>{{ $list->title}}</td>
                                                <td><?php echo $list->description ?> </td>
                                                <td>
                                                    
@if($list->status =='Active') 

        
                
        <button  type="submit" value="Deactive"  class="updateStatus btn btn-lighten-success waves-effect  width-md waves-success" id="<?php echo $list->id ?>" >{{ $list->status }}</button>  
          
  @else
           
        <button  type="submit" value="Active"   class="updateStatus btn btn-lighten-success waves-effect  width-md waves-success " id="<?php echo $list->id ?>" >{{ $list->status }}</button>  
          


@endif



                                                </td>
                                                <td>                                      
                        <a class="btn btn-success" href="{{URL::to('/')}}/advertise/advertiseEdit/{{ $list->id }}" >
                        <i class="mdi mdi-pencil"></i>  
                        </a> <br/><br/>

                        <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/advertise/delete/{{ $list->id }}">
                        <i class="mdi mdi-delete"></i>
                        </a> 
                        </td>
                                                
                        </tr>
                        <?php $count++; ?> 
                         @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    </div>

                                    </div><!--end card-box-->
                                    
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

<script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click', '.updateStatus',function(){
                var Id = $(this).attr("id");
                //alert(Id);
                 $.ajax({  
                    url:'{{URL::route('/advertise/advertise/Update')}}',  
                    method:"GET",  
                    data:{eId:Id},    
                    success:function(data){  
                       alert(data['status']);
                       $("#"+Id).html(data['status']); 
                    }  
                    });
            });
          

           
        });

</script>

  @include('Layout.footer')



