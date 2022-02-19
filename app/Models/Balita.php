<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Balita extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nama_lengkap',
        'no_kk',
        'nik',
        "tempat_lahir",
        "tanggal_lahir",
        "jenis_kelamin",
        "ibu",
        "ayah",
        "wali",
        "alamat",
        "berat_lahir",
        "tinggi_lahir",
        "posyandu",
        "keterangan",
    ];
}
