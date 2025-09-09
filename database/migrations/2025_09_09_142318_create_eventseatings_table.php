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
        Schema::create('eventseatings', function (Blueprint $table) {
            $table->id();
                $table->integer('event_id');
                 $table->string('veneu');
                  $table->integer('total_seats');
                   $table->unsignedInteger('available_seats');
                    $table->boolean('Waitlist_enabled')->default(false);
                    $table->Foreign('event_id')->references('id')->on('events');
                     $table->Foreign('veneu')->references('venue')->on('events');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventseatings');
    }
};
