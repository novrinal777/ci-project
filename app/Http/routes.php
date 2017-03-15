<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function(){
    return "Hello World";
});
*/

Route::get('/login','UserController@create');
Route::post('/loginUser','UserController@loginUser');
Route::get('/','TestController@showMasterLayout');
Route::get('/requestDataFromApi','TestController@requestDataFromApi');
Route::post('/insertData','TestController@insertData');
//Route::get('/readsession','TestController@readsession');
//Route::get('/readCollection','TestController@readCollection');
//Route::get('param/{p1}/{p2}' , 'testController@phaseParam');   // test phasing param to controller
//Route::get('loadview/{p1}',['middleware' => 'auth:api','tests'=>'testcontroller@showView']);
//Route::get('loadMasterView','testcontroller@showMasterLayout');
//Route::get('loadSubView','testcontroller@showSubLayout');
//Route::get('loadSubView/{subjectName}/{teacher}','testcontroller@phaseDataToView');
//Route::get('getData',"UserController@index");
//Route::get('test',['middleware' => 'auth:api', function() {
//    $test = App\Model\User::all();
//    return Response::json(array(
//        'error' => false,
//        'user' => $test,
//        'status_code' => 200
//    ));
//}]);
Route::resource('users','UserController');