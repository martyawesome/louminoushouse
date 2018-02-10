<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::bind('employee', function($id){
	$employee = App\Employee::find($id);
	if($employee == null) $employee = new App\Employee();
	return $employee;
});

Route::group(['middleware' => ['web']], function () {
	Route::get('/login', ['as' => 'login','uses' => 'EmployeesController@dashboard']);
	Route::get('/logout', ['as' => 'logout','uses' => 'EmployeesController@logout']);
	Route::post('/login', 'EmployeesController@login');

	Route::get('/', ['as' => 'login','uses' => 'EmployeesController@dashboard']);
	Route::get('/employees', ['as' => 'employees','uses' => 'EmployeesController@showAll']);
	Route::get('/add_employee', ['as' => 'add_employee','uses' => 'EmployeesController@showAdd']);
	Route::get('/edit_employee/{employee}', ['as' => 'employee','uses' => 'EmployeesController@showEdit']);

	Route::post('/add_employee', 'EmployeesController@addEmployee');
	Route::post('/edit_employee/{employee}', 'EmployeesController@editEmployee');
});