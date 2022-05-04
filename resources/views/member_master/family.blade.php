
 @include('Layout.header')

 @include('Layout.leftmenu')

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                
                                   
                                   <h3><span class="ql-size-large">Family Members Master</span></h3>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Member Id</th>
                                               
                                                
                                                <th >Firstname</th>
                                                <th>Relation With Main Member </th>
                                                <th> Details </th>
                                                
                                                <!-- <th>Action</th> -->
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
<!--                            <input type="text" name="Route" value="{{request()->route('id')}}">     
 -->                                
                                @foreach($member as $list)

                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <th>{{$list->member_id}}</th>
                                                <td>{{ $list->firstname}}</td>
                                                <td>{{ $list->relation_main_member}}</td>
                                                <td>
                                                  <a href="{{URL::to('/')}}/member_master/viewfamilymember/{{ $list->id}}" class="btn btn-lighten-info waves-effect  width-md waves-info" >View Details</a>
                                             
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



  @include('Layout.footer')



