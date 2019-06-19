<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', 'IndexController@index');
//user login
Route::post('ajax/user/login', 'IndexController@ajaxUserLogin');
Route::post('ajax/user/register-user', 'IndexController@ajaxUserRegister');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{id}/jobs', 'CategoryController@getCategoryJobs');
////////get Quote step routes////////
Route::post('/get-quote-form', 'QuoteController@getQuoteForm');
Route::post('/get-subcategories', 'QuoteController@getSubCategories');
Route::post('/submit-quote-form-1', 'QuoteController@submitQuoteForm1');
Route::post('/upload/quote-image', 'QuoteController@uploadQuoteImage');

//1. sub-category
Route::get('/quote/{category_id}/step-1', 'QuoteController@getQuoteStep1');
Route::post('/quote/{category_id}/step-1', 'QuoteController@storeQuoteStep1');
//2. if sub category has options
Route::get('/quote/{category_id}/step-2/{job_id}', 'QuoteController@getQuoteStep2');
Route::post('/quote/{category_id}/step-2/{job_id}', 'QuoteController@storeQuoteStep2');
//3. work details
Route::get('/quote/{category_id}/step-3/{job_id}', 'QuoteController@getQuoteStep3');
Route::post('/quote/{category_id}/step-3/{job_id}', 'QuoteController@storeQuoteStep3');
//3. job location, login/register & submit
Route::get('/quote/{category_id}/step-4/{job_id}', 'QuoteController@getQuoteStep4');
Route::post('/quote/{category_id}/step-4/{job_id}', 'QuoteController@storeQuoteStep4');
//4. complete
Route::get('/quote/{category_id}/step-5/{job_id}', 'QuoteController@getQuoteStep5');
////////get Quote step routes////////



/* Start All Axios Routes */

Route::group(['middleware' => []], function(){
	Route::post('get-respective-states', 'AxiosController@getRespectiveStates');
	Route::post('get-respective-cities', 'AxiosController@getRespectiveCities');
});

/* Start All Axios Routes */




Auth::routes();

Route::group(['middleware' => ['auth']], function(){
	//dashboard
	Route::get('/home', 'UserhomeController@index');
	//profile & password
	Route::get('/home/update-profile','UserhomeController@updateProfile');
	Route::post('/home/update-profile-photo','UserhomeController@userProfileUpdate');
	Route::post('/home/save-update-profile','UserhomeController@saveUpdateProfile');
	Route::get('/home/update-password','UserhomeController@updatePassword');
	Route::post('/home/save-update-password','UserhomeController@updateSavePassword');
	//Job Routes
	Route::get('/home/job/history', 'JobuserController@index');
	Route::get('/home/job/{id}/details', 'JobuserController@jobDetails');
	Route::get('/home/job/{id}/quotes', 'JobuserController@jobQuotes');
});

/*
|--------------------------------------------------------------------------
| Servicer Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('servicer/login', 'ServicerAuth\LoginController@showLoginForm');
Route::post('servicer/login', 'ServicerAuth\LoginController@login');
Route::post('servicer/logout', 'ServicerAuth\LoginController@logout');
Route::post('servicer/password/email', 'ServicerAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('servicer/password/reset', 'ServicerAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('servicer/password/reset', 'ServicerAuth\ResetPasswordController@reset');
Route::get('servicer/password/reset/{token}', 'ServicerAuth\ResetPasswordController@showResetForm');
Route::get('servicer/register', 'ServicerAuth\RegisterController@showRegistrationForm');
Route::post('servicer/register', 'ServicerAuth\RegisterController@register');


Route::group(['middleware' => ['auth.servicer']], function(){
	//dashboard
	Route::get('/servicer/home', 'ServicerhomeController@index');
	//profile & password
	Route::get('/servicer/home/update-profile','ServicerhomeController@updateProfile');
	Route::post('/servicer/home/save-update-profile','ServicerhomeController@saveUpdateProfile');
	Route::post('servicer/home/update-profile-photo','ServicerhomeController@servicerProfileUpdate');
	Route::get('/servicer/home/update-password','ServicerhomeController@updatePassword');
	Route::post('/servicer/home/save-update-password','ServicerhomeController@updateSavePassword');
	//Job Routes
	Route::get('/servicer/home/jobs', 'JobservicerController@jobList');
	Route::get('/servicer/home/{id}/job-details', 'JobservicerController@jobDetails');
	Route::get('/servicer/home/{id}/quotes-details', 'JobservicerController@quoteDetails');
});


