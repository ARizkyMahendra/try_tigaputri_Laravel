<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoAlamat extends Model
{
    use HasFactory;
    protected $table = 'info_Address';
    public $timestapms = true;
    protected $fillable = [
        'link_maps',
        'name',
        'address',
        'no_tlp',
        'images',
    ];
    protected $hidden;
}
