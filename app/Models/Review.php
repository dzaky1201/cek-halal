<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearching($query, array $searching)
    {
        $query->when($searching['search'] ?? false, function ($query, $search) {
            return $query->whereHas('product', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        });
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
