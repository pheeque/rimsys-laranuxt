<?php

namespace Tests\Feature;

use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SkillTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_list_skills()
    {
        $response = $this->get('/skills');

        $response->assertStatus(200);
    }

    public function test_add_skill()
    {
        $response = $this->post('/skills/add', [
            'name' => $this->faker()->text,
            'level' => $this->faker()->numberBetween(0, 2),
        ]);

        $response->assertCreated();
    }

    public function test_delete_skill()
    {
        $skill = Skill::factory()->create();

        $response = $this->delete('/skills/' . $skill->id);

        $response->assertOk();

        $this->assertDeleted('skills', [
            'id' => $skill->id,
        ]);
    }
}
