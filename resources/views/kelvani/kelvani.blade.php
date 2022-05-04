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
                                   <h3><span class="ql-size-large">kelvani Mandal Activity</span></h3>
                                <br/>
                                   <p>
                                  &nbsp;<a href="{{URL::to('/')}}/kelvani/addNewKelvani">   <button class="btn btn-lighten-info waves-effect  width-md waves-info">Add New Details</button> </a>
                                            
                                  </p><br/>


                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Short Description</th>
                                                <th>Long Description</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $count = 1; ?>
                                
                                @foreach($kelvani as $list)
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td><img class="image" src="{{ URL::to('/') }}/img/kelavni/{{ $list->photo }}" style="width: 200px; height: 100px;"  /></td>
                                                <td>{{ $list->title}}</td>
                                                <td>{{ $list->short_description }} </td>
                                                <td><?php echo $list->long_description ?></td>
                                                <td>                                      
                        <a class="btn btn-success" href="{{URL::to('/')}}/kelvani/kelvaniEdit/{{ $list->id }}" >
                        <i class="mdi mdi-pencil"></i>  
                        </a> <br/><br/>

                        <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/kelvani/delete/{{ $list->id }}">
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

  @include('Layout.footer')



