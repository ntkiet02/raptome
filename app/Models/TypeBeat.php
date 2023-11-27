<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeBeat extends Model
{
    use HasFactory;

    protected $table = 'typebeat';
    public function Songs() : HasMany
    {
        return $this->hasMany(Songs::class,'typebeat_id', 'id');
    }
}
