<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sk_President extends Model
{
    use HasFactory;

    protected $table = 'sk';
    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'type',
        'municipality',
        'brgy'
    ];

     public function images()
    {
        return $this->hasMany(SkImage::class, 'sk_id');
    }

    public function primaryImage()
    {
        return $this->hasOne(SkImage::class, 'sk_id')->where('is_primary', true);
    }
}
