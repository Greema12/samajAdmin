<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//dashbord-home page
// Route::get('/', 'NewController@index');


Auth::routes(['verify'=> true]);

Route::get('/', function () {
    return view('auth.login');
});



 Route::get('/home', 'NewController@index')->name('home');

// Route::get('/register' ,'NewController@register' )->name('register');
 
// Route::post('/reset' ,'NewController@reset')->name('reset');

// Route::post('/email' , 'NewController@email')->name('email');

//kutumb page
Route::get('/Kutumb/kutumb/{id}','NewController1@kutumb');
Route::get('/Kutumb/KutumbEdit/{id}', 'NewController1@EditKutumb');
Route::post('/Kutumb/store', 'NewController1@storeKutumb');
Route::get('/Kutumb/delete/{id}', 'NewController1@deleteKutumb');
Route::get('/Kutumb/addNewKutumb/{id}' ,'NewController1@newKutumb');

//pal
Route::get('/Pal/pal','NewController1@Pal');
Route::get('/Pal/delete/{id}', 'NewController1@deletePal');
Route::get('/Pal/addNewPal' ,'NewController1@newPal');
Route::post('/Pal/store' ,'NewController1@storePal');
Route::get('/Pal/palEdit/{id}', 'NewController1@EditPal');


//About-us page
Route::get('/aboutus/About-us', 'NewController@AboutUs');
Route::get('/aboutus/About-usEdit/{id}', 'NewController@masterEditAboutUs');
Route::post('/aboutus/masterUpdate/{id}', 'NewController@updateMasterAboutUs');

//slider page
Route::get('/Page/slider','NewController@slider')->middleware('auth');
Route::get('/Page/addNewSlider' ,'NewController@newslider');
Route::post('/Page/store', 'NewController@storeSlider');
Route::get('/Page/sliderEdit/{id}', 'NewController@masterEditSlider');
Route::post('/Page/masterUpdate/{id}', 'NewController@updateMasterSlider');
Route::get('/Page/delete/{id}', 'NewController@deleteSlider');
Route::get('/Page/Contact-us', 'NewController@ContactUs');
Route::get('/Page/masterUpdate/{id}','NewController@updateMasterContact');


//samaj page
Route::get('/samaj/samaj','NewController@samaj');
Route::get('/samaj/samajEdit/{id}','NewController@masterEditSamaj');
Route::get('/samaj/masterUpdate/{id}','NewController@updateMasterSamaj');
Route::get('/samaj/delete/{id}', 'NewController@deleteSamaj');
Route::get('/samaj/addNewsamaj' ,'NewController@newsamaj');
Route::post('/samaj/store', 'NewController@storesamaj');



//kelvani page
Route::get('/kelvani/kelvani','NewController@Kelvani');
Route::get('/kelvani/addNewKelvani' ,'NewController@newKelvani');
Route::post('/kelvani/store', 'NewController@storeKelvani');
Route::get('/kelvani/kelvaniEdit/{id}','NewController@masterEditKelvani');
Route::post('/kelvani/masterUpdate/{id}','NewController@updateMasterKelvani');
Route::get('/kelvani/delete/{id}', 'NewController@deleteKelvani');


//upcoming page
Route::get('/upcoming/upcoming','NewController@Upcoming');
Route::get('/upcoming/upcomingEdit/{id}','NewController@masterEditUpcoming');
Route::post('/upcoming/masterUpdate/{id}','NewController@updateMasterUpcoming');
Route::get('/upcoming/addNewUpcoming' ,'NewController@newUpcoming');
Route::post('/upcoming/store', 'NewController@storeUpcoming');
Route::get('/upcoming/upcoming/masterUpdate',array('as'=>'/upcoming/upcoming/masterUpdate',
   			'uses'=>'NewController@updateMaster1'));
Route::get('/upcoming/delete/{id}', 'NewController@deleteUpcoming');



//G_master page
Route::get('/gallery/G_master', 'NewController@Gallery');
Route::get('/gallery/addNewG_master' ,'NewController@newG_master');
Route::post('/gallery/store', 'NewController@storeG_master');
Route::get('/gallery/G_masterEdit/{id}','NewController@masterEditG_master');
Route::get('/gallery/masterUpdate/{id}','NewController@updateMasterG_master');
Route::get('/gallery/delete/{id}', 'NewController@deleteG_master');



//G_content page
Route::get('/gallery/G_content/{id}', 'NewController@Gallery1');
Route::get('/gallery/addNewG_content/{id}' ,'NewController@newG_content');
Route::post('/gallery/store1', 'NewController@storeG_content');
Route::get('/gallery/G_contentEdit/{id}','NewController@masterEditG_content');
Route::post('/gallery/masterUpdate1/{id}','NewController@updateMasterG_content');
Route::get('/gallery/delete1/{id}', 'NewController@deleteG_content');

//key_master page
Route::get('/keyperson/keymaster', 'NewController@Keyperson');
Route::get('/keyperson/addNewkey_master' ,'NewController@newkey_master');
Route::post('/keyperson/store', 'NewController@storekey_master');
Route::get('/keyperson/key_masterEdit/{id}','NewController@masterEditkey_master');
Route::post('/keyperson/masterUpdate/{id}','NewController@updateMasterkey_master');
Route::get('/keyperson/delete/{id}', 'NewController@deletekey_master');


//key_content page
Route::get('/keyperson/key_data/view/{id}', 'NewController@key_data');
Route::get('/keyperson/addNewkey_data/{id}' ,'NewController@newkey_data');
Route::post('/keyperson/store1', 'NewController@storekey_data');
Route::get('/keyperson/key_dataEdit/{id}','NewController@masterEditkey_data');
Route::post('/keyperson/masterUpdate1/{id}','NewController@updateMasterkey_data');
Route::get('/keyperson/delete1/{id}', 'NewController@deletekey_data');


//advertise page
Route::get('/advertise/advertise','NewController1@advertise');
Route::get('/advertise/advertiseEdit/{id}','NewController1@masterEditAdvertise');
Route::post('/advertise/masterUpdate/{id}','NewController1@updateMasterAdvertise');
Route::get('/advertise/advertise/Update',array('as'=>'/advertise/advertise/Update',
           'uses'=>'NewController1@updateMaster1'));
Route::get('/advertise/delete/{id}', 'NewController1@deleteAdvertise');
Route::get('/advertise/addNewAdvertise' ,'NewController1@newAdvertise');
Route::post('/advertise/store', 'NewController1@storeAdvertise');


//counter page
Route::get('/Counter/counter' ,'NewController1@counter');
Route::get('/Counter/masterUpdate/{id}', 'NewController1@updateMasterCounter');


//header & footer logo page
Route::get('/Logo/head' ,'NewController1@head');
Route::get('/Logo/headEdit/{id}','NewController1@masterEditHead');
Route::post('/Logo/masterUpdate/{id}', 'NewController1@updateMasterHead');
Route::get('/Logo/footer' ,'NewController1@footer');
Route::get('/Logo/footerEdit/{id}','NewController1@masterEditFooter');
Route::post('/Logo/masterUpdate1/{id}', 'NewController1@updateMasterFooter');


//member page(samaj Team member)
Route::get('/member/member','NewController1@member');
Route::get('/member/memberEdit/{id}','NewController1@masterEditmember');
Route::get('/member/masterUpdate/{id}','NewController1@updateMastermember');
Route::get('/member/member/masterUpdate',array('as'=>'/member/member/masterUpdate',
    		'uses'=>'NewController1@updateMaster2'));
Route::get('/member/delete/{id}', 'NewController1@deletemember');
Route::get('/member/addNewMember' ,'NewController1@newMember');
Route::post('/member/store', 'NewController1@storeMember');


// marksheet
Route::get('/marksheet/marksheet','NewController@Marksheet');
Route::get('/marksheet/addNewMarksheet' ,'NewController@newMarksheet');
Route::post('/marksheet/store', 'NewController@storeMarksheet');
Route::get('/marksheet/marksheetEdit/{id}', 'NewController@masterEditMarksheet');
Route::post('/marksheet/masterUpdate/{id}', 'NewController@updateMasterMarksheet');
Route::get('/marksheet/delete/{id}', 'NewController@deleteMarksheet');


//cv page
Route::get('/CV/cv','NewController1@CV');
Route::get('/CV/delete/{id}', 'NewController1@deletecv');

//member_master Submember page
Route::get('/member_master/submember1','NewController1@Submember_master');
Route::get('/member_master/submember1Edit/{id}','NewController1@editSubMember1');
Route::post('/member_master/SubmemberUpdate/{id}', 'NewController1@updateSubMemberMaster');
 
 //member_master Member Page
Route::get('/member_master/member1','NewController1@member_master');
Route::get('/member_master/member1Edit/{id}','NewController1@editMember1');
Route::post('/member_master/masterUpdate/{id}', 'NewController1@updateMemberMaster');

Route::get('/member_master/member1/masterUpdate',array('as'=>'/member_master/member1/masterUpdate',
     'uses'=>'NewController1@updateMasterMember1'));
Route::get('/member_master/delete/{id}', 'NewController1@deletemember1');

Route::get('/member_master/viewmember/{id}', 'NewController1@viewMember1');
Route::get('/member_master/viewsubmember/{id}', 'NewController1@viewSubMember');
Route::get('/member_master/viewfamilymember/{id}', 'NewController1@viewfamilyMember');



//add new main member page
Route::get('/member_master/addmember','NewController1@addMember');
Route::post('/member_master/store1','NewController1@storeMainMember');

//get city
Route::get('member_master/addmembercity/{id}',array('as'=>'member_master.addmember','uses'=>'NewController1@myformAjax'));
//get state
Route::get('member_master/addmemberstate/{id}',array('as'=>'member_master.addmemberstate','uses'=>'NewController1@myformAjaxstate'));

Route::get('member_master/addmemberWorkcity/{id}',array('as'=>'member_master.addmemberWorkcity','uses'=>'NewController1@myformWorkcity'));
Route::get('member_master/addmemberWorkstate/{id}',array('as'=>'member_master.addmemberstateWorkstate','uses'=>'NewController1@myformWorkstate'));

//kutumb
Route::get('member_master/getkutumb1/{id}',array('as'=>'member_master.addmember','uses'=>'NewController1@myformKutumb'));

Route::get('/member_master/family/{id}', 'NewController1@family');
