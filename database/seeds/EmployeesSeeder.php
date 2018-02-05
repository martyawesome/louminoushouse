<?php

use App\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->delete();

        $records = [
            ['id' => 1,
                'email' => 'juliomartinphernandez@gmail.com',
                'password' => Hash::make('12345'),
                'employee_type_id' => 1,
                'first_name' => 'Julio Martin',
                'middle_name' => 'Padiernos',
                'last_name' => 'Hernandez',
                'birthdate' => '1991-04-01',
                'sex' => 'Male',
                'contact_number' => '09175324627',
                'address' => '173 Bridgestone St. Brookside Hills Subd Cainta, Rizal',
                'salary_rate' => '0'
            ]
        ];

        foreach ($records as $record) {
            Employee::create($record);
        }

    }
}
