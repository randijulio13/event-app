<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\VendorItem;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    public function run(): void
    {
        // Create Venues (3 venues, each with 3 packages)
        Vendor::factory()
            ->count(3)
            ->venue()
            ->has(
                VendorItem::factory()
                    ->count(3)
                    ->venue(),
                'items'
            )
            ->create();

        // Create Catering Services (5 caterings, each with 3 packages)
        Vendor::factory()
            ->count(5)
            ->catering()
            ->has(
                VendorItem::factory()
                    ->count(3)
                    ->catering(),
                'items'
            )
            ->create();

        // Create MCs (4 MCs, each with 3 packages)
        Vendor::factory()
            ->count(4)
            ->mc()
            ->has(
                VendorItem::factory()
                    ->count(3)
                    ->mc(),
                'items'
            )
            ->create();

        // Create Decorators (3 decorators, each with 4 packages)
        Vendor::factory()
            ->count(3)
            ->decoration()
            ->has(
                VendorItem::factory()
                    ->count(4)
                    ->decoration(),
                'items'
            )
            ->create();

        // Create Photographers (4 photographers, each with 4 packages)
        Vendor::factory()
            ->count(4)
            ->photographer()
            ->has(
                VendorItem::factory()
                    ->count(4)
                    ->photographer(),
                'items'
            )
            ->create();

        // Create Music/Entertainment (3 music vendors, each with 3 packages)
        Vendor::factory()
            ->count(3)
            ->music()
            ->has(
                VendorItem::factory()
                    ->count(3)
                    ->music(),
                'items'
            )
            ->create();

        // Create Videographers (3 videographers, each with 3 packages)
        Vendor::factory()
            ->count(3)
            ->videographer()
            ->has(
                VendorItem::factory()
                    ->count(3)
                    ->videographer(),
                'items'
            )
            ->create();
    }
}