<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
