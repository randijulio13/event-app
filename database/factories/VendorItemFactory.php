<?php

namespace Database\Factories;

use App\Models\VendorItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendorItemFactory extends Factory
{
    protected $model = VendorItem::class;

    public function definition(): array
    {
        return [
            'name' => 'Paket ' . fake()->randomElement(['Bronze', 'Silver', 'Gold', 'Platinum', 'Diamond']),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(3000000, 50000000),
            'images' => [
                fake()->imageUrl(640, 480, 'wedding'),
                fake()->imageUrl(640, 480, 'wedding'),
            ],
        ];
    }

    public function venue()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => fake()->randomElement(['Paket Wedding Basic', 'Paket Wedding Premium', 'Paket Wedding Exclusive']),
                'description' => fake()->paragraph() . "\n\nFasilitas:\n- " . implode("\n- ", [
                    'Kapasitas ' . fake()->numberBetween(100, 1000) . ' tamu',
                    'Free parkir',
                    'Full AC',
                    'Ruang rias',
                    'Ruang tunggu keluarga',
                    fake()->randomElement(['Free lighting', 'Free sound system basic', 'Free generator']),
                ]),
                'price' => fake()->numberBetween(15000000, 50000000),
            ];
        });
    }

    public function catering()
    {
        return $this->state(function (array $attributes) {
            $pax = fake()->numberBetween(100, 500);
            return [
                'name' => 'Paket ' . fake()->randomElement(['Reguler', 'Premium', 'VIP']) . ' ' . $pax . ' Pax',
                'description' => fake()->paragraph() . "\n\nMenu:\n- " . implode("\n- ", [
                    fake()->numberBetween(3, 5) . ' Main Course',
                    fake()->numberBetween(2, 4) . ' Appetizer',
                    fake()->numberBetween(2, 3) . ' Dessert',
                    'Free Soft Drinks',
                    fake()->randomElement(['Fruit Punch', 'Ice Cream Station', 'Coffee & Tea Station']),
                ]),
                'price' => $pax * fake()->numberBetween(35000, 75000),
            ];
        });
    }

    public function mc()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'Paket ' . fake()->randomElement(['Basic', 'Standard', 'Premium']),
                'description' => fake()->paragraph() . "\n\nIncluded:\n- " . implode("\n- ", [
                    'Professional MC',
                    'Rehearsal Meeting',
                    'Rundown Meeting',
                    fake()->randomElement(['Free Assistant MC', 'Bilingual MC', 'Special Performance']),
                ]),
                'price' => fake()->numberBetween(3000000, 10000000),
            ];
        });
    }

    public function decoration()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'Paket ' . fake()->randomElement(['Minimalis', 'Modern', 'Luxury', 'Royal']),
                'description' => fake()->paragraph() . "\n\nDekorasi:\n- " . implode("\n- ", [
                    'Pelaminan ' . fake()->numberBetween(6, 12) . ' meter',
                    'Mini Garden',
                    'Photo Area',
                    'Welcome Sign',
                    fake()->randomElement(['Free Flower Hand Bouquet', 'Free Gate Decoration', 'Free Table Setting']),
                ]),
                'price' => fake()->numberBetween(15000000, 45000000),
            ];
        });
    }

    public function photographer()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'Paket ' . fake()->randomElement(['Basic', 'Standard', 'Premium', 'Exclusive']),
                'description' => fake()->paragraph() . "\n\nIncluded:\n- " . implode("\n- ", [
                    fake()->numberBetween(1, 3) . ' Photographer',
                    'Unlimited Shot',
                    'All File in HD',
                    fake()->numberBetween(50, 150) . ' Edit Photo',
                    'Photobook ' . fake()->randomElement(['20x30', '25x30', '30x30']),
                    fake()->randomElement(['Free Prewedding', 'Free Canvas', 'Free Album Parents']),
                ]),
                'price' => fake()->numberBetween(5000000, 15000000),
            ];
        });
    }

    public function music()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'Paket ' . fake()->randomElement(['Basic Band', 'Full Band', 'Premium Entertainment']),
                'description' => fake()->paragraph() . "\n\nIncluded:\n- " . implode("\n- ", [
                    fake()->numberBetween(3, 8) . ' Musicians',
                    fake()->numberBetween(1, 3) . ' Singers',
                    'Sound System',
                    fake()->randomElement(['Free MC', 'Free Saxophone', 'Free Special Performance']),
                ]),
                'price' => fake()->numberBetween(5000000, 20000000),
            ];
        });
    }

    public function videographer()
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'Paket ' . fake()->randomElement(['Cinema', 'Documentary', 'Storytelling']),
                'description' => fake()->paragraph() . "\n\nIncluded:\n- " . implode("\n- ", [
                    fake()->numberBetween(1, 3) . ' Videographer',
                    'Same Day Edit',
                    'Full Video Documentation',
                    'Cinematic Edit',
                    fake()->randomElement(['Free Drone Shot', 'Free Pre-wedding Video', 'Free Behind the Scene']),
                ]),
                'price' => fake()->numberBetween(7000000, 25000000),
            ];
        });
    }
}