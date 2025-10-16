<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriesFactory> */
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'category_name',
    ];
    public function cnCodes()
    {
        return $this->hasMany(CnCode::class, 'main_category_id');
    }
}
