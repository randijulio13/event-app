<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VendorItem extends Model
{
    protected $guarded = [];
    protected $casts = [
        'links' => 'array',
    ];

    function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }
}
