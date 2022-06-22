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

Route::get('/home', function () {
    $user = ['nome'=>'Antonio'];
    $address ='Napoli';
    $data = [
        'user'=>$user ,
        'address'=>$address,
        'menu'=>['home','about','contacts'],
    ];

    return view('homepage' , $data);
})->name('home');

Route::get('/about',function(){

    $menu = ['menu'=>['home','about','contacts']];
    return view('about',$menu);

})->name('about');

Route::get('/contacts',function(){

    $menu = ['menu'=>['home','about','contacts']];

    return view ('contacts',$menu);

})->name('contacts');
