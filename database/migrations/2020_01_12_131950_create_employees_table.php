<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('nid')->unique();
            $table->string('dob');
            $table->integer('gender_id');
            $table->string('blood');
            $table->integer('designation_id');
            $table->string('joining_date');
            $table->string('basic_salary');
            $table->string('contact_number');
            $table->string('team')->nullable();
            $table->integer('status_id');
            $table->string('photo');
            $table->string('slug');
            $table->softDeletes();
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
