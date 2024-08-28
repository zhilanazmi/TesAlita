<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Locations;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Locations::create([
            'code' => 'JKT',
            'name' => 'Jakarta',
        ]);
        Locations::create([
            'code' => 'BDG',
            'name' => 'Bandung',
        ]);
        Locations::create([
            'code' => 'SMG',
            'name' => 'Semarang',
        ]);
        Locations::create([
            'code' => 'SRB',
            'name' => 'Surabaya',
        ]);
    }
}
