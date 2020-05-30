<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsadmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentsadmission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('email');
            $table->integer('mobile_no');
            $table->integer('nid');
            $table->integer('ssc_year');
            $table->float('result');
            $table->string('gender');
            $table->string('per_address');
            $table->integer('ibit_id');
            $table->integer('department_id');
            $table->date('d_o_b');
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
        Schema::dropIfExists('studentsadmission');
    }
}
