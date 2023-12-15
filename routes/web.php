<?php
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\UniversityController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
    return view('auth.login');
});

// Route::get('coordinator/coordinatorDash', 'App\Http\Controllers\AssignmentController@index')->name('coordinator.coordinatorDash')->middleware('iscoordinator');
// Route::post('coordinator/assignments', 'App\Http\Controllers\AssignmentController@store')->name('assignments.store')->middleware('iscoordinator');
/*
<<--------------------------Coordinator----------------------------------->>

*/
Route::get('coordinator/coordinatorDash', 'App\Http\Controllers\HomeController@coordinatorDash')->name('coordinator.coordinatorDash')->middleware('iscoordinator');
Route::get('coordinator/coordinatorDash', 'App\Http\Controllers\ProjectController@index')->name('coordinator.coordinatorDash')->middleware('iscoordinator');
Route::post('coordinator/projects', 'App\Http\Controllers\ProjectController@store')->name('projects.store')->middleware('iscoordinator');
Route::delete('coordinator/projects/{project}', 'App\Http\Controllers\ProjectController@destroy')->middleware('iscoordinator')->name('projects.destroy');
Route::get('coordinator/projects/{project}', 'App\Http\Controllers\ProjectController@show')->middleware('iscoordinator')->name('projects.show');
/*
<<--------------------------Admin----------------------------------->>

*/

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.adminDash')->middleware('role');
Route::get('admin/trainees', function () {return view('admin.studentsTable');})->middleware('role');
Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('admin/universities','App\Http\Controllers\UniversityController')->middleware('role');
Route::get('delete/{id}','App\Http\Controllers\UniversityController@destroy')->middleware('role');
Route::get('admin/coordinators', 'App\Http\Controllers\UserController@showCoordinators')->middleware('role');
Route::get('admin/trainees', 'App\Http\Controllers\UserController@showTrainees')->middleware('role');
/*
<<--------------------------Students----------------------------------->>

*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*
<<--------------------------authentication----------------------------------->>

*/

Auth::routes();

