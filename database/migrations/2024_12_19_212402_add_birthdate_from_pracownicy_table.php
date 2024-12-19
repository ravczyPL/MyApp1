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
        Schema::table('pracownicy', function (Blueprint $table) {
            $table->date('birthdate')->nullable()->after('nazwisko'); // Dodaje kolumnę birthdate
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pracownicy', function (Blueprint $table) {
            $table->dropColumn('birthdate'); // Usuwa kolumnę birthdate
        });
    }
};
