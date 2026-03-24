<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Pokretanje migracije — kreira tablicu
     */
    public function up(): void
    {
        Schema::create('clanci', function (Blueprint $table) {
            $table->id();                              // auto-increment primary key
            $table->string('naslov');                  // VARCHAR(255)
            $table->text('sadrzaj');                   // TEXT (dugački tekst)
            $table->string('autor');                   // VARCHAR(255)
            $table->boolean('objavljeno')->default(false); // TINYINT, default 0
            $table->timestamps();                      // created_at i updated_at
        });
    }

    /**
     * Poništavanje migracije — briše tablicu
     */
    public function down(): void
    {
        Schema::dropIfExists('clanci');
    }
};