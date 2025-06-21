<?php

namespace Database\Factories;

use App\Enums\VendorType;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendorFactory extends Factory
{
    protected $model = Vendor::class;

    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'description' => fake()->paragraph(),
            'type' => fake()->randomElement(VendorType::cases()),
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'instagram' => 'https://instagram.com/' . fake()->userName(),
            'links' => [
                'website' => fake()->url(),
            ],
            'images' => [
                fake()->imageUrl(640, 480, 'wedding'),
                fake()->imageUrl(640, 480, 'wedding'),
                fake()->imageUrl(640, 480, 'wedding'),
            ],
        ];
    }

    public function venue()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => VendorType::Venue,
                'name' => fake()->randomElement(['Grand Ballroom ' . fake()->lastName(), 'The ' . fake()->lastName() . ' Hotel', fake()->lastName() . ' Convention Center']),
            ];
        });
    }

    public function catering()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => VendorType::Catering,
                'name' => fake()->randomElement(['Catering ' . fake()->lastName(), fake()->lastName() . ' Kitchen', 'Dapur ' . fake()->firstName()]),
            ];
        });
    }

    public function mc()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => VendorType::MasterOfCeremony,
                'name' => fake()->name(),
            ];
        });
    }

    public function decoration()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => VendorType::Decoration,
                'name' => fake()->randomElement([fake()->lastName() . ' Decoration', 'Dekor ' . fake()->lastName(), fake()->lastName() . ' Wedding Decor']),
            ];
        });
    }

    public function photographer()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => VendorType::Photographer,
                'name' => fake()->randomElement([fake()->lastName() . ' Photography', fake()->lastName() . ' Photo', 'Foto ' . fake()->lastName()]),
            ];
        });
    }

    public function music()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => VendorType::Music,
                'name' => fake()->randomElement([fake()->lastName() . ' Entertainment', fake()->lastName() . ' Music', 'Music by ' . fake()->lastName()]),
            ];
        });
    }

    public function videographer()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => VendorType::Videographer,
                'name' => fake()->randomElement([fake()->lastName() . ' Films', fake()->lastName() . ' Video', 'Cinema ' . fake()->lastName()]),
            ];
        });
    }
}