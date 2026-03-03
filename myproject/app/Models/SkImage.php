<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkImage extends Model
{
    protected $fillable = [
        'sk_id',
        'image_url',
        'public_id',
        'is_primary'
    ];

    public function sk()
    {
        return $this->belongsTo(Sk_President::class, 'sk_id');
    }
}
