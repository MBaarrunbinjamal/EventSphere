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
        Schema::create('event_share_logs', function (Blueprint $table) {
            $table->id();
             $table->int('event_id');
            $table->int('user_id');
                $table->string('platform');
                 $table->string('Message');
                 $table->ForeignKey('user_id')->references('id')->on('users');
                $table->ForeignKey('event_id')->references('id')->on('events');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_share_logs');
    }
};
