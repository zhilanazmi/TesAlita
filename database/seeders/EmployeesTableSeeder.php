<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employees::create([
            'name' => 'Lily Stark',
            'location_code' => 'JKT',
            'birth_date' => '2000-12-31',
        ]);

        Employees::create([
            'name' => 'Evan Roger',
            'location_code' => 'JKT',
            'birth_date' => '1990-10-01',
        ]);

        Employees::create([
            'name' => 'George Alvin',
            'location_code' => 'JKT',
            'birth_date' => '1995-12-23',
        ]);
        Employees::create([
            'name' => 'Logan Krolak',
            'location_code' => 'BDG',
            'birth_date' => '1998-02-27',
        ]);
        Employees::create([
            'name' => 'Scarlet Snow',
            'location_code' => 'SRB',
            'birth_date' => '1996-06-05',
        ]);
        Employees::create([
            'name' => 'Robert London',
            'location_code' => 'SMG',
            'birth_date' => '1978-05-06',
        ]);

        
    }
}
