<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddEmployeeRequest;
use App\Http\Requests\EditEmployeeRequest;

use App\Employee;
use App\EmployeeType;

class EmployeesController extends Controller
{
    
    public function dashboard(){
        return view('base');
    }

    public function showLogin(){
    	return view('employees.login');
    }

    public function login(Request $request){

    	// Create our user data for the authentication
	    $userdata = array(
	        'email'     => $request->get('email'),
	        'password'  => $request->get('password')
	    );

	    // Attempt to do the login
	    if (Auth::attempt($userdata)) {
	    	if(Auth::user()->user_type != 2) {
	    		return redirect(route('admin_login'))->withMessage('User not an admin');
	    	} else {
	    		return redirect(route('manage'));
	    	}
	    } else {      
	    	return redirect(route('admin_login'))->withMessage('Invalid credentials');
	    }
    }

    public function logout(){
    	Auth::logout();
    	return redirect(route('admin_login'));
    }

    public function showAll(){
        $employees = Employee::get();
        return view('employees.all', compact('employees'));
    }

    public function showAdd(){
        $employee = new Employee();
        $employee_types = EmployeeType::pluck('name','id');
        return view('employees.add', compact('employee','employee_types'));
    }

    public function showEdit(Employee $employee){
        $employee_types = EmployeeType::pluck('name','id');
        return view('employees.edit', compact('employee','employee_types'));
    }

    public function addEmployee(AddEmployeeRequest $request, Employee $employee){
        dd($request->get('first_name'));
    }

    public function editEmployee(EditEmployeeRequest $request, Employee $employee){
    }

}
