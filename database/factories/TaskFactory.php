<?php

namespace Database\Factories;

use App\Models\Media;
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
        $status = rand(1,3);
        $data = [
            'creator_id' => 1,
            'title' => $this->faker->name,
            'deadline' => now()->addHours(random_int(1,8)),
            'description' => $this->faker->paragraph,
            'attachments' => '',
            'status' => $status
        ];

        if ($status == 3 || $status == 2){
            $media = new Media([
                'sender_id' => rand(1,11),
                'text' => $this->faker->paragraph
            ]);
            $media->save();
            $data = array_merge($data,[
                'submit_at' => now()->addHours(random_int(1,8)),
                'submit_id' => $media->id,
            ]);
        }
        return $data;
    }
}
