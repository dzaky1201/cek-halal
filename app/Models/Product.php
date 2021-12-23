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

    public function scopeSearching($query, array $searching)
    {
        if (isset($searching['search']) ? $searching['search'] : false) {
            return $query->where('name', 'like', '%' . $searching['search'] . '%');
        }

        $query->when($searching['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        });
    }

    // buat filter halal
    public function scopeHalal($query)
    {
        if (request('is_halal') == 'true') {
            return $query->where('is_halal', '=', 'true');
        } else {
            return $query->where('is_halal', '=', 'false');
        }
    }
}
