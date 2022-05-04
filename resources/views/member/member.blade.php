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
                                   <h3><span class="ql-size-large">Members Team</span></h3>
                                    <a href="{{URL::to('/')}}/member/addNewMember">
                                        <button type="button" class="btn btn-lighten-info waves-effect  width-md waves-info">Add New Member</button>
                                        </a>
                                    <br/><br/>

                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Image</th>
                                                <th>name</th>
                                                <th>Post</th>
                                                <th>Short Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($member as $list)
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td><img class="image" src="{{ URL::to('/') }}/img/member/{{ $list->image }}" style="width: 200px; height: 100px;"  /></td>
                                                <td>{{ $list->name}}</td>
                                                <td>{{ $list->post }} </td>
                                                <td><?php echo $list->short_description ?> </td>
                                                <td>
                                                    
@if($list->status =='Active') 

        
                
        <button  type="submit" value="Deactive"  class="updateStatus btn btn-lighten-success waves-effect  width-md waves-success" id="<?php echo $list->id ?>" >{{ $list->status }}</button>  
          
  @else
           
        <button  type="submit" value="Active"   class="updateStatus btn btn-lighten-success waves-effect  width-md waves-success " id="<?php echo $list->id ?>" >{{ $list->status }}</button>  
          


@endif



                                                </td>
                                                <td>                                      
                        <a class="btn btn-success" href="{{URL::to('/')}}/member/memberEdit/{{ $list->id }}" >
                        <i class="mdi mdi-pencil"></i>  
                        </a> <br/><br/>

                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/member/delete/{{ $list->id }}">
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
                    url:'{{URL::route('/member/member/masterUpdate')}}',  
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



