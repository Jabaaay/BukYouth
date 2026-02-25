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

}
