<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;
    public function Portflolio_detail(): HasMany
    {
        return $this->hasMany(Portflolio::class,'status_id', 'id');
    }

}
