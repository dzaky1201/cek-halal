<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url_website'

    ];

    public function scopeSearching($query, array $searching)
    {
        $query->when($searching['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        });
    }
}
