<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAdmissioninfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_admissioninfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('email');
            $table->integer('mobile_no');
            $table->string('gender');
            $table->string('per_address');
            $table->string('d_o_b');
            $table->integer('ssc_year');
            $table->float('result');
            $table->integer('ibit_id');
            $table->integer('department_id');
            $table->integer('roll');
            $table->string('board');

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
        Schema::dropIfExists('student_admissioninfos');
    }
}
