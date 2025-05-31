<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    protected $casts = [
        'links' => 'array',
        'images' => 'array'
    ];
    protected $guarded = [];

    function items(): HasMany
    {
        return $this->hasMany(VendorItem::class);
    }
}
