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


/*Route::filter('auth_admin', function()
{
	if (Auth::check() or Auth::viaRemember()){
        if(!App\Employee::hasAccess()) {
            Auth::logout();
            return redirect(route('login'))->withDanger("Account has no admin access");
        }
    } else {
    	return redirect(route('login'));
    }
});*/


Route::get('/login', ['as' => 'login','uses' => 'EmployeesController@dashboard']);
Route::get('/logout', ['as' => 'logout','uses' => 'EmployeesController@logout']);
Route::post('/login', 'EmployeesController@login');

Route::get('/', ['as' => 'login','uses' => 'EmployeesController@dashboard']);

