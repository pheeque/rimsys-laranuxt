<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'institution' => 'University of Lagos',
            'year' => 'BSc Economics | 2015 - 2019',
        ]);
    }
}
