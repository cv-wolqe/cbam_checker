<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CnCode extends Model
{
    use HasFactory;

    protected $table = 'cn_codes';

    protected $fillable = [
        'main_category_id',
        'aggregated_category_id',
        'cn_code',
        'product_name',
        'cbam_applies',
        'indirect_emmission',
        'quantity_id',
        'country_id',
        'installation_id',
        'special_provisions',
        'production_route',
        'production_route_old',
        'precursors',
        'extra_data',
        'indirect_emission_data',
        'data_quality',
        'carbon_price_abroad',
    ];
    public function quantity()
    {
        return $this->belongsTo(Quantities::class, 'quantity_id');
    }
    public function aggregatedCategory()
    {
        return $this->belongsTo(AggregatedCategories::class, 'aggregated_category_id');
    }
    public function mainCategory()
    {   
        return $this->belongsTo(Categories::class, 'main_category_id');
    }
}
