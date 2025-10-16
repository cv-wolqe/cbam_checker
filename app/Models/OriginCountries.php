<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OriginCountries extends Model
{
    /** @use HasFactory<\Database\Factories\OriginCountriesFactory> */
    use HasFactory;

    protected $table = 'origin_countries';

    protected $fillable = [
        'country_code',
        'country_name',
        'cbam',
        'import_country',
    ];
}
