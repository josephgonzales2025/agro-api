<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function subcategories(): HasMany
    {
        return $this->hasMany(Subcategory::class, 'category_id');
    }
    public function blog(): HasMany
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
