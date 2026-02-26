<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Youth;

class LydcMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'youth_id',
    ];

    public function youth()
    {
        return $this->belongsTo(Youth::class);
    }
}
