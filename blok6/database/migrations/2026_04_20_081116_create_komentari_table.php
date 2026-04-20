<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('komentari', function (Blueprint $table) {
            $table->id();

            // Foreign key: referencira tablicu clanci
            $table->foreignId('clanak_id')->constrained('clanci');
            //          ↑ kreira kolonu      ↑ i dodaje FK ograničenje

            $table->string('ime_autora');
            $table->string('email');
            $table->text('tekst');
            $table->boolean('odobren')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('komentari');
    }
};