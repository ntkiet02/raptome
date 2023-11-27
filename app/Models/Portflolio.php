<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portflolio extends Model
{
    protected $table="portflolio";
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Status(): BelongsTo
    {
        return $this->belongsTo(Status::class,'status_id','id');
    }
    public function Portflolio_detail(): HasMany
    {
        return $this->hasMany(Portflolio_detail::class,'portflolio_id','id');
    }
    use HasFactory;
}
