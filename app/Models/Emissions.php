<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emissions extends Model
{
    /** @use HasFactory<\Database\Factories\EmissionsFactory> */
    use HasFactory;

    protected $table = 'emissions';

    protected $fillable = [
        'cn_code',
        'direct_emission',
        'indirect_emission',
        'total_emission',
    ];

}
