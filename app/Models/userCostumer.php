<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userCostumer extends Model
{
    use HasFactory;
protected $table = 'user_costumers';
protected $timestapms = true;

protected $fillable = [
    'nama',
    'kurir',
    'alamat',
    'alergi',
    'paket',
    'no_tlp',
    'tgl_mulai',
    'tgl_selesai',
    'keterangan',
];
protected $hidden;
}