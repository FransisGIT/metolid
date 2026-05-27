<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionnaireResponseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'respondent_role' => ['required', 'in:student,teacher,parent,public'],
            'familiarity' => ['required', 'in:very_familiar,heard_of_it,less_familiar,first_time'],
            'purpose' => ['required', 'in:improve_nutrition,help_family_economy,improve_learning'],
            'information_source' => ['required', 'in:social_media,online_news,school_campus,family_friends'],
            'expected_benefit' => ['required', 'in:better_nutrition,increased_learning,save_family_budget,equal_access'],
            'improvement_priority' => ['required', 'in:menu_quality,target_accuracy,distribution_time,socialization'],
        ];
    }
}
