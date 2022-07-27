<?php

//owner authentication
Route::group(['namespace'=>'Auth','prefix'=>'/','middleware'=>'OwnerGuest','as'=>'owner.auth.'],function(){
  //register
  Route::get('register','OwnerController@showRegistrationForm')->name('register');
  Route::post('register_submit','OwnerController@register_submit')->name('register_submit');
  //login
  Route::get('/','OwnerController@showLoginForm')->name('login');
  Route::post('/login_submit','OwnerController@login_submit')->name('login_submit');
  //send mail owner code
  Route::get('/mail','OwnerController@showMailForm')->name('mail');
  Route::post('/mail_submit','OwnerController@mail_submit')->name('mail_submit');
  //quick login owner
  Route::get('owner/login/{code}','OwnerController@login_owner')->name('login_by_code');
});
//logout owner
Route::post('/logout','Auth\OwnerController@logout')->name('owner.logout');

//owner pages
Route::group(['namespace'=>'Owner','prefix'=>'owner','middleware'=>'Owner','as'=>'owner.'],function(){
  //dashboard
  Route::get('/','IndexController@index')->name('index');
 
  //get reports and receipts
  Route::group(['prefix'=>'groups','as'=>'groups.'],function(){
    Route::get('/','GroupsController@index')->name('index');
    Route::get('/reports/{id}','GroupsController@reports')->name('reports');
    Route::get('/receipt/{id}','GroupsController@receipt')->name('receipt');
    Route::post('/reports/pdf/{id}','GroupsController@pdf')->name('pdf');
  });
  //get owner groups
  Route::get('get_owner_groups','GroupsController@ajax')->name('get_owner_groups');

  //profile
  Route::group(['prefix'=>'profile','as'=>'profile.'],function(){
    Route::get('/','ProfileController@edit')->name('edit');
    Route::post('/','ProfileController@update')->name('update');
  });

  //visits
  Route::resource('visits','VisitsController');

  //branches
  Route::resource('branches','BranchesController');

  //tests library
  Route::resource('tests_library','TestsLibraryController');
  Route::get('get_analyses','TestsLibraryController@get_analyses');
  Route::get('get_cultures','TestsLibraryController@get_cultures');

});




?>