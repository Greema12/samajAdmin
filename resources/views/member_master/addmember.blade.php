 
 @include('Layout.header')

 @include('Layout.leftmenu')

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-10">
                                <div class="card-box">
                                  
 <h4 class="header-title mb-3">Add Main Member Form</h4>

 <form method="post" action="{{URL::to('/')}}/member_master/store1" enctype="multipart/form-data"  data-parsley-validate novalidate>
 {{ csrf_field() }}


<div id="basicwizard">

<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4 active ">
<li class="nav-item ">
<a href="#basictab1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 "> 
<i class="mdi mdi-account-circle mr-1"></i>
<span class="d-none d-sm-inline">General Info</span>
</a>
</li>

<li class="nav-item">
<a href="#basictab2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
<i class="mdi mdi-face-profile mr-1"></i>
<span class="d-none d-sm-inline">Home Details</span>
</a>
</li>
                                                   
<li class="nav-item">
<a href="#basictab3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
<i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
<span class="d-none d-sm-inline">Work Details</span>
</a>
</li>
</ul>

<!-- Table1-->
@if (count($errors) > 0)
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }} </li>
    @endforeach
    </ul>
    </div>
@endif 



<div class="tab-content border-0 mb-0">
<div class="tab-pane" id="basictab1">
<div class="row">
<div class="col-12">

<p style="text-align: right;" class="text-primary ">*&nbsp;Field with blue colour are required.</p>


<input type="hidden" class="form-control"  name="member_type" >

<!-- <div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Matrimonial Status</label>    
<div class="col-md-9">
<select class="form-control" name="matrimonial_status"   value=""  >
<option class="form-control"  value="" >Select Your Status</option>
<option class="form-control"  value="0" >No</option>
<option class="form-control"  value="1" >Yes</option>
</select>
</div></div> -->

<div class="form-group row mb-3">
    <label class="col-md-3 col-form-label text-primary " for="confirm">*&nbsp; Matrimonial Status</label>
    <div class="col-md-9">
    <div class="radio   form-check-inline">
    <input type="radio"  value="0" name="matrimonial_status" required>
    <label >No </label>
    <!-- </div> -->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- <div class="radio   form-check-inline"> -->
    <input type="radio"  value="1" name="matrimonial_status" required>
    <label > Yes </label>
    </div> 
 </div>                               
</div>


<div class="form-group row mb-3">
<label class="col-md-3 col-form-label text-primary" >*&nbsp;First Name</label>
<div class="col-md-9">
<input type="text" class="form-control" required placeholder="Enter  name"  name="firstname" >
</div>
</div>
<div class="form-group row mb-3">
<label class="col-md-3 col-form-label text-primary">*&nbsp; Middle Name </label>
<div class="col-md-9">
<input type="text"  name="lastname" class="form-control" >
</div>
</div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label text-primary" for="confirm">*&nbsp;Surname</label>
<div class="col-md-9">
<input type="text" name="surname" class="form-control" >
</div>
</div>



<div class="form-group row mb-3">
<label class="col-md-3 col-form-label text-primary" for="confirm">*&nbsp;Relation With Main Member</label>
<div class="col-md-9">
                    <?php
                    $getrelation = DB::table('relation_master')->get();
                    ?>
<select class="form-control" name="relation_main_member"   value=""  >
<option class="form-control"  value="" >Select Your Relation With Main Member </option>
                @foreach($getrelation as $list)
                    <option value="{{ $list->name }}" >{{ $list->name }}</option>
                @endforeach
</select>
</div>
</div>

<div  class="form-group row mb-3">
    <label class="col-md-3 col-form-label text-primary" for="confirm">*&nbsp;Gender</label>
    <div  class="col-md-9">
    <div  class="radio  form-check-inline">
    <input type="radio"  value="0" name="gender"required >
    <label >Male </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!-- </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div  class="radio  form-check-inline"> -->
    <input type="radio"  value="1" name="gender"required >
    <label >Female </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <input type="radio"  value="2" name="gender"required >
    <label >Other </label>
    </div> 
 </div>                               
</div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label text-primary" for="confirm">*&nbsp;Pal Name</label>    
<div class="col-md-9">
                   <?php
                    $getpal = DB::table('pal_master')->get();
                    ?>
<select class="form-control" id="pal" name="pal_name"   value=""  >
<option class="form-control"  value="" >Select Your Pal</option>
                @foreach($getpal as $list)
                    <option value="{{ $list->id }}" >{{ $list->pal_name }}</option>
                @endforeach
<input type="hidden" name="pal_id" value="{{ $list->id }}">
</select>
</div></div>
               
                           
<div class="form-group row mb-3">
<label class="col-md-3 col-form-label text-primary" for="confirm">*&nbsp;Kutumb Name</label>    
<div class="col-md-9">
                   
<select class="form-control" id="kutumb" name="kutumb_name"   value=""  >
<option class="form-control"  value="" >Select Your Kutumb</option>
               
</select>
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Birthdate</label>
<div class="col-md-9">
<input type="date" name="birthdate" class="form-control" >
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
<label class="col-md-3 col-form-label text-primary" for="confirm">*&nbsp;Mobile No.</label>
<div class="col-md-9">
<input type="text" id="mobile_no" name="mobile_no" class="form-control " >
</div>
</div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Alternate Mobile No.</label>
<div class="col-md-9">
<input type="text" name="mobile_no2" class="form-control" >
</div>
</div>

<div  class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Qualification</label>
<div  class="col-md-9">
                    <?php
                    $getqualification = DB::table('qualification_master')->get();
                    ?>
<select id="visit" class="form-control"  name="qualification"   value=""  >
<option class="form-control"  value="" >Select Your Qualification</option>
                @foreach($getqualification as $list)
                    <option value="{{ $list->name }}" >{{ $list->name }}</option>
                @endforeach
<option class="form-control"   value="Other" >Other</option>
</select>
</div>
</div>

<div class="">
 <button class="btn btn-bordred-primary waves-effect  width-md waves-light" type="submit">
Submit
 </button>
</div>

<div style="display: none" id="showEducation">
<div   class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Education</label>
<div   class="col-md-9">
<input  type="text" name="education" class="form-control" >
</div>
</div>
</div>

<!-- <div class="">
 <button class="btn btn-bordred-primary waves-effect  width-md waves-light" type="submit">
Submit
 </button>
</div> -->



</div> <!-- end col -->
</div> <!-- end row -->
</div>
<!-- Table-2 -->
<div class="tab-pane" id="basictab2">
    <div class="row">
    <div class="col-12">
    
    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Home Address1</label>
    <div class="col-md-9">
    <input type="text"  name="address" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Home Address2</label>
    <div class="col-md-9">
    <input type="text"  name="address2" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Home Area</label>
    <div class="col-md-9">
    <input type="text"  name="home_area" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Home Pincode</label>
    <div class="col-md-9">
    <input type="text"  name="home_pin_code" class="form-control" >
    </div>
    </div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Home Country</label>    
<div class="col-md-9">
                    <?php
                    $getC = DB::table('countries')->get();
                    ?>
                 
<select class="form-control" name="country"   value=""  >
<option class="form-control"  value="" >Select Your Country</option>

                @foreach($getC as $list)
                    <option value="{{ $list->id }}" >{{ $list->name }}</option>
                @endforeach

</select>
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Home State</label>    
<div class="col-md-9">

<select class="form-control" id="state" name="state" value="">
<option class="form-control"  value="" >Select Your State</option>

</select>
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Home City</label>    
<div class="col-md-9">
   
<select class="form-control" id="city" value="" name="city">
<option class="form-control"  value="" >Select Your City</option>

</select>
</div></div>
                                 
         
    </div> <!-- end col -->
    </div> <!-- end row -->
</div>

<div class="tab-pane" id="basictab3">
    <div class="row">
    <div class="col-12">
        <div class="form-group row mb-3">
        <label class="col-md-3 col-form-label text-primary" for="email">*&nbsp;Email</label>
        <div class="col-md-9">
        <input type="email"  required parsley-type="email" id="email" name="email" class="form-control" >
        </div>
        </div>   
        
    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label text-primary" for="name">*&nbsp;Password</label>
    <div class="col-md-9">
    <input type="password"  id="hori-pass1"  name="password" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label text-primary" for="name">*&nbsp;Re Password</label>
    <div class="col-md-9">
    <input type="password" data-parsley-equalto="#hori-pass1"  name="Repassword" class="form-control" >
    </div>
    </div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Profession</label>
<div class="col-md-9">
                    <?php
                    $getprofession = DB::table('profession_master')->get();
                    ?>
<select id="visit2" class="form-control" name="profession"   value=""  >
<option class="form-control"  value="" >Select Your Profession </option>
                     @foreach($getprofession as $list)
                    <option value="{{ $list->name }}" >{{ $list->name }}</option>
                    @endforeach
<option class="form-control"  value="Other" >Other</option>

</select>
</div>
</div>

<div style="display: none" id="showProfession">
    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Profession Details</label>
    <div class="col-md-9">
    <input type="text"  name="profession_details" class="form-control" >
    </div>
    </div>
</div>
    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Work Address1</label>
    <div class="col-md-9">
    <input type="text"  name="work_address1" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Work Address2</label>
    <div class="col-md-9">
    <input type="text"  name="work_address2" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Work Area</label>
    <div class="col-md-9">
    <input type="text"  name="work_area" class="form-control" >
    </div>
    </div>

    <div class="form-group row mb-3">
    <label class="col-md-3 col-form-label" for="name">Work Pincode</label>
    <div class="col-md-9">
    <input type="text"  name="work_pincode" class="form-control" >
    </div>
    </div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Work Country</label>    
<div class="col-md-9">
     <?php
                    $getCountry = DB::table('countries')->get();
                    ?>
<select class="form-control" name="work_country"   value=""  >
<option class="form-control"  value="" >Select Your Country</option>
 @foreach($getCountry as $list)
                    <option value="{{ $list->id }}" >{{ $list->name }}</option>
                @endforeach

</select>
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Work State</label>    
<div class="col-md-9">
<select class="form-control" name="work_state"   value=""  >
<option class="form-control"  value="" >Select Your Status</option>

</select>
</div></div>

<div class="form-group row mb-3">
<label class="col-md-3 col-form-label" for="confirm">Work City</label>    
<div class="col-md-9">
<select class="form-control" name="work_city"   value=""  >
<option class="form-control"  value="" >Select Your City</option>
</select>
</div></div>

<input type="hidden" class="form-control"  name="status" >

<br/>

 <!-- <div class="">
 <button class="btn btn-bordred-primary waves-effect  width-md waves-light" type="submit">
Submit
 </button>
</div> -->

            </div><!-- end -->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
<br/><br/><br/>
<ul class="list-inline wizard mb-0">
    <li class="previous list-inline-item">
        <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
    </li>
    <li class="next list-inline-item float-right">
        <a href="javascript: void(0);" class="btn btn-secondary">Next</a>
    </li>
</ul>

                                                </div> <!-- tab-content -->
                                            </div> <!-- end #basicwizard-->
                                        </form>

                                    </div><!--end card-box-->
                                    
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

  @include('Layout.footer')


  <script type="text/javascript">
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
//alert(data);
                      
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


$(document).ready(function() {

        $('select[name="country"]').on('change', function() {
            var countryID = $(this).val();
            

            if(countryID) {
                
alert(countryID);
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


</script>

 <!-- Validation js (Parsleyjs) -->
        <script src="{{ asset('assets/libs/parsleyjs/parsley.min.js')}}"></script>

        <!-- validation init -->
        <script src="{{ asset('assets/js/pages/form-validation.init.js')}}"></script>