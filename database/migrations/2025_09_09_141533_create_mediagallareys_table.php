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
        Schema::create('mediagallareys', function (Blueprint $table) {
            $table->id();
             $table->string('image_path');
              $table->string('caption');
               $table->int('event_id');
                $table->int('Organizer_id');
                 $table->ForeignKey('Organizer_id')->references('id')->on('users')->where('role', 'Organizer');
                $table->ForeignKey('event_id')->references('id')->on('events');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediagallareys');
    }
};
