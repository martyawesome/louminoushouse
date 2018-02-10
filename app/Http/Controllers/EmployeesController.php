<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function addEmployee(Request $request, Employee $employee){
        $this->validate($request,[
            'password' => 'required|min:5|max:20',
            'password_confirmation' => 'required|min:5|max:20|same:password',
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required|date',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'email',
            'salary_rate' => 'integer|min:0',
        ]);

        $return = Employee::addEmployee($request,$employee);

        if($return["success"]){
            return redirect(route('employees', array()))->withSuccess('Employee was successfully added');
        } else {
            return redirect(route('employees', array()))->withDanger('Employee was unsuccessfully added');
        }
    }

    public function editEmployee(Request $request, Employee $employee){
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required|date',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'email',
            'salary_rate' => 'integer|min:0',
        ]);

        $return = Employee::addEmployee($request,$employee);

        if($return["success"]){
            return redirect(route('employees', array()))->withSuccess('Employee was successfully edited');
        } else {
            return redirect(route('employees', array()))->withDanger('Employee was unsuccessfully edited');
        }
    }

}
