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
            $table->id(); // Auto-increment primary key
            $table->string('event_name'); // Event name
            $table->date('date'); // Date of the event
            $table->time('time'); // Time of the event
            $table->string('location'); // Location of the event
            $table->string('age_group'); // Age group for participants
            $table->text('description')->nullable(); // Event description, nullable
            $table->text('activities')->nullable(); // Activities, nullable
            $table->timestamps(); // Created at and updated at timestamps
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
