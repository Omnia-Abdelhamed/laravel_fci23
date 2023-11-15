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
        Schema::create('departments', function (Blueprint $table) {
            $table->tinyInteger('dept_id',false,true)->primary();
            $table->string('dept_name',100)->unique();
            $table->text('desc')->nullable();
            $table->unsignedInteger('MGRSSN')->nullable();
            $table->foreign('MGRSSN')->references('SSN')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
