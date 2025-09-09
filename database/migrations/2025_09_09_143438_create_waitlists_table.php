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
        Schema::create('waitlists', function (Blueprint $table) {
            $table->id();
             $table->int('event_id');
            $table->int('Student_id');
             $table->enum('status', ['waiting', 'notified', 'registered'])->default('waiting');
              $table->ForeignKey('Student_id')->references('id')->on('users')->where('role', 'student');
                $table->ForeignKey('event_id')->references('id')->on('events');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waitlists');
    }
};
