<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationform', function (Blueprint $table) {
            $table->id('aplicant_id');
            $table->integer('application_no');
            $table->string('entry_classification');
            $table->string('educ_type');
            $table->string('course');
            $table->string('year_level');
            $table->string('sname');
            $table->string('fname');
            $table->string('mname');
            $table->string('sex');
            $table->string('nationality');
            $table->string('religion');
            $table->string('birth_date');
            $table->string('civil_status');
            $table->string('birth_place');
            $table->string('siblings');
            $table->string('ordinal_position');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->integer('home_phone');
            $table->integer('mobile_phone');
            $table->string('email_add');
            $table->string('contact_person');
            $table->string('relationship');
            $table->string('family_data');
            $table->string('educ_background');
            $table->string('survey_ques');
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
        Schema::dropIfExists('applicationform');
    }
};
