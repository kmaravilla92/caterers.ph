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

Route::get('test', function() {
	$j = App\Data\Models\CustomerJob::first();
	dd($j->Applications);
});

Route::group([
	'namespace'=>'Frontsite\Guests\Pages',
], function () {
	Route::get('/', 'HomeController')->name('frontsite.guests.home');
	Route::get('/home', 'HomeController')->name('frontsite.guests.home');
	Route::get('/about-us', 'AboutUsController')->name('frontsite.guests.about-us');
	Route::get('/contact-us', 'ContactUsController')->name('frontsite.guests.contact-us');
	Route::get('/how-it-works', 'HowItWorksController')->name('frontsite.guests.how-it-works');
	Route::get('/privacy-policy', 'PrivacyPolicyController')->name('frontsite.guests.privacy-policy');
	Route::get('/terms-and-conditions', 'TermsAndConditionsController')->name('frontsite.guests.terms-and-conditions');

	Route::get('/sign-in', 'SignInController@getForm')->name('frontsite.guests.sign-in');
	Route::post('/sign-in', 'SignInController@postForm')->name('frontsite.guests.sign-in.post');

	Route::get('/sign-up', 'SignUpController@getForm')->name('frontsite.guests.sign-up');
	Route::post('/sign-up', 'SignUpController@postForm')->name('frontsite.guests.sign-up.post');
});
