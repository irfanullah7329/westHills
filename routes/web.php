<?php

use Illuminate\Support\Facades\Route;

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

// Autentication systems route by default
Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'HomeController@AboutUs')->name('about-us');
Route::get('/services', 'HomeController@getServices')->name('services');
Route::get('/videos', 'HomeController@getVideos')->name('videos');
Route::get('/contact', 'HomeController@ContactUs')->name('contact-us');
// Admin Routes start from here
Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth','admin']],
function(){
    // Dashoboard controller for admin
    Route::get('dashboard','DashboardController@index')->name("dashboard");
   

    // Staff Routes
     
     Route::group(['prefix' => 'staff'], function () {    
        // staff list route  
        Route::get('/', 'StaffController@index')->name('staff.list');
        // staff add  route
        Route::get('/create','StaffController@createStaff')->name('staff.create');
        // staff edit route
        Route::get('/edit/{staff}','StaffController@editStaff')->name('staff.edit');
        // Staff update route
        Route::put('/{id}','StaffController@updateStaff')->name('staff.update');
        // staff store route
        Route::post('/','StaffController@storeStaff')->name("staff.store");
        // staff delete route 
        Route::get('/delete/{id}','StaffController@deleteStaff')->name('staff.delete');
        

    });
    // Video Routes
     
    Route::group(['prefix' => 'video'], function () {    
        // staff list route  
        Route::get('/', 'VideoController@index')->name('video.list');
        // staff add  route
        Route::get('/create','VideoController@createVideo')->name('video.create');
        // staff edit route
        Route::get('/edit/{video}','VideoController@editVideo')->name('video.edit');
        // Staff update route
        Route::put('/{id}','VideoController@updateVideo')->name('video.update');
        // staff store route
        Route::post('/','VideoController@storeVideo')->name("video.store");
        // staff delete route 
        Route::get('/delete/{id}','VideoController@deleteVideo')->name('video.delete');
        
    });
     // Slider Routes
     
     Route::group(['prefix' => 'slider'], function () {    
        // staff list route  
        Route::get('/', 'SliderController@index')->name('slider.list');
        // staff add  route
        Route::get('/create','SliderController@createSlider')->name('slider.create');
        // staff edit route
        Route::get('/edit/{slider}','SliderController@editSlider')->name('slider.edit');
        // Staff update route
        Route::put('/{id}','SliderController@updateSlider')->name('slider.update');
        // staff store route
        Route::post('/','SliderController@storeSlider')->name("slider.store");
        // staff delete route 
        Route::get('/delete/{id}','SliderController@deleteSlider')->name('slider.delete');
        

    });

 // testimonial Routes
     
 Route::group(['prefix' => 'testimonial'], function () {    
    // testimonial list route  
    Route::get('/', 'TestimonialController@index')->name('testimonial.list');
    //testimonial add  route
    Route::get('/create','TestimonialController@createTestimonial')->name('testimonial.create');
    //testimonial edit route
    Route::get('/edit/{testimonail}','TestimonialController@editTestimonial')->name('testimonial.edit');
    // testimonial update route
    Route::put('/{id}','TestimonialController@updateTestimonial')->name('testimonial.update');
    // testimonial store route
    Route::post('/','TestimonialController@storeTestimonial')->name("testimonial.store");
    // testimonial delete route 
    Route::get('/delete/{id}','TestimonialController@deleteTestimonial')->name('testimonial.delete');
    

});

   
    // Slider Routes
     
    Route::group(['prefix' => 'team'], function () {    
        // team list route  
        Route::get('/', 'TeamController@index')->name('team.list');
        // team add  route
        Route::get('/create','TeamController@createTeam')->name('team.create');
        // team edit route
        Route::get('/edit/{team}','TeamController@editTeam')->name('team.edit');
        // team update route
        Route::put('/{id}','TeamController@updateTeam')->name('team.update');
        // team store route
        Route::post('/','TeamController@storeTeam')->name("team.store");
        // team delete route 
        Route::get('/delete/{id}','TeamController@deleteTeam')->name('team.delete');
        

    });
//Service Routes
     
Route::group(['prefix' => 'service'], function () {    
    // Vision list route  
    Route::get('/', 'ServiceController@index')->name('service.list');
    // Vision add  route
    Route::get('/create','ServiceController@createService')->name('service.create');
    // Vision route
    Route::get('/edit/{vision}','ServiceController@editService')->name('service.edit');
    // Vision update route
    Route::put('/{id}','ServiceController@updateService')->name('service.update');
    // Vision store route
    Route::post('/','ServiceController@storeService')->name("service.store");
    // Vision delete route 
    Route::get('/delete/{id}','ServiceController@deleteService')->name('service.delete');
    

});


// About Routes
     
Route::group(['prefix' => 'about'], function () {    
    //About list route  
    Route::get('/', 'AboutController@index')->name('about.list');
    // About add  route
    Route::get('/create','AboutController@createAbout')->name('about.create');
    // About edit route
    Route::get('/edit/{about}','AboutController@editAbout')->name('about.edit');
    // About update route
    Route::put('/{id}','AboutController@updateAbout')->name('about.update');
    // About store route
    Route::post('/','AboutController@storeAbout')->name("about.store");
    // About delete route 
    Route::get('/delete/{id}','AboutController@deleteAbout')->name('about.delete');
    

});


 // Category Routes
     
 Route::group(['prefix' => 'category'], function () {    
    // team list route  
    Route::get('/', 'CategoryController@index')->name('category.list');
    // team add  route
    Route::get('/create','CategoryController@createCategory')->name('category.create');
    // team edit route
    Route::get('/edit/{category}','CategoryController@editCategory')->name('category.edit');
    // team update route
    Route::put('/{id}','CategoryController@updateCategory')->name('category.update');
    // team store route
    Route::post('/','CategoryController@storeCategory')->name("category.store");
    // team delete route 
    Route::get('/delete/{id}','CategoryController@deleteCategory')->name('category.delete');
    

});

  // Portfolio Routes
     
  Route::group(['prefix' => 'portfolio'], function () {    
    // team list route  
    Route::get('/', 'PortfolioController@index')->name('portfolio.list');
    // team add  route
    Route::get('/create','PortfolioController@createPortfolio')->name('portfolio.create');
    // team edit route
    Route::get('/edit/{portfolio}','PortfolioController@editPortfolio')->name('portfolio.edit');
    // team update route
    Route::put('/{id}','PortfolioController@updatePortfolio')->name('portfolio.update');
    // team store route
    Route::post('/','PortfolioController@storePortfolio')->name("portfolio.store");
    // team delete route 
    Route::get('/delete/{id}','PortfolioController@deletePortfolio')->name('portfolio.delete');
    

});


    // Users Routes
    Route::group(['prefix' => 'users'], function () {    
        // User list route  
        Route::get('/', 'UserController@index')->name('users.list');
        // user add  route
        Route::get('/create','UserController@createUser')->name('users.create');
        // user edit route
        Route::get('/edit/{user}','UserController@editUser')->name('users.edit');
        // user update route
        Route::put('/{id}','UserController@updateUser')->name('users.update');
        // user store route
        Route::post('/','UserController@storeUser')->name("users.store");
        // user delete route 
        Route::get('/delete/{id}','UserController@deleteUser')->name('users.delete');
        // recording List
        // Assign Churches to Specific User
        Route::post('/assign-users','UserController@assginChurchesToUser')->name('users.asign.churches');
       

    }); // Admin User Routes End
   
    // Admin Churches Routes
    Route::group(['prefix' => 'churches'],function (){

        Route::get('/','ChurchController@index')->name('churches.list');
        // Route for church create form
        Route::get('/create','ChurchController@addChurch')->name('churches.create');
        // store church info
        Route::post('/','ChurchController@storeChurch')->name('churches.store');
        //Route for getting church edit form
        Route::get('/edit/{church}','ChurchController@editChurch')->name('churches.edit');
        //Route for church Update
        Route::put('/{id}','ChurchController@updateChurch')->name('churches.update');
        //Route for Deleting Church
        Route::get('/delete/{id}','ChurchController@deleteChurch')->name('churches.delete');

    }); // Admin Churches Routes End


   // Axios Routes 
   Route::post('/add-camera','ChurchController@axiosAddCamera')->name('axios.add.camera');
   Route::get('/getservers','ChurchController@axiosGetServers')->name('axios.get.servers');
   Route::get('/getcameras-of-the-church/{churchId}','ChurchController@axiosGetCamerasOfTheChurch')->name('axios.get.cameras');
   Route::post('/delete-camera/{cameraId}','ChurchController@axiosDeleteCameraOfTheChurch')->name('axios.delte.camera');
   Route::post('/update-church-camera/{cameraId}','ChurchController@axiosUpdateCameraOfTheChurch')->name('axios.update.camera');
   // Ajax Jquery picture routes
   Route::get("/get-tab-pictures/{churchId}",'ChurchController@getAllTabPicturesImages')->name('get.church.pictures');
   Route::post("/add-tab-picture",'ChurchController@addChurchTabPicture')->name('add.church.picture');
   Route::post("/update-tab-picture",'ChurchController@updateChurchTabPicture')->name('update.church.picture');
   Route::get('/delete-tab-picture/{churchMediaId}','ChurchController@deleteChurchTabPicture')->name('delete.church.picture');
   // Ajax Jquery church slideshow routes
   Route::get("/get-tab-slideshow/{churchId}",'ChurchController@getAllTabSlideShowImages')->name('get.church.slideshow');
   Route::post("/add-tab-slideshow",'ChurchController@addChurchTabSlideShow')->name('add.church.slideshow');
   Route::post("/update-tab-slideshow",'ChurchController@updateChurchTabSlideShow')->name('update.church.slideshow');
   Route::get('/delete-tab-slideshow/{churchMediaId}','ChurchController@deleteChurchTabSlideShow')->name('delete.church.slideshow');
   // Ajax Jquery church video routes
   Route::get("/get-tab-video/{churchId}",'ChurchController@getAllTabVideoFiles')->name('get.church.videos');
   Route::post("/add-tab-video",'ChurchController@addChurchTabVideo')->name('add.church.video');
   Route::post("/update-tab-video",'ChurchController@updateChurchTabVideo')->name('update.church.video');
   Route::get('/delete-tab-video/{churchMediaId}','ChurchController@deleteChurchTabVideo')->name('delete.church.video');
   // Ajax Jquery church Setup information routes
   Route::get("/get-tab-setup/{churchId}",'ChurchController@getAllTabSetups')->name('get.church.setups');
   Route::post("/add-tab-setup",'ChurchController@addChurchTabSetup')->name('add.church.setup');
   Route::post("/update-tab-setup",'ChurchController@updateChurchTabSetup')->name('update.church.setup');
   Route::get('/delete-tab-setup/{churchSetupId}','ChurchController@deleteChurchTabSetup')->name('delete.church.setup');
   // Ajax Jquery church Notice information routes
   Route::get("/get-tab-notice/{churchId}",'ChurchController@getAllTabNotices')->name('get.church.notices');
   Route::post("/add-tab-notice",'ChurchController@addChurchTabNotice')->name('add.church.notice');
   Route::post("/update-tab-notice",'ChurchController@updateChurchTabNotice')->name('update.church.notice');
   Route::get('/delete-tab-notice/{churchNoticeId}','ChurchController@deleteChurchTabNotice')->name('delete.church.notice');
   // Ajax Jquery church Announcememnt information routes
   Route::get("/get-tab-announcement/{churchId}",'ChurchController@getAllTabAnnouncements')->name('get.church.announcements');
   Route::post("/add-tab-announcement",'ChurchController@addChurchTabAnnouncement')->name('add.church.announcement');
   Route::post("/update-tab-announcement",'ChurchController@updateChurchTabAnnouncement')->name('update.church.announcement');
   Route::get('/delete-tab-announcement/{churchAnnouncementId}','ChurchController@deleteChurchTabAnnouncement')->name('delete.church.announcement');
   

}); // End All Addmin Routes

// Client Authentication system
Route::group(['as'=>'client.', 'prefix'=>"client",'namespace'=>'Client', 'middleware' => ['auth','client']],
function() {
    Route::get('dashboard','DashboardController@index')->name('dashboard');  

});