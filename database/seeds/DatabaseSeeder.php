<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DiscountsSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(EmployeeTypesSeeder::class);
        $this->call(HolidayTypesSeeder::class);
        $this->call(PromosSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(ServiceTypesSeeder::class);
    }
}
