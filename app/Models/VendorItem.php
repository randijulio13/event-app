<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VendorItem extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'images' => 'array',
    ];

    function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }
}
