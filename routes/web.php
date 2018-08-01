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
    return view('welcome');
});

Route::get('/verifyemail/{token}', ['as' => 'verifyemail', 'uses' => 'Auth\RegisterController@verify']);

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function(){
        Route::get('/home', ['as' => 'home', function(){
            return view('home');
		}]);
		//Event
		Route::get('organizer/events/create', ['as' => 'event.create', function(){
			return view('organizer.events.create');
		}]);
		Route::get('organizer/events', ['as' => 'event.view', 'uses' => 'EventController@retrieve']);
		Route::post('organizer/events/create/post', ['as' => 'event.post', 'uses' => 'EventController@create']);
		Route::get('organizer/events/{id}/edit', ['as' => 'event.edit', 'uses' => 'EventController@get']);
		Route::get('organizer/events/{id}', ['as' => 'event.get', 'uses' => 'EventController@get']);
		Route::patch('organizer/events/{id}/update', ['as' => 'event.update', 'uses' => 'EventController@update']);
		Route::get('organizer/events/{id}/delete', ['as' => 'event.delete', 'uses' => 'EventController@delete']);
		//END
	});


Route::get('/verification',function(){
	return view("email.verification");
});

Route::get('/verified',function(){
	return view("email.emailconfirm");
});

Route::get('/organizer',function(){
	return view("organizer.index");
});

Route::get('organizer/calendar',function(){
	return view("organizer.calendar.calendar");
});

// Route::get('organizer/events',function(){
// 	return view("organizer.events.events");
// });

// Route::get('organizer/events/create',function(){
// 	return view("organizer.events.create");
// });

Route::get('organizer/news',function(){
	return view("organizer.news.news");
});

Route::get('organizer/blogs',function(){
	return view("organizer.blogs.blogs");
});

Route::get('addsched',function(){
	return view("organizer.events.addsched");
});