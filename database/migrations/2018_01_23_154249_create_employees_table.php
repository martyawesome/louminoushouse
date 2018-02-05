<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('employee_type_id');
            $table->string('first_name',30);
            $table->string('middle_name',30);
            $table->string('last_name',30);
            $table->string('password');
            $table->string('birthdate',10);
            $table->string('sex',6);
            $table->string('email');
            $table->string('contact_number',15);
            $table->string('address');
            $table->integer('salary_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
