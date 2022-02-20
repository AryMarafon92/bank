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

//Route::get('/', function () {
//    return view('site.em-breve');
//});


Route::get('/', 'Site\HomeController@site');
Route::get('/central-de-ajuda', 'Site\HomeController@faq');
Route::get('/meio-de-pagamento', 'Site\HomeController@bank');
Route::get('/fale-conosco', 'Site\HomeController@faleconosco');
Route::get('/carteira-digital', 'Site\HomeController@paravoce');
Route::get('/termos-de-uso', 'Site\HomeController@termosdeuso');
Route::get('/para-sua-empresa', 'Site\HomeController@parasuaempresa');
Route::get('/central-de-ajuda/documentos', 'Site\HomeController@faqdoc');
Route::get('/central-de-ajuda/para-voce', 'Site\HomeController@faqparavoce');
Route::get('/politica-de-privacidade', 'Site\HomeController@politicadeprivacidade');
Route::get('/central-de-ajuda/para-sua-empresa', 'Site\HomeController@faqparasuaempresa');
Route::get('/tutoriais', 'Site\HomeController@tutoriais');


/* FORM */
Route::post('/contact', 'Email\ContactController@email');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
