<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('clanci', function (Blueprint $table) {
        // Dodajemo kolonu nakon 'naslov'
        $table->string('kategorija')->after('naslov')->default('opce');
    });
}

public function down(): void
{
    Schema::table('clanci', function (Blueprint $table) {
        $table->dropColumn('kategorija');
    });
}
};
