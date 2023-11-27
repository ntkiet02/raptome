<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Songs extends Model
{
    protected $table ="songs";
    public function TypeBeat(): BelongsTo
    {
        return $this->belongsTo(TypeBeat::class, 'typebeat_id', 'id');
    }
    public function Musician(): BelongsTo
    {
        return $this->belongsTo(Musician::class, 'musician_id', 'id');
    }
    public function Portflolio_detail(): HasMany
    {
        return $this->hasMany(Portflolio_detail::class, 'songs_id', 'id');
    }
    use HasFactory;
}
