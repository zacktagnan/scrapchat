<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chatbot>
 */
class ChatbotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'user_id' => User::factory(),
            'system_prompt' => fake()->paragraph(),
            'temperature' => fake()->randomFloat(1, 0, 1),
            'model' => fake()->word(),
        ];
    }
}
