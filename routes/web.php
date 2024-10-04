<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function(){
//     Mail::to('mukyalbani1@gmail.com')->send(
//         new JobPosted()
//     );
//     return 'done';
// });

Route::get('/jobs',[JobController::class, 'index' ]);
Route::get('/jobs/create',[JobController::class, 'create']);
Route::get('/jobs/{job}',[JobController::class, 'show']);


Route::post('/jobs',[JobController::class, 'store']);

Route::get('/jobs/{job}/edit',[JobController::class, 'edit'])->middleware(['auth', 'can:edit,job']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);

Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Route::resource('/jobs', JobController::class)->except('jobs')->middleware(['auth']);

Route::get('/users',[UserController::class,'create']);
Route::post('/users',[UserController::class, 'store']);

Route::get('/login',[SessionController::class, 'create'])->name('login');
Route::post('/login',[SessionController::class, 'store']);
Route::post('/logout',[SessionController::class, 'destroy']);




