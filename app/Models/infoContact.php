<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoContact extends Model
{
    use HasFactory;
    protected $table = 'info_contacts';
    protected $timestapms = true;

    protected $fillable = [
        'name',
        'url',
    ];
    protected $hidden;
}
