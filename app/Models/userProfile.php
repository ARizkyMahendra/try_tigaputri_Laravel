<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userProfile extends Model
{
    use HasFactory;
    protected $table = 'user_profiles';
    public $timestapms = true;
    protected $fillable = [
        'ktp',
        'nama',
        'posisi',
        'umur',
        'agama',
        'no_tlp',
        'no_tlp',
        'status',
        'images',
        'images',
        'status',
    ];
    protected $hidden;
}
