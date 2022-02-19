<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class p_z_score extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'usia',
        'min_3_sd',
        'min_2_sd',
        "min_1_sd",
        "median",
        "plus_1_sd",
        "plus_2_sd",
        "plus_3_sd",
    ];
}
