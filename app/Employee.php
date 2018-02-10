<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use DB;
use Hash;


class Employee extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

    public static function addEmployee(Request $request, Employee $employee) {
        DB::beginTransaction();

        $employee->first_name = $request->get('first_name');
        $employee->middle_name = $request->get('middle_name');
        $employee->last_name = $request->get('last_name');
        $employee->employee_type_id = $request->get('employee_type');
        $employee->email = $request->get('email');
        $employee->password = Hash::make($request->get('password'));
        $employee->sex = $request->get('sex');
        $employee->birthdate = $request->get('birthdate');
        $employee->address = $request->get('address');
        $employee->contact_number = $request->get('contact_number');
        $employee->salary_rate = $request->get('salary_rate');
        $employee->is_active = $request->get('is_active') == "on" ? true : false;

        $return["success"] = $employee->touch();
        
        if($return["success"]){
            DB::commit();
        } else {
            DB::rollback();
        }

        return $return;
    }

    /**
    * Update the password if and only if the employee inputted a new password; else, leave as it is.
    */
    public static function editEmployee(Request $request, Employee $employee) {
        DB::beginTransaction();

        $employee->first_name = $request->get('first_name');
        $employee->middle_name = $request->get('middle_name');
        $employee->last_name = $request->get('last_name');
        $employee->employee_type_id = $request->get('employee_type');
        $employee->email = $request->get('email');
        if($request->get('password'))
            $employee->password = Hash::make($request->get('password'));
        $employee->sex = $request->get('sex');
        $employee->birthdate = $request->get('birthdate');
        $employee->address = $request->get('address');
        $employee->contact_number = $request->get('contact_number');
        $employee->salary_rate = $request->get('salary_rate');
        $employee->is_active = $request->get('is_active') == "on" ? true : false;

        $return["success"] = $employee->touch();
        
        if($return["success"]){
            DB::commit();
        } else {
            DB::rollback();
        }

        return $return;
    }
}
