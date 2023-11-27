<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portflolio_detail extends Model
{   
    protected $table ='portfolio_detail';
    public function Portflolio(): BelongsTo
    {
        return $this->belongsTo(Portflolio::class,'portflolio_id','id');
    }
    public function Songs(): BelongsTo
    {
        return $this->belongsTo(Songs::class,'song_id','id');
    }
    use HasFactory;
}
