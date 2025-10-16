<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AggregatedCategories extends Model
{
    /** @use HasFactory<\Database\Factories\AggregatedCategoriesFactory> */
    use HasFactory;

    protected $table = 'aggregated_categories';

    protected $fillable = [
        'aggregated_category_name',
    ];
    public function cnCodes()
    {
        return $this->hasMany(CnCode::class, 'aggregated_category_id');
    }
}
