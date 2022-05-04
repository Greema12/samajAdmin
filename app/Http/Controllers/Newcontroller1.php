<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Kutumb;
use App\Pal;
use App\Advertise;
use App\Counter;
use App\H_logo;
use App\F_logo;
use App\member;
use App\Member_Master;
use App\CV;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Newcontroller1 extends Controller
{
 public function Pal()
        {
     $pal = DB::table('pal_master')->get();
        return view('Pal.pal',compact('pal'));
        }

public function newKutumb()
   {
    
          return view('Kutumb.addNewKutumb');

   }   

  //kutumb page
public function kutumb($id)
        {
            $kutumb = DB::table('kutumb_master')->where('pal_id',$id)->get();
            return view('Kutumb.kutumb',compact('kutumb'));
        }
   
public function EditKutumb($id)
        {
        
        $kutumb = DB::table('kutumb_master') ->where('id',$id)->get();
          

        return view('kutumb.editkutumb',compact('kutumb'));

        }

public function storeKutumb(Request $request)
    {
        

      if(empty($request->get('id')))
    
    {  
        $this->validate($request,[
             'kutumb_name' => 'required',
             //'kutumb_code' => 'required'  
           ]);
            
        $data = new Kutumb();  
     }         
else
    {
        $data = Kutumb::find($request->get('id'));
    }
   
        if(!empty($request->pal_id))
          { 
           $data->pal_id = $request->get('pal_id');
          }
// $k_ID = Kutumb::where('id', request()->route('id'))->increment('kutumb_code',1);
// $newID = $k_ID + 1;

$e = $request->get('pal_id');

$k_ID = Kutumb::orderBy('kutumb_code', 'DESC')->where('pal_id', $e)->value('kutumb_code');

$eid =  str_pad($k_ID  + 1, 2, 0, STR_PAD_LEFT);
 
 // dd($eid);
 // exit();

        $data->kutumb_code = $eid;     
        $data->kutumb_name = $request->get('kutumb_name');
        
        $data->save();

         return  redirect('Pal/pal');
 }
 
 public function deleteKutumb($id)
    {
       
        $kutumb = Kutumb::find($id);
        $kutumb->delete();
        return redirect('Kutumb/kutumb');
                      
    }
public function deletePal($id)
    {
       
        $pal = Pal::find($id);
        $pal->delete();
        return redirect('Pal/pal');
                      
    }
public function newPal()
   {
    

      return view('Pal.newPal');

   }   

public function EditPal($id)
        {
        
        $pal = DB::table('pal_master') ->where('id',$id)->get();
          

        return view('Pal.editPal',compact('pal'));

        }

public function storePal(Request $request)
    {
        

      if(empty($request->get('id')))
    
    {  
        $this->validate($request,[
             'pal_name' => 'required',
             'pal_code' => 'required',  ]);
            
        $data = new Pal();  
     }         
else
    {
        $data = Pal::find($request->get('id'));
    }
   
        $data->pal_code = $request->get('pal_code'); 
        $data->pal_name = $request->get('pal_name');
        
        $data->save();

         return  redirect('Pal/pal');
 }
     
//advertise page
        public function advertise()
        {
            $advertise = DB::table('advertise_manage')->get();
            return view('advertise.advertise',compact('advertise'));
        }

//edit advertise
        public function masterEditAdvertise($id)
        {
        
        $advertise = DB::table('advertise_manage') ->where('id',$id)->get();
          

        return view('advertise.editAdvertise',compact('advertise'));

        }

//update advertise page
        public function updateMasterAdvertise($id,Request $request)
        {

 

            $data = Advertise::find($id);
      
            if(!empty($request->image))
              {
                $data->image =$request->get('image');
              }

             $data->title = $request->get('title');
             $data->description = $request->get('description');
       $data->save();

            return  redirect('advertise/advertise');

        }

//delete advertise
        public function deleteAdvertise($id)
    {
       
        $advertise = Advertise::find($id);
        $advertise->delete();
        return redirect('advertise/advertise');
                      
    }

public function updateMaster1(Request $request)
        {
          $id = $request->eId;

        $data = Advertise::find($id);

        if($data->status == 'Active')
        {
            $status = 'Deactive';
        }
        else
        {
            $status = 'Active';
        }
        $data->status = $status;
        $data->save();
        return response()->json($data);
      
        }   

        //new advertise
   public function newAdvertise()
   {
    

      return view('advertise.newadvertise');

   }   
//advertise store in DB
   public function storeAdvertise(Request $request)
    {
        
    $this->validate(request(), [
              'image' => 'required',
              'title' =>'required',
              'description' => 'required',
              
          ]);
if ($request->hasFile('image')) {
        $image1 = $request->file('image');
        $name = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/img/advertise');
        $image1->move($destinationPath, $name);
 }        
   


    $data = new Advertise();
      
        
        $data->image =  $name;
        $data->title = $request->get('title');
        $data->description = $request->get('description');
        
      
        $data->save();

         return  redirect('advertise/advertise');
 }
  //counter page
     public function counter()
   {
      $counter = DB::table('counter')->get();

      return view('Counter.counter',compact('counter'));

   }
//update counter
   public function updateMasterCounter($id,Request $request)
    {
     
      

        $data = Counter::find($id);
      
       $data->kada = $request->get('kada');
       $data->dipra = $request->get('dipra');
       $data->fatehpur = $request->get('fatehpur');
       $data->example = $request->get('example');
       
       


        $data->save();

         return  redirect('home');


    }
//header logo page
   public function head()
   {
    $head = DB::table('logo_manage')->get();
            return view('Logo.head',compact('head'));
       
   } 

//edit header
        public function masterEditHead($id)
        {
        
        $head = DB::table('logo_manage') ->where('id',$id)->get();
          

        return view('Logo.editHead',compact('head'));

        }

//update header logo page
        public function updateMasterHead($id,Request $request)
        {
           
 $this->validate(request(), [
              'logo_image1' => 'dimensions:min_width=130,min_height=51',
              'logo_image2' => 'dimensions:min_width=130,min_height=51',
              
               ]);
 if ($request->hasFile('logo_image1')) {
        $image3 = $request->file('logo_image1');
        $name = time().'.'.$image3->getClientOriginalExtension();
        $destinationPath = public_path('/img/logo');
        $image3->move($destinationPath, $name);
 }
     
       if ($request->hasFile('logo_image2')) {
        $image = $request->file('logo_image2');
        $name1 = time().'abc.'.$image->getClientOriginalExtension();
        $destinationPath1 = public_path('/img/logo');
        $image->move($destinationPath1, $name1);
 }




        $data = H_logo::find($id);
      
        if(!empty($request->logo_image1))
        {
         $data->logo_image1 = $name;
        }

       if(!empty($request->logo_image2))
        {

           $data->logo_image2 = $name1;
          // $data->image2 = $request->image2;
        }
        $data->save();

          return  redirect('Logo/head');
        }

//footer page
   public function footer()
   {
    $footer = DB::table('logo-footer')->get();
            return view('Logo.footer',compact('footer'));
       
   } 

//edit footer
        public function masterEditFooter($id)
        {
        
        $footer = DB::table('logo-footer') ->where('id',$id)->get();
          

        return view('Logo.editFooter',compact('footer'));

        }

//update footer page
        public function updateMasterFooter($id,Request $request)
        {
           
 $this->validate(request(), [
              'logo_image' => 'dimensions:min_width=220,min_height=100',
              
              
               ]);
 if ($request->hasFile('logo_image')) {
        $image3 = $request->file('logo_image');
        $name = time().'xyz.'.$image3->getClientOriginalExtension();
        $destinationPath = public_path('/img/logo');
        $image3->move($destinationPath, $name);
 }

        $data = F_logo::find($id);
      
        if(!empty($request->logo_image))
        {
         $data->logo_image = $name;
        }

      
        $data->save();

          return  redirect('Logo/footer');
        }


//member page
        public function member()
        {
            $member = DB::table('main_body_data')->get();
            return view('member.member',compact('member'));
        }

//edit member
        public function masterEditmember($id)
        {
        
        $member = DB::table('main_body_data') ->where('id',$id)->get();
          

        return view('member.editmember',compact('member'));

        }

//update member page
        public function updateMastermember($id,Request $request)
        {
            $data = member::find($id);
      
            if(!empty($request->image))
              {
                $data->image = $request->get('image');
              }
             $data->name = $request->get('name');
             $data->short_description = $request->get('short_description');
             $data->post = $request->get('post');
             $data->save();

            return  redirect('member/member');

        }

//delete member
        public function deletemember($id)
    {
       
        $member = member::find($id);
        $member->delete();
        return redirect('member/member');
                      
    }

public function updateMaster2(Request $request)
        {
          $id = $request->eId;

        $data = member::find($id);

        if($data->status == 'Active')
        {
            $status = 'Deactive';
        }
        else
        {
            $status = 'Active';
        }
        $data->status = $status;
        $data->save();
        return response()->json($data);
      
        }   

//new slider
   public function newMember()
   {
    

      return view('member.newmember');

   }   
//slider store in DB
   public function storeMember(Request $request)
    {
        
    $this->validate(request(), [
              'image' => 'required',
              'name' => 'required',
              'post' => 'required',
              'short_description' => 'required',
              
          ]);
  if ($request->hasFile('image')) {
        $image1 = $request->file('image');
        $name = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/img/member');
        $image1->move($destinationPath, $name);
 }        
  

$data = new member();
      
        $data->image = $name;
        $data->name = $request->get('name');
        $data->short_description = $request->get('short_description');
        $data->post = $request->get('post');
        $data->save();

         return  redirect('member/member');
 }

//Sub member_master page
        public function Submember_master()
        {
            $member = DB::table('member_master')->where('member_type',1)->get();
            return view('member_master.submember1',compact('member'));
        }

//member_master page
        public function member_master()
        {
            $member = DB::table('member_master')->where('member_type',0)->get();
            return view('member_master.member1',compact('member'));
        }

//view member_master
 public function viewMember1($id)
        {

//$R_id = $request->get('Route');

// dd($R_id);
// exit();
            $member = DB::table('member_master')->where('id',$id)->get();
            return view('member_master.viewmember',compact('member'));
        }
public function viewSubMember($id)
        {
          //  dd(request()->route('id'));
          // exit();

            $member = DB::table('member_master')->where('id',$id)->get();
            return view('member_master.viewsubmember',compact('member'));
        }

public function viewfamilyMember($id)
        {

            $member = DB::table('member_master')->where('id',$id)->get();
            return view('member_master.viewfamilyMember',compact('member'));
        }
 public function updateMasterMember1(Request $request)
        {
          $id = $request->eId;

        $data = Member_Master::find($id);

        if($data->status == 'Active')
        {
            $status = 'Deactive';
        }
        else
        {
            $status = 'Active';
        }
        $data->status = $status;
        $data->save();
        return response()->json($data);
      
        }   

  //delete member
        public function deletemember1($id)
    {
       
        $member = Member_Master::find($id);
        $member->delete();
        return redirect('member_master/member1');
                      
    }      
//upload cv       
public function CV()
        {

  $mark = DB::table('member_cv as m')
                ->join('member_master as mm','m.member_id','=','mm.id')
                ->get();
        
        return view('CV.cv',compact('mark'));
        }
//delete cv
        public function deletecv($id)
    {
       
        $mark = CV::find($id);
        $mark->delete();
        return redirect('CV/cv');
                      
    }     
//new addMember
   public function addMember()
   {
    

      return view('member_master.addmember');

   }   

public function editSubMember1($id)
        {
            $member = DB::table('member_master') ->where('id',$id)->get();
        return view('member_master.editsubmember1',compact('member'));
        }


public function editMember1($id)
        {
            $member = DB::table('member_master') ->where('id',$id)->get();
        return view('member_master.editmember1',compact('member'));
        }

//addMember store in DB
   public function storeMainMember(Request $request)
    {
       
     
      
     $this->validate($request,[
            // 'firstname' => 'required',
            // 'lastname' => 'required',
            // 'surname' => 'required',
            // 'email' => 'required|email',
            // 'password'=> 'required|min:8' ,  
            //  'mobile_no' => 'required|min:10|numeric',
            //   'mobile_no2' => 'nullable|min:10|numeric',
            //  'gender'=>'required',
            // 'relation_main_member' => 'required',
            // 'matrimonial_status' =>'required',
            // 'pal_name' =>'required',
            // 'kutumb_name'=>'required',
           
            ]);
  

$data = new Member_Master();
     
  

$pal_ID = DB::table('pal_master')->where('id',$request->get('pal_name'))->value('pal_code');
$kutumb_ID =  DB::table('kutumb_master')->where('id',$request->get('kutumb_name'))->value('kutumb_code');
// $lastID = Member_Master::orderBy('id', 'DESC')->pluck('id')->first();
// $newlastID = $lastID + 1;

$original = $request->get('pal_name').$request->get('kutumb_name');

if($code=member_master::orderBy('f_ID', 'DESC')->where('pal_kutumb', $original)->value('f_ID'))


{

 
$f_ID =  str_pad($code+1, 3, 0, STR_PAD_LEFT);
$MemberCode  = ($pal_ID.'-'.$kutumb_ID.'-'.$f_ID.'-'.'01');  

}
 else
 {

  $f_ID =  str_pad($code+1, 3, 0, STR_PAD_LEFT);
$MemberCode  = ($pal_ID.'-'.$kutumb_ID.'-'.$f_ID.'-'.'01');  

 }


        $data->member_id = $MemberCode;
// dd($MemberCode , $f_ID);
// exit();
 
 $data->pal_kutumb= $request->get('pal_name').$request->get('kutumb_name');
 $data->f_ID = $f_ID;  


        $data->main_member_id = 0;
        $data->member_type = 0;

        $data->matrimonial_status = $request->get('matrimonial_status');

        $data->surname = $request->get('surname');
     

        $data->firstname = $request->get('firstname');
     
        $data->lastname = $request->get('lastname');
          
        $data->kutumb_name = $request->get('kutumb_name');
                
        $data->pal_name = $request->get('pal_name');
        
        $data->marital_status = $request->get('marital_status');

        $data->gender = $request->get('gender');
        
  
        $data->birthdate = $request->get('birthdate');
               
        $data->relation_main_member = $request->get('relation_main_member');
        
        $data->mobile_no = $request->get('mobile_no');
       
        $data->mobile_no2 = $request->get('mobile_no2');
               
        $data->qualification = $request->get('qualification');
              
        $data->education = $request->get('education');
       
        $data->address = $request->get('address');
               
        $data->address2 = $request->get('address2');
                
        $data->home_area = $request->get('home_area');
                
        $data->home_pin_code = $request->get('home_pin_code');
        
        $data->country = $request->get('country');
              
        $data->state = $request->get('state');
        
        $data->city =$request->get('city');
                
        $data->email = $request->get('email');
        
        $data->password  = Hash::make( $request->get('password') );
        $data->Repassword  = $request->get('Repassword');

       
        $data->profession = $request->get('profession');
               
        $data->profession_details = $request->get('profession_details');
                
        $data->work_address1 = $request->get('work_address1');
               
        $data->work_address2 = $request->get('work_address2');
               
        $data->work_area = $request->get('work_area');
                
        $data->work_pincode = $request->get('work_pincode');
        
        $data->work_country = $request->get('work_country'); 
               
        $data->work_state = $request->get('work_state');
               
        $data->work_city = $request->get('work_city');
       

        $data->status = 'Active';
         $data->save();

         return  redirect('member_master/member1');
 }
 
public function updateSubMemberMaster($id,Request $request)
    {

        $this->validate($request,[
            
            'email' => 'email',
           
             'mobile_no' => 'min:10|numeric',
              'mobile_no2' => 'nullable|min:10|numeric',
             
            ]);
  



$data = Member_Master::find($id);
    


     $data->matrimonial_status = $request->get('matrimonial_status');
       
if(!empty($request->surname))
        {
        $data->surname = $request->get('surname');
      }
if(!empty($request->firstname))
        {
        $data->firstname = $request->get('firstname');
        }
if(!empty($request->lastname))
        {
        $data->lastname = $request->get('lastname');
        }
if(!empty($request->kutumb_name))
        {         
        $data->kutumb_name = $request->get('kutumb_name');
        }
if(!empty($request->pal_name))
        {          
        $data->pal_name = $request->get('pal_name');
        }
   
        $data->marital_status = $request->get('marital_status');


        $data->gender = $request->get('gender');
        
if(!empty($request->birthdate))
        {    
        $data->birthdate = $request->get('birthdate');
        }
if(!empty($request->relation_main_member))
        {           
        $data->relation_main_member = $request->get('relation_main_member');
        }
if(!empty($request->mobile_no))
        {
        $data->mobile_no = $request->get('mobile_no');
        }
if(!empty($request->mobile_no2))
        {
        $data->mobile_no2 = $request->get('mobile_no2');
        }
if(!empty($request->qualification)) 
        {       
        $data->qualification = $request->get('qualification');
        }
if(!empty($request->education)) 
        {       
        $data->education = $request->get('education');
        }  
if(!empty($request->address)) 
        {
        $data->address = $request->get('address');
        }
if(!empty($request->address2)) 
        {        
        $data->address2 = $request->get('address2');
        }
if(!empty($request->home_area)) 
        {        
        $data->home_area = $request->get('home_area');
        }
if(!empty($request->home_pin_code)) 
        {        
        $data->home_pin_code = $request->get('home_pin_code');
        }
if(!empty($request->country))
        {
        $data->country = $request->get('country');
        }
if(!empty($request->state))
        {        
        $data->state = $request->get('state');
        }
if(!empty($request->city))
        { 
        $data->city =$request->get('city');
        }
if(!empty($request->email))
        {        
        $data->email = $request->get('email');
        }

       

if(!empty($request->profession))
        {        
        $data->profession = $request->get('profession');
        }
if(!empty($request->profession_details))
        {        
        $data->profession_details = $request->get('profession_details');
        }
if(!empty($request->work_address1))
        {        
        $data->work_address1 = $request->get('work_address1');
        }
if(!empty($request->work_address2))
        {        
        $data->work_address2 = $request->get('work_address2');
        }
if(!empty($request->work_area))
        {        
        $data->work_area = $request->get('work_area');
        }
if(!empty($request->work_pincode))
        {         
        $data->work_pincode = $request->get('work_pincode');
        }
if(!empty($request->work_country))
        {
        $data->work_country = $request->get('work_country'); 
        }
if(!empty($request->work_state))
        {        
        $data->work_state = $request->get('work_state');
         }
if(!empty($request->work_city))
        {        
        $data->work_city = $request->get('work_city');
        }

       
         $data->save();

         return  redirect('member_master/submember1');
  
    }

public function updateMemberMaster($id,Request $request)
    {

        $this->validate($request,[
            
            'email' => 'email',
           
             'mobile_no' => 'min:10|numeric',
              'mobile_no2' => 'nullable|min:10|numeric',
             
            ]);
  



$data = Member_Master::find($id);
    


     $data->matrimonial_status = $request->get('matrimonial_status');
       
if(!empty($request->surname))
        {
        $data->surname = $request->get('surname');
      }
if(!empty($request->firstname))
        {
        $data->firstname = $request->get('firstname');
        }
if(!empty($request->lastname))
        {
        $data->lastname = $request->get('lastname');
        }
if(!empty($request->kutumb_name))
        {         
        $data->kutumb_name = $request->get('kutumb_name');
        }
if(!empty($request->pal_name))
        {          
        $data->pal_name = $request->get('pal_name');
        }
   
        $data->marital_status = $request->get('marital_status');


        $data->gender = $request->get('gender');
        
if(!empty($request->birthdate))
        {    
        $data->birthdate = $request->get('birthdate');
        }
if(!empty($request->relation_main_member))
        {           
        $data->relation_main_member = $request->get('relation_main_member');
        }
if(!empty($request->mobile_no))
        {
        $data->mobile_no = $request->get('mobile_no');
        }
if(!empty($request->mobile_no2))
        {
        $data->mobile_no2 = $request->get('mobile_no2');
        }
if(!empty($request->qualification)) 
        {       
        $data->qualification = $request->get('qualification');
        }
if(!empty($request->education)) 
        {       
        $data->education = $request->get('education');
        }  
if(!empty($request->address)) 
        {
        $data->address = $request->get('address');
        }
if(!empty($request->address2)) 
        {        
        $data->address2 = $request->get('address2');
        }
if(!empty($request->home_area)) 
        {        
        $data->home_area = $request->get('home_area');
        }
if(!empty($request->home_pin_code)) 
        {        
        $data->home_pin_code = $request->get('home_pin_code');
        }
if(!empty($request->country))
        {
        $data->country = $request->get('country');
        }
if(!empty($request->state))
        {        
        $data->state = $request->get('state');
        }
if(!empty($request->city))
        { 
        $data->city =$request->get('city');
        }
if(!empty($request->email))
        {        
        $data->email = $request->get('email');
        }

       

if(!empty($request->profession))
        {        
        $data->profession = $request->get('profession');
        }
if(!empty($request->profession_details))
        {        
        $data->profession_details = $request->get('profession_details');
        }
if(!empty($request->work_address1))
        {        
        $data->work_address1 = $request->get('work_address1');
        }
if(!empty($request->work_address2))
        {        
        $data->work_address2 = $request->get('work_address2');
        }
if(!empty($request->work_area))
        {        
        $data->work_area = $request->get('work_area');
        }
if(!empty($request->work_pincode))
        {         
        $data->work_pincode = $request->get('work_pincode');
        }
if(!empty($request->work_country))
        {
        $data->work_country = $request->get('work_country'); 
        }
if(!empty($request->work_state))
        {        
        $data->work_state = $request->get('work_state');
         }
if(!empty($request->work_city))
        {        
        $data->work_city = $request->get('work_city');
        }

       
         $data->save();

         return  redirect('member_master/member1');
  
    }

 public function myformAjax($id)
    {
        $cities = DB::table("cities")
                    ->where("state_id",$id)
                    ->selectRaw("name,id")
                    ->get();
        return json_encode($cities);
    }

 public function myformAjaxstate($id)
    {
        $states = DB::table("states")
                    ->where("country_id",$id)
                    ->selectRaw("name,id")
                    ->get();
        return json_encode($states);
    }   
 public function myformWorkcity($id)
    {
        $cities = DB::table("cities")
                    ->where("state_id",$id)
                    ->selectRaw("name,id")
                    ->get();
        return json_encode($cities);
    }

 public function myformWorkstate($id)
    {
        $states = DB::table("states")
                    ->where("country_id",$id)
                    ->selectRaw("name,id")
                    ->get();
        return json_encode($states);
    }   
public function myformKutumb($id)
    {
        $kutumb = DB::table("kutumb_master")
                    ->where("pal_id",$id)
                    ->selectRaw("kutumb_name,id")
                    ->get();
        return json_encode($kutumb);
    }

public function family($id)
        {
            $member = DB::table('member_master')->where('main_member_id',request()->route('id'))->get();
            return view('member_master.family',compact('member'));
        }


} //end
