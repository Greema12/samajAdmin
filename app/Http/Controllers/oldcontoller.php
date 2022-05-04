<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Advertise;
use App\Counter;
use App\H_logo;
use App\F_logo;
use App\member;
use App\Member_Master;
use App\CV;
use PDF;

class Newcontroller1 extends Controller
{
   

    
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

//member_master page
        public function member_master()
        {
            $member = DB::table('member_master')->get();
            return view('member_master.member1',compact('member'));
        }
//view member_master
 public function viewMember1($id)
        {
            $member = DB::table('member_master')->where('id',$id)->get();
            return view('member_master.viewmember',compact('member'));
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

  $mark = DB::table('member_cv')->get();
        
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


public function editMember1($id)
        {
            $member = DB::table('member_master') ->where('id',$id)->get();
        return view('member_master.editmember1',compact('member'));
        }

//addMember store in DB
   public function storeMainMember(Request $request)
    {
       
        if(empty($request->get('id')))
    {
      
     $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'mobile_no' => 'required|min:10|numeric',
            'gender'=>'required',
            'relation_main_member' => 'required',
            'matrimonial_status' =>'required'
           
            ]);
  

$data = new Member_Master();
}      

else
    {
        $data = Member_Master::find($request->get('id'));
    }
// dd($request->get('work_country') ,$request->get('work_state'),$request->get('work_city'), $request->get('profession'),$request->get('profession_details'));

    
        $data->member_type = 0;
        
if(!empty($request->matrimonial_status))
     {
        $data->matrimonial_status = $request->get('matrimonial_status');

      }
        $data->surname = $request->get('surname');
        $data->firstname = $request->get('firstname');
        $data->lastname = $request->get('lastname');

if(!empty($request->kutumb_name))
     {         
        $data->kutumb_name = $request->get('kutumb_name');
      }
if(!empty($request->pal_name))
     {          
        $data->pal_name = $request->get('pal_name');
      }
if(!empty($request->gender))
     {   
        $data->gender = $request->get('gender');
    }
if(!empty($request->birthdate))
     {    
$data->birthdate = $request->get('birthdate');
}

if(!empty($request->relation_main_member))
     {           
        $data->relation_main_member = $request->get('relation_main_member');
    }    
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
        $data->password = $request->get('password');
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
 // exit();
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
} //end
