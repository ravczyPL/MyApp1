<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracownicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pracownicy', function (Blueprint $table) {
            $table->id(); // Klucz główny (automatyczny)
            $table->string('imie'); // Kolumna na imię
            $table->string('nazwisko'); // Kolumna na nazwisko
            $table->string('email')->unique(); // Kolumna na email (unikalna)
            $table->string('telefon')->nullable(); // Opcjonalna kolumna na telefon
            $table->date('zatrudnienie'); // Data zatrudnienia
            $table->decimal('wynagrodzenie', 10, 2); // Wynagrodzenie (z dokładnością do 2 miejsc po przecinku)
            $table->timestamps(); // Automatyczne kolumny `created_at` i `updated_at`
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pracownicy'); // Usunięcie tabeli w przypadku rollbacka
    }
}
