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

Route::get('/', function () {
    return view('index');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){


   

    Route::get('/applications/create', [
        'uses' => 'positionsController@create',
        'as' => 'applications.create',
        ]);


        Route::post('/applications/store', [

            'uses' => 'positionsController@store',
            'as' => 'applications.store',
            ]);

            Route::get('/applications/personal-details',[
                'uses' => 'personalsController@create',
                'as' => 'applications.personal-details',
            ]);

            
            Route::get('/summaries/summary',[
                'uses' => 'SummarysController@index',
                'as' => 'summaries.summary',
            ]);

            Route::post('/summaries/update',[
                'uses' => 'SummarysController@update',
                'as' => 'summaries.update',
            ]);

            Route::post('/applications/update',[
                'uses' => 'personalsController@update',
                'as' => 'applications.update',
            ]);

            Route::get('/identifications/identification',[
                'uses' => 'IdentificationsController@create',
                'as' => 'identifications.identification',
            ]);

            Route::post('/identifications/update',[
                'uses' => 'IdentificationsController@update',
                'as' => 'identifications.update',
            ]);

            Route::get('/pictures/profile-images',[
                'uses' => 'PicturesController@create',
                'as' => 'pictures.image',
            ]);

            Route::post('/pictures/update',[
                'uses' => 'PicturesController@update',
                'as'=> 'pictures.update',
            ]);

            Route::get('/educationals/create',[
                'uses' => 'EducationalsController@create',
                'as' => 'educationals.create'
            ]);

            Route::post('/educationals/update',[
                'uses' => 'EducationalsController@update',
                'as' => 'educationals.update'
            ]);

            Route::get('/uploads/create',[
                'uses' => 'UploadsController@create',
                'as' => 'uploads.create',
            ]);

            Route::post('/uploads/update',[
                'uses' => 'UploadsController@update',
                'as' => 'uploads.update'
            ]);


            
});

