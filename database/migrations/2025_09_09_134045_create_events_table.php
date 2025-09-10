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

      
            $table->unsignedBigInteger('Organizer_id');
            $table->foreign('Organizer_id')->references('id')->on('users')->onDelete('cascade');
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
