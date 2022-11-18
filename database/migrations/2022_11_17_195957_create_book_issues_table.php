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
        Schema::create('book_issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->foreignId('book_id')->constrained()->cascadeOnDelete();
            $table->date('apply_date')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('return_date')->nullable();
            $table->string('late_return_fine')->nullable();
            $table->string('unique_id')->unique();
            $table->enum('status',['pending','accepted','cancel', 'returned'])->default('pending');
            $table->date('returned_date')->nullable();
            $table->string('fine_received')->nullable();
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
        Schema::dropIfExists('book_issues');
    }
};
