<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LydcMember;

class Youth extends Model
{
    use HasFactory;

    protected $table = 'youth';

    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'facebook_page',
        'registered_count',
        'lydp_status',
        'type',
        'municipality',
        'brgy',
        'file_plan'
    ];

     public function members()
    {
        return $this->hasMany(LydcMember::class); // LYDO has many members
    }

    public function images()
    {
        return $this->hasMany(YouthImage::class);
    }

    public function profileImage()
    {
        return $this->hasOne(YouthImage::class)->where('is_primary', true);
    }
}
