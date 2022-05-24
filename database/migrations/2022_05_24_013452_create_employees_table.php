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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('idcode')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('gender')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('address')->nullable();
            $table->string('education')->nullable();
            $table->string('email')->nullable();
            $table->string('nationality')->nullable();
            $table->string('mobile')->nullable();
            $table->string('incase_of_emergency')->nullable();
            $table->string('company')->nullable();
            $table->string('branch')->nullable();
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->boolean('active')->default(1);
            $table->date('date_hired')->nullable();
            $table->date('date_resigned')->nullable();
            $table->string('employee_status')->default('Active');
            $table->string('punching')->nullable();
            $table->string('gov_sss_no')->nullable();
            $table->string('gov_pagibig_no')->nullable();
            $table->string('gov_philhealth_no')->nullable();
            $table->string('gov_tin_no')->nullable();
            $table->string('tax_code')->nullable();
            $table->decimal('salary_monthly', 9, 2)->default(0);
            $table->decimal('salary_daily', 9, 2)->default(0);
            $table->decimal('salary_factor', 9, 2)->default(0);
            $table->decimal('salary_hourly', 9, 2)->default(0);
            $table->decimal('overtime_rate', 9, 2)->default(1);
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
};
