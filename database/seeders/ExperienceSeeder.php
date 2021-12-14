<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'company' => 'Pheeque Company',
            'position' => 'Team Lead | 2011 - Present',
            'description' => "The Pheeque Company is a full service website design and development agency. I develop and market the firm's products. I also run the web services business of the firm where my team and I design and develop websites and applications for businesses in the oil industry, information technology industry as well as government institutions.",
        ]);
    }
}
