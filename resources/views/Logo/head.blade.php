 @include('Layout.header')

@include('Layout.leftmenu')


 


<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    
    <div class="col-lg-9">
                                
    <br/> 
    <h3><span class="ql-size-large">Header Logo Page</span></h3><br/>
    
            <div class="table-responsive">
            <table class="table table-bordered mb-0">
            <thead>
            <tr>
            <th>Sr No</th>
            <th>1st Header Logo</th>
            <th>2nd Header Logo</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $count = 1; ?>
                                
                    @foreach($head as $list)
                            <tr>
                            <th scope="row"><?php echo $count; ?></th>
                            <td><img class="image" src="{{ URL::to('/') }}/img/logo/{{ $list->logo_image1 }}" style="width: 200px; height: 100px;"  /></td>
                            <td><img class="image" src="{{ URL::to('/') }}/img/logo/{{ $list->logo_image2 }}" style="width: 200px; height: 100px;"  /></td>
                            <td>  
                            <a class="btn btn-success" href="{{URL::to('/')}}/Logo/headEdit/{{ $list->id }}" >
                            <i class="mdi mdi-pencil"></i> </a>  
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