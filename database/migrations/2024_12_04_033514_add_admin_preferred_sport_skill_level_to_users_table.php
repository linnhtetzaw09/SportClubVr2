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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('admin')->default(0)->before('remember_token'); // Admin column
            $table->string('preferred_sport')->nullable()->before('remember_token'); // Preferred Sport column
            $table->string('skill_level')->nullable()->before('remember_token'); // Skill Level column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['admin', 'preferred_sport', 'skill_level']);
        });
    }
};
