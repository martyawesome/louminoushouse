<?php

use App\HolidayType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class HolidayTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('holiday_types')->delete();

        $records = [
            ['id' => 1,
                'name' => 'Regular'
            ],
            ['id' => 2,
                'name' => 'Special Non-Working'
            ]
        ];

        foreach ($records as $record) {
            HolidayType::create($record);
        }

    }
}
