<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/neo_banking', function () {
    return view('neo_banking');
});
Route::get('/job', function () {
    return view('job');
});
Route::get('/open_banking_apis', function () {
    return view('open_banking_apis');
});

Route::get('/fintech_solution', function () {
    return view('fintech_solution');
});

Route::get('/neo_banking', function () {
    return view('neo_banking');
});
Route::get('/web_development', function () {
    return view('web_development');
});
Route::get('/software_development', function () {
    return view('software_development');
});

Route::get('/api_integration', function () {
    return view('api_integration');
});

Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/term', function () {
    return view('term');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// |-------------------------------Start Contact-------------------------------------------|

Route::post('contact_submit',[ContactController::class,'store']);
Route::get('admin.admincontact',[ContactController::class,'show']);
Route::get('/deletecontact/{id}',[ContactController::class,'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->get('admin.admincontact',[ContactController::class,'show'], function () {
    return view('admin.admincontact');
})->name('admin.admincontact');
Route::get('/admin/admincontact',[ContactController::class,'show_doctor_auth']);
// |---------------------------------End Contact-----------------------------------------|

// |-------------------------------Start Contact-------------------------------------------|

// Route::post('contact_submit',[ContactController::class,'store']);
// Route::get('admin.admincontact',[ContactController::class,'show']);
// Route::get('/deletecontact/{id}',[ContactController::class,'destroy']);
Route::middleware(['auth:sanctum', 'verified'])->get('admin.hiring',[ContactController::class,'show'], function () {
    return view('admin.hiring');
})->name('admin.hiring');
Route::get('/admin/hiring',[ContactController::class,'show_doctor_auth']);
// |---------------------------------End Contact-----------------------------------------|

Route::post('logout', [ContactController::class, 'logout'])->name('logout');