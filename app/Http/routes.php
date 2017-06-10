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
Route::get('/',['as'=>'home','uses'=>'homeController@index']);


Route::get('admin',['as'=>'admin','middleware'=>'auth',function(){
	return view('layout.admin.admin');
}]);
/**dong binh duong  **/
Route::group(['prefix'=>'dbd','middleware'=>'auth'],function(){
	Route::get('admin',['as'=>'dbd_admin','uses'=>'dbdController@showItem']);
	Route::post('post',['as'=>'postDbd','uses'=>'dbdController@postItem']);
	Route::get('edit/{id}',['as'=>'getEditDbd','uses'=>'dbdController@getEdit']);
    Route::post('edit/{id}',['as'=>'postEditDbd','uses'=>'dbdController@postEdit']);
    Route::get('delete/{id}',['as'=>'getDeleteDbd','uses'=>'dbdController@delete']);
});

/** login----logout   **/
Route::group(['prefix'=>'auth'],function(){
	Route::get('login',['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
	Route::post('login',['as'=>'posLogin','uses'=>'Auth\AuthController@postLogin']);
	Route::get('logout',['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);
	Route::get('register',['as'=>'register','uses'=>'Auth\AuthController@getLogin']);
	Route::post('register',['as'=>'postRegister','uses'=>'Auth\AuthController@postRegister']);
});


Route::get('password/email',['as'=>'password/email','uses'=>'Auth\PasswordController@getEmail']);
Route::post('password/email',['as'=>'password/email','uses'=>'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset',['as'=>'password\reset','uses'=>'Auth\PasswordController@postReset']);

/*** đông bình dương page  ***/
Route::get('dongbinhduong',['as'=>'dongbinhduong','uses'=>'dbdpageController@index']);
Route::get('dongbinhduong/{link}','dbdpageController@linhLeftPage');

/*** đông sài gòn page ****/
Route::get('dongsaigon',['as'=>'dongsaigon','uses'=>'dsgpageController@index']);
Route::get('dongsaigon/{link}','dsgpageController@linhLeftPage');

/** vé máy bay page **/
Route::get('vemaybay',['as'=>'vemaybay','uses'=>'vmbpageController@index']);
Route::get('vemaybay/{link}','vmbpageController@linhLeftPage');

/** tin tuc page **/
Route::get('tintuc',['as'=>'tintuc','uses'=>'ttpageController@index']);
Route::get('tintuc/{link}','ttpageController@linhLeftPage');


/**dong sai gon **/

Route::group(['prefix'=>'dsg','middleware'=>'auth'],function(){
	Route::get('admin',['as'=>'dsg_admin','uses'=>'dongsaigonController@showItem']);
	Route::post('post',['as'=>'postDsg','uses'=>'dongsaigonController@postItem']);
	Route::get('edit/{id}',['as'=>'getEditDsg','uses'=>'dongsaigonController@getEdit']);
    Route::post('edit/{id}',['as'=>'postEditDsg','uses'=>'dongsaigonController@postEdit']);
    Route::get('delete/{id}',['as'=>'getDeleteDsg','uses'=>'dongsaigonController@delete']);
});


/*** vé máy bay  **/
Route::group(['prefix'=>'vmb','middleware'=>'auth'],function(){
	Route::get('admin',['as'=>'vmb_admin','uses'=>'vmbController@showItem']);
	Route::post('post',['as'=>'postVmb','uses'=>'vmbController@postItem']);
	Route::get('edit/{id}',['as'=>'getEditVmb','uses'=>'vmbController@getEdit']);
    Route::post('edit/{id}',['as'=>'postEditVmb','uses'=>'vmbController@postEdit']);
    Route::get('delete/{id}',['as'=>'getDeleteVmb','uses'=>'vmbController@delete']);
});


/**  tin tức **/
Route::group(['prefix'=>'tt','middleware'=>'auth'],function(){
	Route::get('admin',['as'=>'tt_admin','uses'=>'ttController@showItem']);
	Route::post('post',['as'=>'postTt','uses'=>'ttController@postItem']);
	Route::get('edit/{id}',['as'=>'getEditTt','uses'=>'ttController@getEdit']);
    Route::post('edit/{id}',['as'=>'postEditTt','uses'=>'ttController@postEdit']);
    Route::get('delete/{id}',['as'=>'getDeleteTt','uses'=>'ttController@delete']);
});

/**  contact ****/

Route::get('contact',['as'=>'contact','uses'=>'hompageController@contact']);
Route::post('contact',['as'=>'postcontact','uses'=>'hompageController@postcontact']);