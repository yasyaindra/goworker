<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Sweeping and Mopping Floors',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Vacuuming Carpets and Rugs',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Dusting Surfaces',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Cleaning Windows',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Washing Dishes',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Cleaning Bathrooms',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Laundry and Ironing',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Decluttering Rooms',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Organizing Closets and Storage Spaces',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Arranging Furniture',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Basic Plumbing Repairs',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Changing Light Bulbs',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Painting Rooms or Furniture',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Mowing the Lawn',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Trimming Hedges and Bushes',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Raking Leaves',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Planting Flowers or Garden Maintenance',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Grocery Shopping',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Picking Up Prescriptions',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Mail and Package Delivery',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Dog Walking',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Pet Sitting',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Feeding and Grooming Pets',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Setting Up or Troubleshooting Electronic Devices',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Computer Help',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Babysitting',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Homework Assistance',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Furniture Assembly',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Home Organization Projects',
                'service_pic' => 'household_task.jpg'
            ],
            [
                'name' => 'Moving Assistance',
                'service_pic' => 'household_task.jpg'
            ],
        ];


        foreach($services as $service) {
            Service::insert($service);
        }
    }
}
