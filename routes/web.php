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

Route::get('/phpinfo', function () {
  return phpinfo();
});


Route::get('/clear', function () {
  $exitCode = Artisan::call('cache:clear');
  echo '<h1>Cache facade value cleared</h1>';
  $exitCode = Artisan::call('route:clear');
  echo '<h1>Route cache cleared</h1>';
  $exitCode = Artisan::call('view:clear');
  echo '<h1>View cache cleared</h1>';
  $exitCode = Artisan::call('config:cache');
  return '<h1>Clear Config cleared</h1>';
});


// php migrate
Route::get('/migrate', function () {
  $exitCode = Artisan::call('migrate');
  return '<h1>Migration Done!!</h1>';
});

// DB seed to add default data to tables
Route::get('/seed', function () {
  $exitCode = Artisan::call('db:seed');
  return '<h1>DB Seeded Done!!</h1>';
});

//  rollback and re-run all of your migrations:
Route::get('/migrateseed', function () {
  $exitCode = Artisan::call('migrate:refresh --seed');
  return '<h1>migrate:refresh --seed Done!!</h1>';
});

//dashboard and footer routes starts
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');

Route::get('case-studies', [App\Http\Controllers\DashboardController::class, 'case_study'])->name('case_study');

Route::get('view-case-studies', [App\Http\Controllers\DashboardController::class, 'view_case_study'])->name('view_case_study');

Route::get('pricing', [App\Http\Controllers\DashboardController::class, 'pricing'])->name('pricing');

Route::get('contact-us', [App\Http\Controllers\DashboardController::class, 'contact_us'])->name('contact_us');

Route::get('about-us', [App\Http\Controllers\DashboardController::class, 'about_us'])->name('about_us');

Route::get('privacy-policy', [App\Http\Controllers\DashboardController::class, 'privacy_policy'])->name('privacy_policy');

Route::get('terms', [App\Http\Controllers\DashboardController::class, 'terms'])->name('terms');

Route::get('faq', [App\Http\Controllers\DashboardController::class, 'faq'])->name('faq');

Route::get('healthcare', [App\Http\Controllers\DashboardController::class, 'healthcare'])->name('healthcare');

//dashboard and footer routes ends

Auth::routes();

//business routes starts
Route::namespace('App\Http\Controllers\business')->name('business.')->prefix('business')->group(function () {
	Route::get('/login', [App\Http\Controllers\business\LoginController::class, 'login'])->name('login');
	Route::post('/login', [App\Http\Controllers\business\LoginController::class, 'do_login'])->name('do_login');
	Route::get('/signup', [App\Http\Controllers\business\LoginController::class, 'signup'])->name('signup');
	Route::post('/signup', [App\Http\Controllers\business\LoginController::class, 'dosignup'])->name('dosignup');
	Route::get('/forgot-password', [App\Http\Controllers\business\LoginController::class, 'forgot_password'])->name('forgot_password');
	Route::post('/user_forgotpassword', [App\Http\Controllers\business\LoginController::class, 'user_forgotpassword'])->name('user_forgotpassword');
	Route::post('/user_set_password', [App\Http\Controllers\business\LoginController::class, 'user_set_password'])->name('user_set_password');
	Route::get('/user_resetpassword/{token}', [App\Http\Controllers\business\LoginController::class, 'user_resetpassword'])->name('user_resetpassword');
	Route::get('/logout', [App\Http\Controllers\business\LoginController::class, 'logout'])->name('logout');

	//waitlist route starts
	Route::get('/waitlist', [App\Http\Controllers\business\waitlistController::class, 'waitlist'])->name('waitlist')->middleware('auth:user');
	//waitlist route end

	//profile route starts
	Route::get('/profile', [App\Http\Controllers\business\ProfileController::class, 'profile'])->name('profile')->middleware('auth:user');
	Route::post('/update_profile', [App\Http\Controllers\business\ProfileController::class, 'update_profile'])->name('update_profile');
	Route::post('/update_password', [App\Http\Controllers\business\ProfileController::class, 'update_password'])->name('update_password');
	//profile routes ends

	//resources routes starts
	Route::get('/resources', [App\Http\Controllers\business\ResourceController::class, 'resources'])->name('resources')->middleware('auth:user');
	Route::post('/save_resource', [App\Http\Controllers\business\ResourceController::class, 'save_resource'])->name('save_resource');
	Route::get('/get_resourceListing', [App\Http\Controllers\business\ResourceController::class, 'get_resourceListing'])->name('get_resourceListing')->middleware('auth:user');
	Route::post('/delete_resource', [App\Http\Controllers\business\ResourceController::class, 'delete_resource'])->name('delete_resource')->middleware('auth:user');
	Route::post('/getresource', [App\Http\Controllers\business\ResourceController::class, 'getresource'])->name('getresource')->middleware('auth:user');
	Route::post('/update_resources', [App\Http\Controllers\business\ResourceController::class, 'update_resources'])->name('update_resources');
	//resources routes ends

	//services routes starts
	Route::get('/services', [App\Http\Controllers\business\ServiceController::class, 'services'])->name('services')->middleware('auth:user');
	Route::post('/save_service', [App\Http\Controllers\business\ServiceController::class, 'save_service'])->name('save_service')->middleware('auth:user');
	Route::get('/get_serviceListing', [App\Http\Controllers\business\ServiceController::class, 'get_serviceListing'])->name('get_serviceListing')->middleware('auth:user');
	Route::post('/delete_service', [App\Http\Controllers\business\ServiceController::class, 'delete_service'])->name('delete_service')->middleware('auth:user');
	Route::post('/getservices', [App\Http\Controllers\business\ServiceController::class, 'getservices'])->name('getservices')->middleware('auth:user');
	Route::post('/update_services', [App\Http\Controllers\business\ServiceController::class, 'update_services'])->name('update_services');
	//services routes ends

	//customers routes starts
	Route::get('/customers', [App\Http\Controllers\business\CustomerController::class, 'customers'])->name('customers')->middleware('auth:user');
	Route::post('/save_customer', [App\Http\Controllers\business\CustomerController::class, 'save_customer'])->name('save_customer')->middleware('auth:user');
	Route::get('/get_customerListing', [App\Http\Controllers\business\CustomerController::class, 'get_customerListing'])->name('get_customerListing')->middleware('auth:user');
	Route::post('/delete_customer', [App\Http\Controllers\business\CustomerController::class, 'delete_customer'])->name('delete_customer')->middleware('auth:user');
	Route::post('/getcustomer', [App\Http\Controllers\business\CustomerController::class, 'getcustomer'])->name('getcustomer')->middleware('auth:user');
	Route::post('/update_customer', [App\Http\Controllers\business\CustomerController::class, 'update_customer'])->name('update_customer');
	//customers routes ends
	
});
//business routes ends

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
