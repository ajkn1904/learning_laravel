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
<<<<<<<< HEAD:database/migrations/2023_06_11_064339_create_departments_table.php
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->date('established_at');
            $table->string('building', 50);
========
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->string('address');
            $table->string('section');
            $table->string('contact');
>>>>>>>> 0bb92334c2000b425fdf71b2664c58feadfcd00e:database/migrations/2023_06_06_072012_create_courses_table.php
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
<<<<<<<< HEAD:database/migrations/2023_06_11_064339_create_departments_table.php
        Schema::dropIfExists('departments');
========
        Schema::dropIfExists('courses');
>>>>>>>> 0bb92334c2000b425fdf71b2664c58feadfcd00e:database/migrations/2023_06_06_072012_create_courses_table.php
    }
};