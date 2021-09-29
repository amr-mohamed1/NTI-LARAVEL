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

Route::get('/', function () {
    return view('welcome');
});


Route::get('added', function () {
    return view('welcome');
});



/*Should Send Id With Link*/
// Route::get("user/{id}",function($id){
//     echo "hello" . $id;
// });



/*should not send id with link*/
// Route::get('user/{id?}' , function (){
//         echo "asdasdasd";

// });



/*redirect to view page*/

// Route::view('user','create');


/*echo from control paage*/
// Route::get('message','App\Http\Controllers\student@mssg');

/*solve the proplem from route service un comment*/
Route::get('message','student@mssg');
Route::get('create','student@create');
// Route::post('store','student@store');

Route::post('profile','student@profile');



