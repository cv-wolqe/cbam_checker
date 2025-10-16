<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantities extends Model
{
    /** @use HasFactory<\Database\Factories\QuantitiesFactory> */
    use HasFactory;

    protected $table = 'quantities';

    protected $fillable = [
        'quantity_description',
    ];
    public function cnCodes()
    {
        return $this->hasMany(CnCode::class, 'quantity_id');
    }
}
