<?php

namespace Database\Seeders;

use App\Enums\SkillLevel;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
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
                'name' => 'PHP | Laravel',
                'level' => SkillLevel::Expert,
            ],
            [
                'name' => 'Javascript | React | Vue',
                'level' => SkillLevel::Expert,
            ],
            [
                'name' => 'Rust | C++',
                'level' => SkillLevel::Intermediate,
            ],
            [
                'name' => 'Flutter | React Native',
                'level' => SkillLevel::Intermediate,
            ],
        ])->each(fn ($item) => Skill::create($item));
    }
}
