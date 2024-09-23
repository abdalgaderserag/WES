<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Media;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create()->each(function ($u){
            Media::factory(10)->create([
                'sender_id' => $u->id,
                'user_id' => 11
            ]);
        });

        Media::factory(20)->create([
            'sender_id' => rand(1,11),
            'department_id' => 1
        ]);

        Task::factory(10)->create([
            'user_id' => 11,
        ]);

        Department::factory()->create([
            'leader_id' => 1
        ]);

        Department::factory()->create([
            'leader_id' => 2
        ]);

        Department::factory()->create([
            'leader_id' => 3
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'username' => 'test_user',
        ]);

        Media::factory(5)->create([
            'sender_id' => 11,
            'department_id' => 1
        ]);
    }
}
