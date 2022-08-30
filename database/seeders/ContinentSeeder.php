<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $continent = [
            [
                'name' => 'North America'
            ],
            [
                'name' => 'South America'
            ],
            [
                'name' => 'Europe'
            ],

        ];
        Continent::insert($continent);
    }
}
