<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Sweeping and Mopping Floors',
                'Vacuuming Carpets and Rugs',
                'Dusting Surfaces',
                'Cleaning Windows',
                'Washing Dishes',
                'Cleaning Bathrooms',
                'Laundry and Ironing',
                'Decluttering Rooms',
                'Organizing Closets and Storage Spaces',
                'Arranging Furniture',
                'Basic Plumbing Repairs',
                'Changing Light Bulbs',
                'Painting Rooms or Furniture',
                'Mowing the Lawn',
                'Trimming Hedges and Bushes',
                'Raking Leaves',
                'Planting Flowers or Garden Maintenance',
                'Grocery Shopping',
                'Picking Up Prescriptions',
                'Mail and Package Delivery',
                'Dog Walking',
                'Pet Sitting',
                'Feeding and Grooming Pets',
                'Setting Up or Troubleshooting Electronic Devices',
                'Computer Help',
                'Babysitting',
                'Homework Assistance',
                'Furniture Assembly',
                'Home Organization Projects',
                'Moving Assistance',
            ]),
            'service_pic' => fake()->imageUrl(640, 480, 'animals', true)
        ];
    }
}
