<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
    'id',
    'nama_lengkap',
    'tempat_lahir',
    'tanggal_lahir',
    'alamat',
    'asal_sekolah',
    'email',
    'foto',
    'scan_kk',
    'timestamps'
    ];
}
