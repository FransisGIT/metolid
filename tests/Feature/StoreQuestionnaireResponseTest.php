<?php

namespace Tests\Feature;

use App\Models\QuestionnaireResponse;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreQuestionnaireResponseTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_stores_a_questionnaire_response(): void
    {
        $payload = [
            'respondent_role' => 'student',
            'familiarity' => 'very_familiar',
            'purpose' => 'improve_nutrition',
            'information_source' => 'social_media',
            'expected_benefit' => 'better_nutrition',
            'improvement_priority' => 'menu_quality',
        ];

        $response = $this->post(route('questionnaire-responses.store'), $payload);

        $response->assertRedirect(route('home'));
        $response->assertSessionHas('success', 'Jawaban berhasil disimpan.');

        $this->assertDatabaseHas((new QuestionnaireResponse())->getTable(), $payload);
    }

    public function test_it_requires_all_questionnaire_fields(): void
    {
        $response = $this->post(route('questionnaire-responses.store'), []);

        $response->assertSessionHasErrors([
            'respondent_role',
            'familiarity',
            'purpose',
            'information_source',
            'expected_benefit',
            'improvement_priority',
        ]);
    }
}
