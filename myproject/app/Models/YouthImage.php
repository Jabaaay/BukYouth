<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YouthImage extends Model
{
    protected $fillable = [
    'youth_id',
    'image_url',
    'public_id',
    'is_primary'
    ];

    public function youth()
    {
        return $this->belongsTo(Youth::class);
    }
}
