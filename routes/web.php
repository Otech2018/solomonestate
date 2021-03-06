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

 

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('homepage');
Route::get('/listing', [App\Http\Controllers\PageController::class, 'listing'])->name('listing');
Route::get('/listing_r', [App\Http\Controllers\PageController::class, 'listing_r'])->name('listing_r');
Route::get('/Searchlisting', [App\Http\Controllers\PageController::class, 'Searchlisting'])->name('Searchlisting');
Route::get('/listing_details/{id}', [App\Http\Controllers\PageController::class, 'listing_details'])->name('listing_details');
Route::get('/payment/{id}', [App\Http\Controllers\PageController::class, 'payment_details'])->name('payment');
Route::get('/contact_us', [App\Http\Controllers\PageController::class, 'contact_us'])->name('contact_us');
Route::get('/our_team', [App\Http\Controllers\PageController::class, 'our_team'])->name('our_team');
Route::get('/agric_consult', [App\Http\Controllers\PageController::class, 'agric_consult'])->name('agric_consult');
Route::post('/agric_consult_submit', [App\Http\Controllers\PageController::class, 'agric_consult_submit'])->name('agric_consult_submit');
Route::get('/build_u', [App\Http\Controllers\PageController::class, 'build_u'])->name('build_u');
Route::get('/sale_rent_property', [App\Http\Controllers\PageController::class, 'sale_rent_property'])->name('sale_rent_property');
Route::get('/pay_rent', [App\Http\Controllers\PageController::class, 'pay_rent'])->name('pay_rent');
Route::get('/save_build', [App\Http\Controllers\PageController::class, 'save_build'])->name('save_build');
Route::get('/sale_rent_land', [App\Http\Controllers\PageController::class, 'sale_rent_land'])->name('sale_rent_land');
Route::get('/gallery', [App\Http\Controllers\PageController::class, 'gallery'])->name('gallery');
Route::get('/project', [App\Http\Controllers\PageController::class, 'project'])->name('project');
Route::get('/air_space', [App\Http\Controllers\PageController::class, 'air_space'])->name('air_space');
Route::get('/tos', [App\Http\Controllers\PageController::class, 'tos'])->name('tos');
Route::resource('form', App\Http\Controllers\UserFormController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'index'])->name('book_agent');

Route::resource('myprofile1', App\Http\Controllers\MyProfileController::class);
Route::resource('savingform', App\Http\Controllers\SavingsFormController::class);
	
Route::post('change_password/{id}', [App\Http\Controllers\MyProfileController::class,'change_password'])->name('change_password2');
	Route::get('change_password1', [App\Http\Controllers\MyProfileController::class,'change_password1'])->name('change_password11');
	Route::get('mysaving_payments', [App\Http\Controllers\MysavingsController::class,'mysaving_payments'])->name('mysaving_payments');
	Route::get('myrent_payments', [App\Http\Controllers\MyRentsController::class,'myrent_payments'])->name('myrent_payments');
	Route::resource('mysavings', App\Http\Controllers\MysavingsController::class);
	Route::resource('myrents', App\Http\Controllers\MyRentsController::class);
	Route::resource('myshop', App\Http\Controllers\MyShopController::class);
	


//Admin Routes {wisdom don't touch}
Route::prefix('sax')->group(function(){
	// Route::get('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'index'])->name('admin.index');
	// Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login');
	Route::get('/adashboard', [App\Http\Controllers\Backend\AdminController::class, 'index'])->name('admin.dashboard');
	Route::resource('menu', App\Http\Controllers\Backend\MenuController::class);
	Route::resource('task', App\Http\Controllers\Backend\TaskController::class);
	Route::resource('user_group', App\Http\Controllers\Backend\User_groupController::class);
	Route::resource('gigs', App\Http\Controllers\Backend\gigsController::class);
	Route::resource('agric', App\Http\Controllers\Backend\AgricController::class);
	Route::resource('sub_gigs', App\Http\Controllers\Backend\SubCatController::class);
	Route::resource('train', App\Http\Controllers\Backend\TrainingController::class);
	Route::resource('accessment', App\Http\Controllers\Backend\AccessmentController::class);
	Route::resource('lesson', App\Http\Controllers\Backend\LessonsController::class);
	Route::resource('myprofile', App\Http\Controllers\Backend\MyProfileController::class);
	Route::resource('admin_users', App\Http\Controllers\Backend\AdminUserController::class);
	Route::resource('admin_edit_users', App\Http\Controllers\Backend\AdminUserEditController::class);
	Route::resource('admin_admin', App\Http\Controllers\Backend\AdminAdminController::class);
	Route::resource('gallery', App\Http\Controllers\Backend\galleriesController::class);
	Route::resource('buildyou', App\Http\Controllers\Backend\BuildYouController::class);
	Route::resource('autosave', App\Http\Controllers\Backend\AutoSavingController::class);
	Route::resource('rent', App\Http\Controllers\Backend\RentController::class);
	Route::resource('landsale', App\Http\Controllers\Backend\LandSaleController::class);
	Route::resource('airspace', App\Http\Controllers\Backend\AirSpaceController::class);
	Route::resource('salehouse', App\Http\Controllers\Backend\HouseSaleController::class); 
	Route::resource('UserAsessment', App\Http\Controllers\Backend\UserAsessmentController::class);
	Route::post('change_password/{id}', [App\Http\Controllers\Backend\MyProfileController::class,'change_password'])->name('change_password');
	Route::get('change_password1', [App\Http\Controllers\Backend\MyProfileController::class,'change_password1'])->name('change_password1');
	Route::get('lesson_index1/{id}', [App\Http\Controllers\Backend\LessonsController::class,'lesson_index1'])->name('lesson_index1');
	Route::get('lesson_content/{id}', [App\Http\Controllers\Backend\LessonsController::class,'lesson_content'])->name('lesson_content');
	Route::post('lesson_delete/{id}', [App\Http\Controllers\Backend\LessonsController::class,'lesson_delete'])->name('lesson_delete');
	Route::get('/lesson_img', [App\Http\Controllers\Backend\LessonsController::class,'lesson_img'])->name('lesson_img');
	Route::post('/lesson_img_store', [App\Http\Controllers\Backend\LessonsController::class,'lesson_img_store'])->name('lesson_img_store');
	Route::post('/admin_users', [App\Http\Controllers\Backend\AdminUserController::class,'search'])->name('admin_users.search');
	Route::get('/addAdiminToUserGrp', [App\Http\Controllers\Backend\User_groupController::class, 'addAdiminToUserGrp'])->name('user_group.addAdiminToUserGrp');
	Route::put('/updateAddAdiminToUserGrp/{id}', [App\Http\Controllers\Backend\User_groupController::class, 'updateAddAdiminToUserGrp'])->name('updateAddAdiminToUserGrp');
	Route::get('/addAdiminToUserGrp/{id}', [App\Http\Controllers\Backend\User_groupController::class, 'addAdiminToUserGrp1'])->name('user_group.addAdiminToUserGrp1');
	Route::get('/sub_gig/{id}', [App\Http\Controllers\Backend\SubCatController::class, 'subgigs'])->name('sub_gigs.subgigs');
	Route::put('/sub_gig/{id}', [App\Http\Controllers\Backend\SubCatController::class, 'fea'])->name('fea.subgigs');
	Route::get('/setTask/{id}', [App\Http\Controllers\Backend\User_groupController::class, 'setTask'])->name('user_group.setTask');
});
//Admin Routes ends here {wisdom don't touch}
 






//mobile app routes
Route::prefix('mob')->group(function(){
	Route::get('/home', [App\Http\Controllers\mob\MPageController::class, 'index'])->name('mhomepage');
// Route::get('/listing', [App\Http\Controllers\PageController::class, 'listing'])->name('listing');
// Route::get('/listing_r', [App\Http\Controllers\PageController::class, 'listing_r'])->name('listing_r');
// Route::get('/Searchlisting', [App\Http\Controllers\PageController::class, 'Searchlisting'])->name('Searchlisting');
// Route::get('/listing_details/{id}', [App\Http\Controllers\PageController::class, 'listing_details'])->name('listing_details');
// Route::get('/payment/{id}', [App\Http\Controllers\PageController::class, 'payment_details'])->name('payment');
// Route::get('/contact_us', [App\Http\Controllers\PageController::class, 'contact_us'])->name('contact_us');
// Route::get('/our_team', [App\Http\Controllers\PageController::class, 'our_team'])->name('our_team');
// Route::get('/agric_consult', [App\Http\Controllers\PageController::class, 'agric_consult'])->name('agric_consult');
// Route::post('/agric_consult_submit', [App\Http\Controllers\PageController::class, 'agric_consult_submit'])->name('agric_consult_submit');
// Route::get('/build_u', [App\Http\Controllers\PageController::class, 'build_u'])->name('build_u');
// Route::get('/sale_rent_property', [App\Http\Controllers\PageController::class, 'sale_rent_property'])->name('sale_rent_property');
// Route::get('/pay_rent', [App\Http\Controllers\PageController::class, 'pay_rent'])->name('pay_rent');
// Route::get('/save_build', [App\Http\Controllers\PageController::class, 'save_build'])->name('save_build');
// Route::get('/sale_rent_land', [App\Http\Controllers\PageController::class, 'sale_rent_land'])->name('sale_rent_land');
// Route::get('/gallery', [App\Http\Controllers\PageController::class, 'gallery'])->name('gallery');
// Route::get('/project', [App\Http\Controllers\PageController::class, 'project'])->name('project');
// Route::get('/tos', [App\Http\Controllers\PageController::class, 'tos'])->name('tos');
// Route::resource('form', App\Http\Controllers\UserFormController::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'index'])->name('book_agent');

// Route::resource('myprofile1', App\Http\Controllers\MyProfileController::class);
// Route::resource('savingform', App\Http\Controllers\SavingsFormController::class);
	
// Route::post('change_password/{id}', [App\Http\Controllers\MyProfileController::class,'change_password'])->name('change_password2');
// 	Route::get('change_password1', [App\Http\Controllers\MyProfileController::class,'change_password1'])->name('change_password11');
// 	Route::get('mysaving_payments', [App\Http\Controllers\MysavingsController::class,'mysaving_payments'])->name('mysaving_payments');
// 	Route::get('myrent_payments', [App\Http\Controllers\MyRentsController::class,'myrent_payments'])->name('myrent_payments');
// 	Route::resource('mysavings', App\Http\Controllers\MysavingsController::class);
// 	Route::resource('myrents', App\Http\Controllers\MyRentsController::class);
	
});
//mobile app routes