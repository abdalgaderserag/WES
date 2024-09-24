<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'creator_id' => rand(0,1),
            'title' => $this->faker->name,
            'deadline' => now()->addHours(random_int(1,8)),
            'description' => $this->faker->paragraph,
            'attachments' => '',
            'status' => rand(1,2)
        ];
    }
}
