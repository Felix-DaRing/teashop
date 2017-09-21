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
            $table->increments('id');
            $table->string('name');
            $table->string('father');
            $table->string('sex');
            $table->dateTime('dob');
            $table->string('nrc');
            $table->string('marry');
            $table->string('ward');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->string('role');
            $table->string('salary');
            $table->dateTime('joindate');
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
