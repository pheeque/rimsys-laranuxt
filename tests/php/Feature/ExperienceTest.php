<?php

namespace Tests\Feature;

use App\Models\Experience;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExperienceTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_list_experiences()
    {
        $response = $this->get('/experiences');

        $response->assertStatus(200);
    }

    public function test_add_experience()
    {
        $response = $this->post('/experiences/add', [
            'company' => $this->faker()->company(),
            'position' => $this->faker()->text(),
            'description' => $this->faker()->text(),
        ]);

        $response->assertCreated();
    }

    public function test_delete_experience()
    {
        $experience = Experience::factory()->create();

        $response = $this->delete('/experiences/' . $experience->id);

        $response->assertOk();

        $this->assertDeleted('experiences', [
            'id' => $experience->id,
        ]);
    }
}
