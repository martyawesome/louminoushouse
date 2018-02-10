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
            $table->string('birthdate',10)->is_nullable();
            $table->string('sex',6);
            $table->string('email')->is_nullable();
            $table->string('contact_number',15)->is_nullable();
            $table->string('address')->is_nullable();
            $table->integer('salary_rate');
            $table->boolean('is_active');
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
