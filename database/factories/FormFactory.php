<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form>
 */
class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'form' => file_get_contents(base_path("forms-examples.json")),
        ];
    }

    public function published()
    {
        return $this->state(function () {
            return [
                'published_at' => Carbon::now()
            ];
        });
    }
}
