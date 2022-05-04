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
                                    <h3><span class="ql-size-large">Member_master Page</span></h3> <br/>
                                    <div class="card-body table-bordered mb-1">
                                        
                                     
                     @foreach($member as $list)                
                     <form method="post"  action="{{URL::to('/')}}/member_master/masterUpdate/{{$list->id}}" >

                            {{ csrf_field() }}

                            <input type="hidden" name="id" value="{{ $list->id }}"  class="form-control" >
@if (count($errors) > 0)
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }} </li>
    @endforeach
    </ul>
    </div>
@endif                             <input type="hidden" class="form-control"  name="member_type" >

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Matrimonial Status</label>    
<div class="col-md-9">
<div class="radio radio-info form-check-inline">
    <input type="radio"  value="0" <?php echo ($list->matrimonial_status=='0')?'checked':'' ?> name="matrimonial_status"  >
    <label >No </label>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="radio radio-info form-check-inline">
    <input type="radio"  value="1"<?php echo ($list->matrimonial_status=='1')?'checked':'' ?> name="matrimonial_status" >
    <label > Yes </label>
    </div> 
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" >First Name</label>
<div class="col-md-9">
<input type="text" class="form-control" value="{{ $list->firstname }}"  name="firstname" >
</div>
</div>
<div class="form-group row mb-3">
<label class="col-md-3 col-form-label"> Middle Name </label>
<div class="col-md-9">
<input type="text"  name="lastname" value="{{ $list->lastname }}" class="form-control" >
</div>
</div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Surname</label>
<div class="col-md-9">
<input type="text" name="surname" value="{{ $list->surname }}" class="form-control" >
</div>
</div>                            
                                       

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Pal Name</label>    
<div class="col-md-9">
                   <?php
                    $getP = DB::table('pal_master')->get();
                    ?>
<select class="form-control" name="pal_name"   value=""  >
<option class="form-control"  value="" >
                <?php
                $pal_ID = DB::table('pal_master')->where('id',$list->pal_name)->value('pal_name');  
                ?>                                   

                {{ $pal_ID }} </option>
<option class="form-control"  value="" >  </option>
                @foreach($getP as $PAAL)
                    <option value="{{ $PAAL->id }}" >{{ $PAAL->pal_name }}</option>
                @endforeach
</select>
</div></div>                           

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Kutumb Name</label>    
<div class="col-md-9">
                 
<select class="form-control" name="kutumb_name"   value=""  >
<option class="form-control"  value="" >
    <?php
    $kutumb_ID = DB::table('kutumb_master')->where('id',$list->kutumb_name)->value('kutumb_name');  
    ?>                                   

    {{ $kutumb_ID }}
</option>
<option class="form-control"  value="" ></option>
               
</select>
</div></div>



<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Gender</label>    
<div class="col-md-9">
<div class="radio radio-info form-check-inline">
    <input type="radio"  value="0" <?php echo ($list->gender=='0')?'checked':'' ?> name="gender"  >
    <label >Male </label>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="radio radio-info form-check-inline">
    <input type="radio"  value="1"<?php echo ($list->gender=='1')?'checked':'' ?> name="gender" >
    <label > Female </label>
    </div> 
</div></div>
 
<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Birthdate</label>
<div class="col-md-9">
<input type="date" name="birthdate" value="{{ $list->birthdate }}" class="form-control" >
</div>
</div>  

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label " for="confirm">Marital Status</label>    
<div class="col-md-9">
                  
<select class="form-control"  name="marital_status"   value=""  >
<option class="form-control"  value="" >Select Your Status</option>
        <option name="marital_status" value="married" >Married</option>
         <option name="marital_status" value="unmarried" >Unmarried</option>
        
</select>
</div></div>                                        


<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Mobile No.</label>
<div class="col-md-9">
<input type="text" id="phone" name="mobile_no" value="{{ $list->mobile_no }}" class="form-control" >
</div>
</div>
                           
<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Alternate Mobile No.</label>
<div class="col-md-9">
<input type="text" name="mobile_no2"  value="{{ $list->mobile_no2 }}" class="form-control" >
</div>
</div>

<div  class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Qualification</label>
<div  class="col-md-9">
                    <?php
                    $getqualification = DB::table('qualification_master')->get();
                    ?>
<select id="visit" class="form-control"  name="qualification"   value=""  >
<option class="form-control"  value="" >{{ $list->qualification }}</option>
<option class="form-control"  value="B.E" ></option>
                @foreach($getqualification as $qua)
                    <option value="{{ $qua->name }}" >{{ $qua->name }}</option>
                @endforeach
<option class="form-control"   value="Other" >Other</option>
</select>
</div>
</div>
<div style="display: none" id="showEducation">
<div   class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Education</label>
<div   class="col-md-9">
<input  type="text" name="education" value="{{ $list->education }}" class="form-control" >
</div>
</div>
</div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Relation With Main Member</label>
<div class="col-md-9">
                    <?php
                    $getrelation = DB::table('relation_master')->get();
                    ?>
<select class="form-control" name="relation_main_member"   value=""  >
<option class="form-control"  value="" > {{ $list->relation_main_member }}</option>
                    @foreach($getrelation as $relation)
                    <option value="{{ $relation->name }}" >{{ $relation->name }}</option>
                    @endforeach
</select>
</div>
</div>

 <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Home Address1</label>
    <div class="col-md-9">
    <input type="text"  name="address" value="{{ $list->address }}" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Home Address2</label>
    <div class="col-md-9">
    <input type="text"  name="address2" value="{{ $list->address2 }}" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Home Area</label>
    <div class="col-md-9">
    <input type="text"  name="home_area" value="{{ $list->home_area }}" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Home Pincode</label>
    <div class="col-md-9">
    <input type="text"  name="home_pin_code" value="{{ $list->home_pin_code }}" class="form-control" >
    </div>
    </div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Home Country</label>    
<div class="col-md-9">
        <?php
                    $getC = DB::table('countries')->get();
        ?>
                 
<select class="form-control" name="country"   value=""  >
<option class="form-control"  value="" >
    <?php
            $Con_ID = DB::table('countries')->where('id',$list->country)->value('name');  
    ?>                                   

{{ $Con_ID }}
</option>

 @foreach($getC as $COUNTRY)
                    <option value="{{ $COUNTRY->id }}" >{{ $COUNTRY->name }}</option>
                @endforeach

</select>
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Home State</label>    
<div class="col-md-9">

<select class="form-control" id="state" name="state" value="">
<option class="form-control"  value="" >
    <?php
                $State_ID = DB::table('states')->where('id',$list->state)->value('name');  
    ?>                                   

    {{ $State_ID }}
</option>

</select>
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Home City</label>    
<div class="col-md-9">
   
<select class="form-control" id="city" value="" name="city">
<option class="form-control"  value="" >
        <?php
                $City_ID = DB::table('cities')->where('id',$list->city)->value('name');  
        ?>                                   

                {{ $City_ID }}
</option>

</select>
</div></div>


<div class="form-group row mb-3">
        <label class="col-md-3 col-form-label" for="email">Email</label>
        <div class="col-md-9">
        <input type="email" id="email" value="{{ $list->email }}"  name="email" class="form-control" >
        </div>
        </div> 

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Profession</label>
<div class="col-md-9">
                    <?php
                    $getprofession = DB::table('profession_master')->get();
                    ?>
<select id="visit2" class="form-control" name="profession"   value=""  >
<option class="form-control"  value="" >{{ $list->profession }} </option>
                    @foreach($getprofession as $pro)
                    <option value="{{ $pro->name }}" >{{ $pro->name }}</option>
                    @endforeach
<option class="form-control"  value="Other" >Other</option>

</select>
</div>
</div>        

<div style="display: none" id="showProfession">
    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Profession Details</label>
    <div class="col-md-9">
    <input type="text" value="{{ $list->profession_details }}"  name="profession_details" class="form-control" >
    </div>
    </div>
</div>

<div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Work Address1</label>
    <div class="col-md-9">
    <input type="text" value="{{ $list->work_address1}}"  name="work_address1" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Work Address2</label>
    <div class="col-md-9">
    <input type="text" value="{{ $list->work_address2}}"  name="work_address2" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Work Area</label>
    <div class="col-md-9">
    <input type="text" value="{{ $list->work_area}}" name="work_area" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Work Pincode</label>
    <div class="col-md-9">
    <input type="text" value="{{ $list->work_pincode}}"  name="work_pincode" class="form-control" >
    </div>
    </div>


<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Work Country</label>    
<div class="col-md-9">
                <?php
                    $getCountry = DB::table('countries')->get();
                ?>
<select class="form-control" name="work_country"   value=""  >
<option class="form-control"  value="" >
    <?php
            $wc_ID = DB::table('countries')->where('id',$list->work_country)->value('name');  
    ?>                                   

    {{ $wc_ID }}
</option>
 @foreach($getCountry as $WORK_C)
                    <option value="{{ $WORK_C->id }}" >{{ $WORK_C->name }}</option>
                @endforeach

</select>
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Work State</label>    
<div class="col-md-9">
<select class="form-control" name="work_state"   value=""  >
<option class="form-control"  value="" >
            <?php
                $ws_ID = DB::table('states')->where('id',$list->work_state)->value('name');  
            ?>                                   

            {{ $ws_ID }}
</option>

</select>
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Work City</label>    
<div class="col-md-9">
<select class="form-control" name="work_city"   value=""  >
<option class="form-control"  value="" >
            <?php
                $wC_ID = DB::table('cities')->where('id',$list->work_city)->value('name');  
            ?>                                   

        {{ $wC_ID }}
</option>
</select>
</div></div>




                            @endforeach  
                                      <br/><br/><br/>

                                        <div class="">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                               Update
                                            </button>
                                            <a href="{{URL::to('/')}}/member_master/member1" class="btn btn-secondary waves-effect waves-light" >Cancel</a>
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

  <script type="text/javascript">
      
// dropdown with textbox for education

$('#visit').on('change', function () { 
// alert();
var eValue = $(this).val();
// alert(eValue);
if(eValue == 'Other')
{
    $("#showEducation").css("display", "block");
}
else
{
    // alert('Else');
    $("#showEducation").css("display", "none");
}
     // $(this).next('#text1').toggle((this.value) =='Other')
});

$(document).ready(function() {

        $('select[name="country"]').on('change', function() {
            var countryID = $(this).val();
            

            if(countryID) {
                

                $.ajax({
                    url: '/member_master/addmemberstate/'+countryID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        // alert(data);
                        $('select[name="state"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="state"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="state"]').empty();
            }
        });
    });

    


$(document).ready(function() {

        $('select[name="state"]').on('change', function() {
            var stateID = $(this).val();
            //var Id = $('#state').val();
            // alert(Id);

            if(stateID) {
                
// alert(stateID);
                $.ajax({
                    url: '/member_master/addmembercity/'+stateID,
                    type: "GET",
           
                    dataType: "json",
                    success:function(data) {

                      
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });

// dropdown with textbox for profession

$('#visit2').on('change', function () { 
// alert();
var eValue = $(this).val();
// alert(eValue);
if(eValue == 'Other')
{
    $("#showProfession").css("display", "block");
}
else
{
    // alert('Else');
    $("#showProfession").css("display", "none");
}
     // $(this).next('#text1').toggle((this.value) =='Other')
});

$(document).ready(function() {

        $('select[name="work_country"]').on('change', function() {
            var countryID = $(this).val();
            

            if(countryID) {
                

                $.ajax({
                    url: '/member_master/addmemberWorkstate/'+countryID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        // alert(data);
                        $('select[name="work_state"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="work_state"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="work_state"]').empty();
            }
        });
    });

    


$(document).ready(function() {

        $('select[name="work_state"]').on('change', function() {
            var stateID = $(this).val();
            //var Id = $('#state').val();
            // alert(Id);

            if(stateID) {
                
// alert(stateID);
                $.ajax({
                    url: '/member_master/addmemberWorkcity/'+stateID,
                    type: "GET",
           
                    dataType: "json",
                    success:function(data) {

                      
                        $('select[name="work_city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="work_city"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="work_city"]').empty();
            }
        });
    });
$(document).ready(function() {

        $('select[name="pal_name"]').on('change', function() {
            var palID = $(this).val();
            //var Id = $('#pal').val();
             //alert(Id);
//alert(palID);

            if(palID) {
                
 
                $.ajax({
                    url: '/member_master/getkutumb1/'+palID,
                    type: "GET",
           
                    dataType: "json",
                    success:function(data) {

                      
                        $('select[name="kutumb_name"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="kutumb_name"]').append('<option value="'+ value.id +'">'+ value.kutumb_name +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="kutumb_name"]').empty();
            }
        });
    });
  </script>