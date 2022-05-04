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
                                    <h3><span class="ql-size-large">Marksheet </span></h3> <br/>
                                    <div class="card-body table-bordered mb-1">
                                        
                                     
                     @foreach($mark as $list)                
                     <form method="post"  action="{{URL::to('/')}}/marksheet/masterUpdate/{{ $list->id }}" >

                            {{ csrf_field() }}

<input type="hidden" name="check" value="{{$list->status}}"  />   

 <p class="text-muted font-16 mb-3"><code>.Select your marksheet Status</code></p>
                                         
                                    
<label for="chkPassport">
    <input type="checkbox" name="check" value="Approve" id="chkPassport" />
    approved?

</label> &nbsp;&nbsp;                

 <label for="chkPassport">
    <input type="checkbox" name="check" value="Reject" id="chkPassport1" />
    disaproved

</label> 

<br/><br/><br/>
<div id="dvPassport" style="display: none">
    
  Rejaction Note:  <input type="text" class="form-control" style=" width: 550px;" name="remark"  />
</div>

                            
                            @endforeach  
                                      <br/><br/><br/>

                                        <div class="">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                               Update
                                            </button>
                                            <a href="{{URL::to('/')}}/marksheet/marksheet" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    // $(function () {
    //     $("#chkPassport").click(function () {
    //         if ($(this).is(":checked")) {
    //             $("#dvPassport").show();
    //         } else {
    //             $("#dvPassport").hide();
    //         }
    //     });
    // });


    $(function () {
        $("#chkPassport1").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
                $('#chkPassport1').val();
            } else {
                $("#dvPassport").hide();
            }
        });
    });


   
</script>
  @include('Layout.footer')