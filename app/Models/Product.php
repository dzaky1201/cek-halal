<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function scopeSearching($query, array $searching)
    {
        $query->when($searching['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        });

        $query->when($searching['is_halal'] ?? false, function ($query, $is_halal) {
            return $query->where('is_halal', '=', $is_halal);
        });

        $query->when($searching['all'] ?? false, function () {
            return Product::all();
        });
    }
}
