<?php

namespace Tests\Feature;

use App\Models\Education;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EducationTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_list_education()
    {
        $response = $this->get('/education');

        $response->assertOk();
    }

    public function test_add_education()
    {
        $response = $this->post('/education/add', [
            'institution' => $this->faker()->text,
            'year' => $this->faker()->year,
        ]);

        $response->assertCreated();
    }

    public function test_delete_education()
    {
        $education = Education::factory()->create();

        $response = $this->delete('/education/' . $education->id);

        $response->assertOk();

        $this->assertDeleted('education', [
            'id' => $education->id,
        ]);
    }
}
