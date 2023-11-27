<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Musician extends Model
{
    protected $table = "musician";
    use HasFactory;
    public function Songs() : HasMany
    {
        return $this->hasMany(Songs::class, 'musician_id','id');
    }
}
