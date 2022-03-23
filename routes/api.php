<?php
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// how to create a laravel api
// to create a resource (posts) in laravel
// 1. create the database and migtations
// 2. create a model
// 3. create a service Eloquent ORM
// 4. create a controller to go get info from the database

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//show all record
Route::get('menu', 'App\Http\Controllers\MenuController@index' );
//show one record by id
Route::get('menu/{id}', 'App\Http\Controllers\MenuController@show' );
//add one record
Route::post('menu', 'App\Http\Controllers\MenuController@store' );
//edit record by id
Route::put('menu/{id}', 'App\Http\Controllers\MenuController@update' );
//delete by id
Route::delete('menu/{id}', 'App\Http\Controllers\MenuController@delete' );

//if you don't want use controller you can wirte method in below

// //show all record
// Route::get('menu', function() {
//     return Menu::all();
// });

// //show one record by id
// Route::get('menu/{id}', function($id) {
//     return Menu::find($id);
// });

// //add one record
// Route::post('menu', function(Request $request) {
//     return Menu::create($request->all());
// });

// //edit record by id
// Route::put('menu/{id}', function(Request $request, $id) {
//     $menu = Menu::findOrFail($id);
//     $menu->update($request->all());
//     return $menu;
// });

// //delete by id
// Route::delete('menu/{id}', function($id) {
//     Menu::find($id)->delete();
//     return 204;
// });
