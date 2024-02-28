<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('add', 'StudentController@add'); 

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::resource('students', StudentController::class);
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('add', 'SubjectController@add'); 
Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index');
Route::resource('subject', SubjectController::class);
Route::get('/subject/{id}/edit', [SubjectController::class, 'edit'])->name('subject.edit');
Route::put('/subject/{id}', [StudentController::class, 'update'])->name('subject.update');
Route::delete('/subject/{id}', [StudentController::class, 'destroy'])->name('subject.destroy');

Route::get('add', 'GradesController@add'); 
Route::get('/grade', [GradesController::class, 'index'])->name('grade.index'); 
Route::resource('grade', GradesController::class); 
Route::get('/grade/{id}/edit', [GradesController::class, 'edit'])->name('grade.edit');
Route::delete('/grade/{id}', [GradesController::class, 'destroy'])->name('grade.destroy');



require __DIR__.'/auth.php';
