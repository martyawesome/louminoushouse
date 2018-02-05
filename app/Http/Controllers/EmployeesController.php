<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
