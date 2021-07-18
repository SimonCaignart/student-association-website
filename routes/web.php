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

use App\Http\Controllers\Manifestations\CommentsController;
use App\Http\Controllers\PagesController;
use Symfony\Component\HttpKernel\HttpCache\Store;

Route::get('/', 'PagesController@Acceuil');
Route::get('/boutique', 'PagesController@Boutique');
Route::get('/contact', [
    'uses'=>'PagesController@Contact',
    'as' => 'contact',
    'middleware' => 'roles',
    'roles' => ['Etudiant']
]);
Route::get('/evenements', 'PagesController@Evenements');
Route::get('/mentions', 'PagesController@Mentions');
Route::get('/confidentialité', 'PagesController@Confidentialité');
Route::get('/dashboard', 'DashboardController@index');

<<<<<<< HEAD
Route::resource('products', 'ProductsController');
Route::resource('comments', 'CommentsController');
=======

Route::resource('products', 'ProductsController');
>>>>>>> DevSacha
Route::resource('administrations', 'AdministrationsController');
Route::resource('manifestations', 'ManifestationsController');
Route::resource('comments', 'CommentsController');
Route::resource('participates', 'ParticipatesController');


Route::get('/add-to-cart/{id}', [
        'uses' => 'ProductsController@getAddToCart',
        'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
        'uses' => 'ProductsController@getCart',
        'as' => 'product.getCart'
]);

Route::post('/postcheckout', [
        'uses' => 'ProductsController@postCheckout',
        'as' => 'checkout'
]);

Route::get('/checkout', [
        'uses' => 'ProductsController@deleteProduct',
        'as' => 'product.deleteProduct'
]);

Route::get('/sendMail', [
        'uses' => 'MailsController@sendemail',
        'as' => 'Mails.sendemail'
]);

Route::post('/alertemail', [
        'uses' => 'MailsController@alertemail',
        'as' => 'Mails.alertemail'
]);

<<<<<<< HEAD
=======
Route::get('export', 'ParticipatesController@export')->name('export');
Route::get('importExportView', 'ParticpatesController@importExportView');

>>>>>>> DevSacha
Auth::routes();
