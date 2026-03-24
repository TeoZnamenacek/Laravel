public function up(): void
{
    Schema::table('clanci', function (Blueprint $table) {
        $table->integer('broj_pregleda')->default(0)->after('objavljeno');
    });
}

public function down(): void
{
    Schema::table('clanci', function (Blueprint $table) {
        $table->dropColumn('broj_pregleda');
    });
}