
 @include('Layout.header')

 @include('Layout.leftmenu')

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                
                                   
                                   <h3><span class="ql-size-large">Main Members Master</span></h3>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Member Id</th>
                                               
                                                
                                                <th >Firstname</th>
                                                <th>Password </th>
                                                <th> Details </th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <!-- <th>Action</th> -->
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($member as $list)
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <th>{{$list->member_id}}</th>
                                                <td>{{ $list->firstname}}</td>
                                                <td>{{ $list->Repassword}} </td>
                                                <td>
                                                  <a href="{{URL::to('/')}}/member_master/viewmember/{{ $list->id}}" class="btn btn-lighten-info waves-effect  width-md waves-info" >View Details</a>
                                                  <a href="{{URL::to('/')}}/member_master/family/{{ $list->id}}" class="btn btn-lighten-info waves-effect  width-md waves-info" >Family Details</a>




                                                </td>


                                                <td>
                                                    
@if($list->status =='Active') 

        
                
        <button  type="submit" value="Deactive"  class="updateStatus btn btn-lighten-success waves-effect  width-md waves-success" id="<?php echo $list->id ?>" >{{ $list->status }}</button>  
          
  @else
           
        <button  type="submit" value="Active"   class="updateStatus btn btn-lighten-success waves-effect  width-md waves-success " id="<?php echo $list->id ?>" >{{ $list->status }}</button>  
          


@endif



                                                </td>
                                                <td>                                      
                       <a class="btn btn-success" href="{{URL::to('/')}}/member_master/member1Edit/{{$list->id}}" >
                        <i class="mdi mdi-pencil"></i>  
                        </a> 

                        <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/member_master/delete/{{ $list->id }}">
                        <i class="mdi mdi-delete"></i>
                        </a> 
                        </td>
                                                
                        </tr>
                        <?php $count++; ?> 
                         @endforeach
                                            </tbody>
                                        </table>
                                    </div>


                                    </div><!--end card-box-->
                                    
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

<script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click', '.updateStatus',function(){
                var Id = $(this).attr("id");
                //alert(Id);
                 $.ajax({  
                    url:'{{URL::route('/member_master/member1/masterUpdate')}}',  
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



