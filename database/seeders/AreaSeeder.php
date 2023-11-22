<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['name' => 'Aceh'],
            ['name' => 'North Sumatra'],
            ['name' => 'West Sumatra'],
            ['name' => 'Riau'],
            ['name' => 'Jambi'],
            ['name' => 'South Sumatra'],
            ['name' => 'Bengkulu'],
            ['name' => 'Lampung'],
            ['name' => 'Bangka Belitung'],
            ['name' => 'Riau Islands'],
            ['name' => 'Jakarta'],
            ['name' => 'West Java'],
            ['name' => 'Central Java'],
            ['name' => 'East Java'],
            ['name' => 'Banten'],
            ['name' => 'Bali'],
            ['name' => 'West Nusa Tenggara'],
            ['name' => 'East Nusa Tenggara'],
            ['name' => 'West Kalimantan'],
            ['name' => 'Central Kalimantan'],
            ['name' => 'South Kalimantan'],
            ['name' => 'East Kalimantan'],
            ['name' => 'North Kalimantan'],
            ['name' => 'North Sulawesi'],
            ['name' => 'Gorontalo'],
            ['name' => 'West Sulawesi'],
            ['name' => 'Central Sulawesi'],
            ['name' => 'South Sulawesi'],
            ['name' => 'Southeast Sulawesi'],
            ['name' => 'North Maluku'],
            ['name' => 'Maluku'],
            ['name' => 'Papua'],
            ['name' => 'West Papua'],
        ];
        
    
        foreach($provinces as $province) {
            Area::insert($province);
        }
        
    }
}
