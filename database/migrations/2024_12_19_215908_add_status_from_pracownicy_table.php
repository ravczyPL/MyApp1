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
            $table->enum('status', ['zwolniony', 'zatrudniony', 'umowa b2b'])->default('zatrudniony')->after('wynagrodzenie');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pracownicy', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
