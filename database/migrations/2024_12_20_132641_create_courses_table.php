<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Tytuł kursu
            $table->text('description')->nullable(); // Opis kursu
            $table->string('instructor'); // Instruktor prowadzący
            $table->decimal('price', 8, 2)->default(0.00); // Cena kursu
            $table->integer('duration')->nullable(); // Czas trwania kursu (w minutach)
            $table->date('start_date')->nullable(); // Data rozpoczęcia kursu
            $table->timestamps(); // Utworzenie i aktualizacja
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
