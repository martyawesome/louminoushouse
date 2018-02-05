<?php

use App\EmployeeType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EmployeeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_types')->delete();

        $records = [
            ['id' => 1,
                'name' => 'Admin'
            ],
            ['id' => 2,
                'name' => 'Staff'
            ]
        ];

        foreach ($records as $record) {
            EmployeeType::create($record);
        }

    }
}
