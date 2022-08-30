<?php

namespace Database\Seeders;

use App\Models\ProfessorTitle;
use Illuminate\Database\Seeder;

class ProfessorTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professorTitleSeeder = [
            [
                'name' => 'Full Professor'
            ],
            [
                'name' => 'Associate Professor'
            ],
            [
                'name' => 'Assistant Professor'
            ],

        ];
        ProfessorTitle::insert($professorTitleSeeder);
    }
}
