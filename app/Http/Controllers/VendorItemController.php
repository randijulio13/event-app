<?php

namespace App\Http\Controllers;

use App\Models\VendorItem;
use Illuminate\Http\Request;

class VendorItemController extends Controller
{
    public function getByType($type)
    {
        $items = VendorItem::with('vendor')
            ->whereHas('vendor', function ($query) use ($type) {
                $query->where('type', $type);
            })
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'description' => $item->description,
                    'price' => $item->price,
                    'type' => $item->vendor->type,
                    'image' => $item->images[0] ?? null,
                    'vendor' => [
                        'id' => $item->vendor->id,
                        'name' => $item->vendor->name
                    ]
                ];
            });

        return response()->json($items);
    }
}
