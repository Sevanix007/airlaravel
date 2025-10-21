<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DataController;

//
//
//
//NAVIGATION -------------------------------
//
//
//



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/data', function () {
    return view('data');
});

// Route::get('login', function () {
//     return view('login');
// });


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/register', function () {
    return view('register');
});


//
//
//
//NOT-A-NAV -------------------------------
//
//
//

Route::get('/roles/addRole', function () {
    return view('addRole');
})->middleware('auth');

Route::get('/lidmasinas/addLidmasina', function () {
    return view('addLidmasina');
})->middleware('auth');

Route::get('/lidosta/addLidosta', function () {
    return view('addLidosta');
})->middleware('auth');

Route::get('/darbinieki/addDarbinieks', function () {
    return view('addDarbinieki');
})->middleware('auth');


Route::get('/lidojums/addLidojums', function () {
    return view('addLidojums');
})->middleware('auth');


//
//
//
//SHOW -------------------------------
//
//
//

Route::get('/data/allData', 'App\Http\Controllers\DataController@showAllData')->middleware('auth'); 

Route::get('/data/allRoles', 'App\Http\Controllers\DataController@showAllRoles')->middleware('auth');

Route::get('/data/Lidmasinas', 'App\Http\Controllers\DataController@showAllLidmasinas')->middleware('auth');

Route::get('/data/Lidostas', 'App\Http\Controllers\DataController@showAllLidostas')->middleware('auth');

Route::get('/data/Darbinieki', 'App\Http\Controllers\DataController@showAllDarbinieki')->middleware('auth');

Route::get('/data/Lidojums', 'App\Http\Controllers\DataController@showAllLidojumi')->middleware('auth');

//
//
//
//CREATE -------------------------------
//
//
//

    
Route::post('/data/newSubmit', 'App\Http\Controllers\DataController@newSubmit')->middleware('auth');

Route::post('/roles/newRole', 'App\Http\Controllers\DataController@newRole')->middleware('auth');

Route::post('/lidmasina/newLidmasina', 'App\Http\Controllers\DataController@newLidmasina')->middleware('auth');

Route::post('/lidosta/newLidosta', 'App\Http\Controllers\DataController@newLidosta')->middleware('auth');

Route::post('/darbinieki/newDarbinieks', 'App\Http\Controllers\DataController@newDarbinieks')->middleware('auth');

Route::post('/lidojums/newLidojums', 'App\Http\Controllers\DataController@newLidojums')->middleware('auth');


//
//
//
//DETAILS -------------------------------
//
//
//


Route::get('/data/all/{id}/Detalizeti', 'App\Http\Controllers\DataController@details')->name('data-details')->middleware('auth');

Route::get('/roles/all/{id}/details_r', 'App\Http\Controllers\DataController@details_r')->name('roles-details')->middleware('auth');

Route::get('/lidmasina/{id}/details_l', 'App\Http\Controllers\DataController@details_l')->name('lidmasina-details')->middleware('auth');

Route::get('/lidosta/{id}/details_lo', 'App\Http\Controllers\DataController@details_lo')->name('lidosta-details')->middleware('auth');

Route::get('/darbinieki/{id}/details_d', 'App\Http\Controllers\DataController@details_dr')->name('darbinieki-details')->middleware('auth');

Route::get('/lidojums/{id}/details', 'App\Http\Controllers\DataController@details_lid')->name('lidojums-details')->middleware('auth');

//
//
//
//DELITIT -------------------------------
//
//
//

Route::get('/data/all/{id}/delete', 'App\Http\Controllers\DataController@delete')->middleware('auth'); 

Route::get('/roles/all/{id}/delete', 'App\Http\Controllers\DataController@deleteR')->middleware('auth'); 

Route::get('/lidmasina/{id}/delete', 'App\Http\Controllers\DataController@deleteL')->middleware('auth'); 

Route::get('/lidosta/{id}/delete', 'App\Http\Controllers\DataController@deleteLo')->middleware('auth'); 

Route::get('/darbinieki/{id}/delete', 'App\Http\Controllers\DataController@deleteD')->middleware('auth'); 

Route::get('/lidojums/{id}/delete', 'App\Http\Controllers\DataController@deleteLi')->middleware('auth'); 

//
//
//
//EDITIT -------------------------------
//
//
//


Route::get('/data/all/{id}/edit', 'App\Http\Controllers\DataController@edit')->middleware('auth');

Route::post('/data/{id}/editSubmit', 'App\Http\Controllers\DataController@editSubmit')->middleware('auth');


Route::get('/roles/all/{id}/edit', 'App\Http\Controllers\DataController@editRoles')->middleware('auth');

Route::post('/roles/{RoleID}/editRoles', 'App\Http\Controllers\DataController@editRolesSubmit')->middleware('auth');


Route::get('/lidmasina/{id}/edit', 'App\Http\Controllers\DataController@editLidmasina')->middleware('auth');

Route::post('/lidmasina/{LidmasinasID}/editLidmasinaSubmit', 'App\Http\Controllers\DataController@editLidmasinasSubmit')->middleware('auth');


Route::get('/lidosta/{id}/edit', 'App\Http\Controllers\DataController@editLidosta')->middleware('auth');

Route::post('/lidosta/{LidmasinasID}/editLidostaSubmit', 'App\Http\Controllers\DataController@editLidostaSubmit')->middleware('auth');


Route::get('/darbinieki/{id}/edit', 'App\Http\Controllers\DataController@editDarbinieki')->middleware('auth');

Route::post('/darbinieki/{id}/editDarbinieksSubmit', 'App\Http\Controllers\DataController@editDarbiniekiSubmit')->middleware('auth');



//
//
//
//AUTH -------------------------------
//
//
//

Route::post('/loginSubmit', 'App\Http\Controllers\AuthController@login');


Route::post('/registerSubmit', 'App\Http\Controllers\AuthController@register');
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->middleware('auth')->name('logout');


//
//
//
//COMMENTS-------------------------------
//
//
//



// jauns zinojums vai elements
// Route::post('/data/newSubmit', function () {
//     return dd(Request()::all());
// });



//test
// Route::get('/neeks', function () {
//     return view('neeks');
// });

// Route::get('/neeks2', function () {
//     return view('about');
// });

