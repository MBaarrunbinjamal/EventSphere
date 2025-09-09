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
        Schema::create('callendersyncs', function (Blueprint $table) {
            $table->id();
             $table->integer('event_id');
            $table->integer('user_id');
           $table->enum('calendar_type', ['Google', 'Outlook', 'Apple'])->nullable();
                 $table->string('callender_url');
                 $table->Foreign('user_id')->references('id')->on('users');
                $table->Foreign('event_id')->references('id')->on('events');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('callendersyncs');
    }
};
