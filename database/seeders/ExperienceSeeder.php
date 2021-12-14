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
        collect([
            [
                'company' => 'Pheeque Company',
                'position' => 'Team Lead | 2011 - Present',
                'description' => "The Pheeque Company is a full service website design and development agency. I develop and market the firm's products. I also run the web services business of the firm where my team and I design and develop websites and applications for businesses in the oil industry, information technology industry as well as government institutions.",
            ],
            [
                'company' => 'GiteSoft',
                'position' => 'Software Engineer [Remote] | June 2019 - May 2020',
                'description' => "- Architect and develop new software products alongside other engineers for a wide variety of clients across multiple industry verticals.

                - Built and maintained a custom project management application using TDD principles, processing millions of dollars of monthly billables across multiple departments for the customer.",
            ],
            [
                'company' => 'Zeesoft Limited',
                'position' => 'Lead Developer | March 2013 - May 2013',
                'description' => "Developed a content management system borrowing ideas from ExpressionEngine and Wordpress with focus on the insurance industry, deployed to some of the biggest firms in the country",
            ],
            [
                'company' => 'Proshare Nigeria',
                'position' => 'Lead Software Developer | October 2010 - December 2010',
                'description' => "Oversaw the development of the custom content management system used by Nigeria’s most visited financial publishing site.",
            ],
            [
                'company' => 'Abinibi Multimedia',
                'position' => 'Backend Developer | January 2010 - October 2010',
                'description' => "Built and maintained the back-end framework along with several third party API integrations used on all of the firm's websites for its clients.",
            ],
        ])->each(fn ($item) => Experience::create($item));
    }
}
