<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_name',
        'specialized',
        'experience',
        'about_me',
        'first_address',
        'second_address',
        'third_address',
        'first_phone',
        'second_phone',
        'photo_path',
        'domain',
    ];
}
