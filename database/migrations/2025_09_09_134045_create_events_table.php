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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->text('Description');
            $table->date('Date');
            $table->time('Time');
             $table->string('category');
              $table->string('venue');
               $table->int('Organizer_id');
             $table->ForeignKey('Organizer_id')->references('id')->on('users')->where('role', 'organizer');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
