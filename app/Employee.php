<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Http\Requests\AddEmployeeRequest;
use App\Http\Requests\EditEmployeeRequest;


class Employee extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

    public static function editEmployee(Employee $employee, EditEmployeeRequest $request) {
        DB::beginTransaction();

        if($request->get('password'))
            $employee->password = Hash::make($request->get('password'));
        $employee->email = $request->get('email');
        $employee->employee_type_id = $request->get('employee_type');
        $employee->first_name = $request->get('first_name');
        $employee->middle_name = $request->get('middle_name');
        $employee->last_name = $request->get('last_name');
        $employee->sex = $request->get('sex');
        $employee->birthdate = $request->get('birthdate');
        $employee->address = $request->get('address');
        $employee->contact_number = $request->get('contact_number');
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
