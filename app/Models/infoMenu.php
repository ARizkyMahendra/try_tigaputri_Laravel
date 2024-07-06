<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoMenu extends Model
{
    use HasFactory;
    protected $table = 'info_menus';
    protected $timestapms = true;

    protected $fillable = [
        'images',
        'status',
    ];
    protected $hidden;
}
