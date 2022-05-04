<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Aboutus;
use App\Slider;
use App\Contactus;
use App\Samaj;
use App\Kelvani;
use App\Upcoming;
use App\G_master;
use App\G_content;
use App\key_master;
use App\key_data;
use App\Marksheet;

class NewController extends Controller
{

  // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }


    //home page
	public function index()
    	{
    	return view('Layout.index');
    	}

public function register()

{
 return view ('auth.register');
}

public function reset()
{
    return view('passwords.reset');
}

public function email()
{
    return view('passwords.email');
}



//about us page    
    public function AboutUs ()
    	{
       
  $about = DB::table('aboutus')->get();
    	return view('aboutus.About-us',compact('about'));
    	}

   //edit about us page   
 public function masterEditAboutUs($id)
    {
      
        $about = DB::table('aboutus') ->where('id',$id)->get();
          

        return view('aboutus.editAbout',compact('about'));
    }

public function updateMasterAboutUs($id,Request $request)
    {
     
   
 $this->validate(request(), [
              // 'image' => 'dimensions:min_width=2000,min_height=1300',

              
      ]);
  if ($request->hasFile('image1')) {
        $image3 = $request->file('image1');
        $name = 'img1_'.time().'.'.$image3->getClientOriginalExtension();
        $destinationPath = public_path('/img/about');
        $image3->move($destinationPath, $name);
 }
     
       if ($request->hasFile('image2')) {
        $image = $request->file('image2');
        $name1 = 'img2_'.time().'abc.'.$image->getClientOriginalExtension();
        $destinationPath1 = public_path('/img/about');
        $image->move($destinationPath1, $name1);
 }
    

        $data = Aboutus::find($id);
      
           
       if(!empty($request->image1))
        {
           $data->image1 = $name;

        }

        if(!empty($request->image2))
        {

           $data->image2 = $name1;
         
        }
       
       $data->details = $request->get('details');
        $data->save();

         return  redirect('aboutus/About-us');


    }
      

//marksheet

public function Marksheet()
        {

  $mark = DB::table('upload_marksheet as u')
                ->join('member_master as uu','u.member_id','=','uu.id')
                ->get();
        
        return view('marksheet.marksheet',compact('mark'));
        }


 public function newMarksheet()
   {
    
 return view('marksheet.newmark');

   }   
 public function storeMarksheet(Request $request)
    {
        
    
  if ($request->hasFile('upload_marksheet')) {
        $image1 = $request->file('upload_marksheet');
        $name = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/files');
        $image1->move($destinationPath, $name);
 }        
  

$data = new Marksheet();

        $data->upload_marksheet = $name;
        $data->member_id = $request->get('member_id');
        $data->save();

         return  redirect('marksheet/marksheet');
 }
//edit button marksheet
 public function masterEditMarksheet($id)
    {
      
        $mark = DB::table('upload_marksheet') ->where('id',$id)->get();
          

        return view('marksheet.editMarksheet',compact('mark'));
    }

public function updateMasterMarksheet($id,Request $request)
    {
     
   
 
 
      $data = Marksheet::find($id);
      
  
      $data->status = $request->get('check');
      $data->remark = $request->get('remark');


        
       
      $data->save();

         return  redirect('marksheet/marksheet');


    }

public function deleteMarksheet($id)
    {
       
        $mark = Marksheet::find($id);
        $mark->delete();
        return redirect('marksheet/marksheet');
                      
    }


 //new slider
   public function newslider()
   {
    

      return view('Page.newslide');

   }   
//slider store in DB
   public function storeSlider(Request $request)
    {
        
    // $this->validate(request(), [
    //           'slider_image' => 'required|dimensions:min_width=2000,min_height=1300',
              
    //       ]);
  if ($request->hasFile('slider_image')) {
        $image1 = $request->file('slider_image');
        $name = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/img/slider');
        $image1->move($destinationPath, $name);
 }        
  

$data = new Slider();
      
        $data->slider_image = $name;
       
        $data->save();

         return  redirect('Page/slider');
 }


 //slider page
        
        public function slider ()
        {

        $slider = DB::table('slider_manage')->get();
         

        return view('Page.slider',compact('slider'));
        }

	
    //edit button slider
 public function masterEditSlider($id)
    {
      
        $slider = DB::table('slider_manage') ->where('id',$id)->get();
          

        return view('Page.editSlider',compact('slider'));
    }

public function updateMasterSlider($id,Request $request)
    {
     
   
 $this->validate(request(), [
              'slider_image' => 'dimensions:min_width=2000,min_height=1300',
              
      ]);
 if ($request->hasFile('slider_image')) {
        $image1 = $request->file('slider_image');
        $name = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/img/slider');
        $image1->move($destinationPath, $name);
 }
     

        $data = Slider::find($id);
      
      
      if(!empty($request->slider_image))
        {
        $data->slider_image = $name;
        }
       
        $data->save();

         return  redirect('Page/slider');


    }



public function deleteSlider($id)
    {
       
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('Page/slider');
                      
    }

//contact us page
    public function ContactUs ()
        {

        $contact = DB::table('contact_master')->get();    
        return view('Page.Contact-us',compact('contact'));
        }
//update contact page
        public function updateMasterContact($id,Request $request)
        {
            $data = Contactus::find($id);
      
        $data->address = $request->get('address');
       $data->email_id_1 = $request->get('email_id_1');
       $data->mobile_1 = $request->get('mobile_1');
       $data->website = $request->get('website');
      


        $data->save();

         return  redirect('home');

        }

//samaj page
        public function samaj()
        {
            $samaj = DB::table('samaj_activity')->get();
            return view('samaj.samaj',compact('samaj'));
        }
//edit samaj
        public function masterEditSamaj($id)
        {
        
        $samaj = DB::table('samaj_activity') ->where('id',$id)->get();
          

        return view('samaj.editSamaj',compact('samaj'));

        }
//update samaj page
        public function updateMasterSamaj($id,Request $request)
        {
            $data = Samaj::find($id);
      
            if(!empty($request->photo))
        {
         $data->photo = $request->get('photo');
     }
       


       
       $data->title = $request->get('title');
       $data->short_description = $request->get('short_description');
       $data->long_description = $request->get('long_description');
       $data->event_date = $request->get('event_date');


        $data->save();

         return  redirect('samaj/samaj');

        }

//delete samaj

        public function deleteSamaj($id)
    {
       
        $samaj = Samaj::find($id);
        $samaj->delete();
        return redirect('samaj/samaj');
                      
    }

//new samaj
   public function newsamaj()
   {
    

      return view('samaj.newsamaj');

   }   
//samaj store in DB
   public function storesamaj(Request $request)
    {
        
    $this->validate(request(), [
              'photo' => 'required',
              'title' =>'required',
              'short_description' => 'required',
              'long_description' => 'required',
              'event_date' => 'required',
              
          ]);
if ($request->hasFile('photo')) {
        $image1 = $request->file('photo');
        $name = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/img/samaj');
        $image1->move($destinationPath, $name);
 }        
   


    $data = new samaj();
      
        
        $data->photo = $name;
        $data->title = $request->get('title');
        $data->short_description = $request->get('short_description');
        $data->long_description = $request->get('long_description');
        $data->event_date = $request->get('event_date');
      
        $data->save();

         return  redirect('samaj/samaj');
 }



//kelvani page
        public function Kelvani()
        {
            $kelvani = DB::table('kelavni_mandal_activity')->get();
            return view('kelvani.kelvani',compact('kelvani'));
        }
//edit kelvani
        public function masterEditKelvani($id)
        {
        
        $kelvani = DB::table('kelavni_mandal_activity') ->where('id',$id)->get();
          

        return view('kelvani.editKelvani',compact('kelvani'));

        }
//update kelvani page
        public function updateMasterKelvani($id,Request $request)
        {
            $data = Kelvani::find($id);
      
            if(!empty($request->photo))
        {
         $data->photo = $request->get('photo');
        }
       
 
       $data->title = $request->get('title');
       $data->short_description = $request->get('short_description');
       $data->long_description = $request->get('long_description');
      


        $data->save();

         return  redirect('kelvani/kelvani');

        }

//delete kelvani
        public function deleteKelvani($id)
    {
       
        $kelvani = Kelvani::find($id);
        $kelvani->delete();
        return redirect('kelvani/kelvani');
                      
    }

//new kelvani
   public function newKelvani()
   {
    

      return view('kelvani.newkelvani');

   }   
//kelvani store in DB
   public function storeKelvani(Request $request)
    {
        
    $this->validate(request(), [
              'photo' => 'required',
              'title' =>'required',
              'short_description' => 'required',
              'long_description' => 'required',
              
          ]);
if ($request->hasFile('photo')) {
        $image1 = $request->file('photo');
        $name = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/img/kelavni');
        $image1->move($destinationPath, $name);
 }        
   


    $data = new Kelvani();
      
        
        $data->photo = $name;
        $data->title = $request->get('title');
        $data->short_description = $request->get('short_description');
        $data->long_description = $request->get('long_description');
      
        $data->save();

         return  redirect('kelvani/kelvani');
 }


//upcoming page
        public function Upcoming()
        {
            $upcoming = DB::table('upcoming_event')->get();
            return view('upcoming.upcoming',compact('upcoming'));
        }

//edit upcoming
        public function masterEditUpcoming($id)
        {
        
        $upcoming = DB::table('upcoming_event') ->where('id',$id)->get();
          

        return view('upcoming.editUpcoming',compact('upcoming'));

        }

//update upcoming page
        public function updateMasterUpcoming($id,Request $request)
        {



            $data = Upcoming::find($id);
    
            if(!empty($request->photo))
              {
                $data->photo = $request->get('photo');
              }
             $data->title = $request->get('title');
             $data->event_date = $request->get('event_date');
             $data->short_description = $request->get('short_description');
             $data->long_description = $request->get('long_description');

             $data->save();

            return  redirect('upcoming/upcoming');

        }
//new upcoming
   public function newUpcoming()
   {
    

      return view('upcoming.newUpcoming');

   }   
//upcoming store in DB
   public function storeUpcoming(Request $request)
    {
        
    $this->validate(request(), [
              'photo' => 'required',
              'title' =>'required',
              'short_description' => 'required',
             'event_date' => 'required',
              
          ]);
if ($request->hasFile('photo')) {
        $image1 = $request->file('photo');
        $name = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/img/upcoming');
        $image1->move($destinationPath, $name);
 }        
   


    $data = new Upcoming();
      
        
        $data->photo = $name;
        $data->title = $request->get('title');
        $data->event_date = $request->get('event_date');
        $data->short_description = $request->get('short_description');
        $data->long_description = $request->get('long_description');
      
        $data->save();

         return  redirect('upcoming/upcoming');
 }

        

//delete upcoming
        public function deleteUpcoming($id)
    {
       
        $upcoming = Upcoming::find($id);
        $upcoming->delete();
        return redirect('upcoming/upcoming');
                      
    }

public function updateMaster1(Request $request)
        {
          $id = $request->eId;

        $data = Upcoming::find($id);

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




//gallery page
    public function Gallery ()
        {
     $G_master = DB::table('gallery_master')->get();
        return view('gallery.G_master',compact('G_master'));
        }

//new gallery
   public function newG_master()
   {
    

      return view('gallery.newG_master');

   }   
//G_master store in DB
   public function storeG_master(Request $request)
    {
        
    $this->validate(request(), [
              
              'name' =>'required',
              
              
          ]);
 

$data = new G_master();
      
        $data->name = $request->get('name');
        
        $data->save();

         return  redirect('gallery/G_master');
 }


//edit button G_master
 public function masterEditG_master($id)
    {
      
        $G_master = DB::table('gallery_master') ->where('id',$id)->get();
          

        return view('gallery.editG_master',compact('G_master'));
    }

public function updateMasterG_master($id,Request $request)
    {
     
        $data =G_master::find($id);
        $data->name = $request->get('name');

      
        $data->save();

         return  redirect('gallery/G_master');


    }



public function deleteG_master($id)
    {
       
        $G_master1 = G_master::find($id);
//$G_master = G_content::where('gallery_id',$G_master1)->delete();
$G_master->delete();
        return redirect('gallery/G_master');
     
 dd($G_master);
        exit();

    }


     public function Gallery1 ($id)
        {
        
        $G_content = DB::table('gallery_content')->where('gallery_id',$id)->get();
        return view('gallery.G_content',compact('G_content'));
        }

//new gallery
   public function newG_content()
   {
    

      return view('gallery.newG_content');

   }   
//G_master store in DB
   public function storeG_content(Request $request  )
    {
        
    $this->validate(request(), [
              
              'image' =>'required',
             // 'gallery_id' => 'required',
              
              
          ]);

if ($request->hasFile('image')) {
        $image1 = $request->file('image');
        $name = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/img/gallery');
        $image1->move($destinationPath, $name);
 }     



        
        $data = new G_content();
      
        $data->gallery_id =$request->get('gallery_id');
     
        $data->image = $name;
         
        $data->save();

         return  redirect('gallery/G_master');
 }



//edit button G_content
 public function masterEditG_content($id)
    {
      
        $G_content = DB::table('gallery_content') ->where('id',$id)->get();
          

        return view('gallery.editG_content',compact('G_content'));
    }

public function updateMasterG_content($id,Request $request)
    {
     
        $data =G_content::find($id);

    if(!empty($request->image))
        {
         $data->image = $request->get('image');
     }

        $data->save();

         return  redirect('gallery/G_master');


    }



public function deleteG_content($id)
    {
       
         $G_content = G_content::find($id);

      
// $G_content = DB::table('G_content as m')->join('G_master as mm','m.gallery_id','=','mm.id')->find($id);
        $G_content->delete();
        return redirect('gallery/G_master');

        // dd($G_content);
        // exit();
                      
    }


//keyperson page
    public function Keyperson ()
      {

      $key_master = DB::table('key_person_master')->get();
      return view('keyperson.keymaster',compact('key_master'));
      }
//edit button key_master
 public function masterEditkey_master($id)
    {
      
        $key_master = DB::table('key_person_master') ->where('id',$id)->get();
          

        return view('keyperson.editkey_master',compact('key_master'));
    }
//update key_master
public function updateMasterkey_master($id,Request $request)
    {
     
        $data =key_master::find($id);
        $data->name = $request->get('name');

        $data->save();
        return  redirect('keyperson/keymaster');

    }

//new key master
   public function newkey_master()
   {
    

      return view('keyperson.newkey_master');

   }   
//key_master store in DB
   public function storekey_master(Request $request)
    {
        
      $this->validate(request(), [
              
              'name' =>'required',
         ]);
 
        $data = new key_master();
        $data->name = $request->get('name');
        $data->save();

        return  redirect('keyperson/keymaster');
 }

 //
public function deletekey_master($id)
    {
       
        $key_master = key_master::find($id);
        $key_master->delete();
        return redirect('keyperson/keymaster');
                      
    }
//key data page
    public function key_data ($id)
      {

      $key_data = DB::table('key_person_data')->where('key_per_id',$id)->get();
      return view('keyperson.key_data',compact('key_data'));
      }
//edit button key_data
 public function masterEditkey_data($id)
    {
      
        $key_data = DB::table('key_person_data') ->where('id',$id)->get();
          

        return view('keyperson.editkey_data',compact('key_data'));
    }
//update key_master
public function updateMasterkey_data($id,Request $request)
    {
     
        $data =key_data::find($id);
       
        if(!empty($request->image))
              {
                $data->image = $request->get('image');
              }
             $data->post = $request->get('post');
             $data->name = $request->get('name');
             $data->save();

        return  redirect('keyperson/keymaster');

    }

//new key master
   public function newkey_data()
   {
    
    return view('keyperson.newkey_data');
   } 

//key_master store in DB
   public function storekey_data(Request $request)
    {
     $this->validate(request(), [
              'image' => 'required',
              'name' =>'required',
              'post' => 'required',
              'key_per_id' => 'required',
              
          ]);
if ($request->hasFile('image')) {
        $image1 = $request->file('image');
        $name1 = time().'.'.$image1->getClientOriginalExtension();
        $destinationPath = public_path('/img/keyperson');
        $image1->move($destinationPath, $name1);
 }        
   


    $data = new key_data();
      
        
        $data->image = $name1;
        $data->name = $request->get('name');
        $data->post = $request->get('post');
        $data->key_per_id = $request->get('key_per_id');
      
        $data->save();

        return  redirect('keyperson/keymaster');
 }

 //delete key data
public function deletekey_data($id)
    {
       
        $key_data = key_data::find($id);
        $key_data->delete();
        return redirect('keyperson/keymaster');
                      
    }    


} //end 
