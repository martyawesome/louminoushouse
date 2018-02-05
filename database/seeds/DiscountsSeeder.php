<?php

use App\Discount;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->delete();

        $records = [
            ['id' => 1,
                'name' => 'Senior',
                'rate' => 0.2,
                'is_active' => true
            ],
            ['id' => 2,
                'name' => 'Family',
                'rate' => 0.2,
                'is_active' => true
            ]
        ];

        foreach ($records as $record) {
            Discount::create($record);
        }

    }
}
