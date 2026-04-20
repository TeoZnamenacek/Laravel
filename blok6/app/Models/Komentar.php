<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komentar extends Model
{
    protected $fillable = ['clanak_id', 'ime_autora', 'email', 'tekst', 'odobren'];

    // Svaki komentar PRIPADA jednom članku
    public function clanak(): BelongsTo
    {
        return $this->belongsTo(Clanak::class);
        // Laravel pretpostavlja FK: clanak_id
    }
}