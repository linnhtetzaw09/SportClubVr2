<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailToRegistersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('registers', function (Blueprint $table) {
            $table->string('email')->after('phone')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('registers', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
}
