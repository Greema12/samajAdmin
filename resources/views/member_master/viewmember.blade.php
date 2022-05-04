
 @include('Layout.header')

 @include('Layout.leftmenu')

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                

                                   <h3><span class="ql-size-large">Members Master</span></h3><br/>
                                    <div class="table-responsive">
                                        <table  class="table table-bordered mb-0">
                                @foreach($member as $list)
                                            <thead>
                                            <tr>
                                                
                                                <th>Member Id</th>
                                                 <td>{{$list->member_id}}</td>
                                             </tr>
                                             
                                             <tr>    
                                                <th>Member Type</th>
                                                
                                            @if($list->member_type =='0') 

                                                <td>Main Member</td>
                                                @else
                                                <td>Sub Member</td>
                                                @endif
                                            </tr>

                                            <tr>
                                                <th>Surname</th>
                                                <td>{{ $list->surname}}</td>
                                            </tr>
                                            <tr>    
                                                <th >Firstname</th>
                                                <td>{{ $list->firstname}}</td>
                                            </tr>
                                            <tr>
                                                <th>Lastname</th>
                                                <td>{{ $list->lastname}}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th> 

                                               <td> {{ $list->gender}}</td>
                                           <!--  @if($list->gender =='0')     
                                                <td>Male </td>
                                                 @elseif($list->gender =='1')
                                                <td>Female</td>
                                                @else($list->gender =='2')
                                                <td>Other</td>

                                                @endif -->
                                            </tr>
                                            
                                            <tr>
                                                <th>Relation with main member</th>
                                                <td>{{ $list->relation_main_member}}</td>
                                            </tr>
                                            <tr>
                                                <th>Birth Date</th>
                                                <td>{{ $list->birthdate }} </td>
                                            </tr>

                                            <tr>
                                                <th>Marrital Status</th>
                                                <td>{{ $list->marital_status }} </td>
                                            </tr>

                                            <tr>    
                                                <th>Pal Name</th>
                                                <!-- <td>{{ $list->pal_name }} </td> -->
                                                <td>
                <?php
                $pal_ID = DB::table('pal_master')->where('id',$list->pal_name)->value('pal_name');  
                ?>                                   

                {{ $pal_ID }} 
                                                </td>
                                           </tr>

                                            <tr>
                                                <th>Kutumb Name</th>
                                                <td>
                <?php
                $kutumb_ID = DB::table('kutumb_master')->where('id',$list->kutumb_name)->value('kutumb_name');  
                ?>                                   

                {{ $kutumb_ID }} 

                                                 </td>
                                            </tr>
                                             <tr>
                                                <th>Mobile No.</th>
                                                <td>{{ $list->mobile_no }} </td>

                                            </tr>
                                            <tr>
                                                <th>Alternate Mobile No.</th>
                                                <td>{{ $list->mobile_no2 }} </td>

                                            </tr>
                                            <tr>

                                                <th>Home Address1</th>
                                                <td>{{ $list->address }} </td>
                                            </tr>
                                            <tr>

                                                <th>Home Address2</th>
                                                <td>{{ $list->address2 }} </td>
                                            </tr>
                                            <tr>

                                                <th>Home Area</th>
                                                <td>{{ $list->home_area }} </td>
                                            </tr>
                                            <tr>

                                                <th>Home Pincode</th>
                                                <td>{{ $list->home_pin_code }} </td>
                                            </tr>

                                            <tr>

                                                <th>Home Country</th>
                                                
                                                <td>
                <?php
                $Con_ID = DB::table('countries')->where('id',$list->country)->value('name');  
                ?>                                   

                {{ $Con_ID }} 
                                                </td>
                                                
                                            </tr>
                                            <tr>

                                                <th>Home State</th>
                                                <td>
                <?php
                $State_ID = DB::table('states')->where('id',$list->state)->value('name');  
                ?>                                   

                {{ $State_ID }} 
                                                 </td>
                                            </tr>
                                            <tr>

                                                <th>Home City</th>
                                                <td>
                <?php
                $City_ID = DB::table('cities')->where('id',$list->city)->value('name');  
                ?>                                   

                {{ $City_ID }}                                     
                                                </td>
                                            </tr>    
                                            

                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $list->email }} </td>

                                            </tr>
                                            <tr>
                                                <th>Matrimonial Status</th>
                                                @if($list->matrimonial_status =='0') 

                                                 <td>No </td>
                                                 @else
                                                 <td>Yes </td>
                                                 @endif
                                            </tr>
                                            <tr>
                                                <th>Qualification</th>
                                                <td>{{ $list->qualification }} </td>

                                            </tr>
                                            <tr>
                                                <th>Education</th>
                                                <td>{{ $list->education }} </td>

                                            </tr>
                                            <tr>
                                                <th>Profession</th>
                                                <td>{{ $list->profession }} </td>

                                            </tr>
                                            <tr>
                                                <th>Profession Details</th>
                                                <td>{{ $list->profession_details }} </td>

                                            </tr>
                                            <tr>

                                                <th>Work Address1</th>
                                                <td>{{ $list->work_address1 }} </td>
                                            </tr>
                                            <tr>

                                                <th>Work Address2</th>
                                                <td>{{ $list->work_address2 }} </td>
                                            </tr>
                                            <tr>

                                                <th>Work Area</th>
                                                <td>{{ $list->work_area }} </td>
                                            </tr>
                                            <tr>

                                                <th>Work Pincode</th>
                                                <td>{{ $list->work_pincode }} </td>
                                            </tr>

                                            <tr>

                                                <th>Work Country</th>
                                                <td>
                <?php
                $wc_ID = DB::table('countries')->where('id',$list->work_country)->value('name');  
                ?>                                   

                {{ $wc_ID }} 
                                                </td>
                                            </tr>
                                            <tr>

                                                <th>Work State</th>
                                                <td>
                <?php
                $ws_ID = DB::table('states')->where('id',$list->work_state)->value('name');  
                ?>                                   

                {{ $ws_ID }} 
                                                 </td>
                                            </tr>
                                            <tr>

                                                <th>Work City</th>
                                                <td>
                <?php
                $wC_ID = DB::table('cities')->where('id',$list->work_city)->value('name');  
                ?>                                   

                {{ $wC_ID }} 
                                                 </td>
                                            </tr>    
                                            

                                                
                                            
                                            </thead>
                                            <tbody>
                                           
                                
                               
                                           
                                               
                                               
                                                
                                               
                                                
                                                
                                              
                                                
                                                
                                                
                                                
                                                
                                                
                                               

                                                
                                                
                                               
                         @endforeach
                                            </tbody>
                                        </table>
                                    </div>
 <br/>                                   
 <a href="{{URL::to('/')}}/member_master/member1" class="btn btn-lighten-info waves-effect  width-md waves-info" >Back</a>

                                    </div><!--end card-box-->
                                    
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->




  @include('Layout.footer')



