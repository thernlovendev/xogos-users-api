<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $table->integer('user_id');
        $table->integer('admin_id')->nullable();
        $table->integer('parent_id')->nullable();
        $table->integer('student_id')->nullable();
        $table->integer('t_student_id')->nullable();
        $table->integer('teacher_id')->nullable();
        $table->integer('kids_count')->nullable();
        $table->string('firstname');
        $table->string('lastname');
        $table->string('address');
        $table->string('city');
        $table->string('zip');
        $table->string('email');
        $table->string('username');
        $table->string('password');
        $table->string('user_role');
        $table->string('img')->nullable();
        $table->string('score')->nullable();
        $table->string('phone')->nullable();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
