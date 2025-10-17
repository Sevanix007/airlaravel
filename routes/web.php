<?php

use Illuminate\Support\Facades\Route;
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



//
//
//
//NOT-A-NAV -------------------------------
//
//
//

Route::get('/roles/addRole', function () {
    return view('addRole');
});

Route::get('/lidmasinas/addLidmasina', function () {
    return view('addLidmasina');
});

Route::get('/lidosta/addLidosta', function () {
    return view('addLidosta');
});

Route::get('/darbinieki/addDarbinieks', function () {
    return view('addDarbinieki');
});


Route::get('/lidojums/addLidojums', function () {
    return view('addLidojums');
});


//
//
//
//SHOW -------------------------------
//
//
//

Route::get('/data/allData', 'App\Http\Controllers\DataController@showAllData'); 

Route::get('/data/allRoles', 'App\Http\Controllers\DataController@showAllRoles');

Route::get('/data/Lidmasinas', 'App\Http\Controllers\DataController@showAllLidmasinas');

Route::get('/data/Lidostas', 'App\Http\Controllers\DataController@showAllLidostas');

Route::get('/data/Darbinieki', 'App\Http\Controllers\DataController@showAllDarbinieki'); 

Route::get('/data/Lidojums', 'App\Http\Controllers\DataController@showAllLidojumi');

//
//
//
//CREATE -------------------------------
//
//
//

    
Route::post('/data/newSubmit', 'App\Http\Controllers\DataController@newSubmit');

Route::post('/roles/newRole', 'App\Http\Controllers\DataController@newRole');

Route::post('/lidmasina/newLidmasina', 'App\Http\Controllers\DataController@newLidmasina');

Route::post('/lidosta/newLidosta', 'App\Http\Controllers\DataController@newLidosta');

Route::post('/darbinieki/newDarbinieks', 'App\Http\Controllers\DataController@newDarbinieks');

Route::post('/lidojums/newLidojums', 'App\Http\Controllers\DataController@newLidojums');


//
//
//
//DETAILS -------------------------------
//
//
//


Route::get('/data/all/{id}/Detalizeti', 'App\Http\Controllers\DataController@details')->name('data-details');

Route::get('/roles/all/{id}/details_r', 'App\Http\Controllers\DataController@details_r')->name('roles-details');

Route::get('/lidmasina/{id}/details_l', 'App\Http\Controllers\DataController@details_l')->name('lidmasina-details');

Route::get('/lidosta/{id}/details_lo', 'App\Http\Controllers\DataController@details_lo')->name('lidosta-details');

Route::get('/darbinieki/{id}/details_d', 'App\Http\Controllers\DataController@details_dr')->name('darbinieki-details');

//
//
//
//DELITIT -------------------------------
//
//
//

Route::get('/data/all/{id}/delete', 'App\Http\Controllers\DataController@delete'); 

Route::get('/roles/all/{id}/delete', 'App\Http\Controllers\DataController@deleteR'); 

Route::get('/lidmasina/{id}/delete', 'App\Http\Controllers\DataController@deleteL'); 

Route::get('/lidosta/{id}/delete', 'App\Http\Controllers\DataController@deleteLo'); 

Route::get('/darbinieki/{id}/delete', 'App\Http\Controllers\DataController@deleteD'); 

Route::get('/lidojums/{id}/delete', 'App\Http\Controllers\DataController@deleteLi'); 

//
//
//
//EDITIT -------------------------------
//
//
//


Route::get('/data/all/{id}/edit', 'App\Http\Controllers\DataController@edit');

Route::post('/data/{id}/editSubmit', 'App\Http\Controllers\DataController@editSubmit');


Route::get('/roles/all/{id}/edit', 'App\Http\Controllers\DataController@editRoles');

Route::post('/roles/{RoleID}/editRoles', 'App\Http\Controllers\DataController@editRolesSubmit');


Route::get('/lidmasina/{id}/edit', 'App\Http\Controllers\DataController@editLidmasina');

Route::post('/lidmasina/{LidmasinasID}/editLidmasinaSubmit', 'App\Http\Controllers\DataController@editLidmasinasSubmit');


Route::get('/lidosta/{id}/edit', 'App\Http\Controllers\DataController@editLidosta');

Route::post('/lidosta/{LidmasinasID}/editLidostaSubmit', 'App\Http\Controllers\DataController@editLidostaSubmit');


Route::get('/darbinieki/{id}/edit', 'App\Http\Controllers\DataController@editDarbinieki');

Route::post('/darbinieki/{id}/editDarbinieksSubmit', 'App\Http\Controllers\DataController@editDarbiniekiSubmit');


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

