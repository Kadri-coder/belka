<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::get('/', function () {

    Alert::success('EPB', 'Bienvenue Kadri Belkacem');
    return view('welcome');
});
Route::get('chercher','epbController@search')->name('chercher.ch');
Route::get('zizou/{id}','embarcationController@embarcationune')->name('zizou.embarcation');
Route::get('kaci','embarcationController@embarcation');
Route::get('create','changementController@create')->name('form.create');
Route::post('store','changementController@store')->name('form.store');
Route::get('post/{id}','PostController@post')->name('init.post');
Route::get('posts/{id}','PostController@toutposte')->name('inits.post');
Route::get('coprop/{id}','CopropController@coprop')->name('copropi.coprop');
Route::get('editposte/{id}','PostController@edit')->name('changerpost.edit');

Route::put('changer/{id}','PostController@changer')->name('post.changer');

Route::get('mouvement/{id}','MouvementController@mouvement')->name('mouvement.mv');
Route::put('update/{id}','MouvementController@update')->name('mouvement.update');
Route::get('editmv/{id}','MouvementController@editmv')->name('mouvement.editmv');
Route::get('situation','situationController@base')->name('situation.base');
Route::get('absence','AbsenceEmbarcation@absence')->name('situation.absence');
Route::get('sansautorisation','SansAutorisation@sansautorisation')->name('situation.sansautorisation');
Route::get('situationglobale','SituationGlobale@situationglobale')->name('situation.situationglobale');
Route::post('copropstore','CopropController@store')->name('coprop.store');
Route::get('copropcree/{id}','CopropController@cree')->name('copropcree.cree');

Route::resource('liste','epbController');

Route::get('master',function(){

    return view('layouts.master');
    
    });
    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
