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
        User::factory(1)->create([
            'username' => 'test_user2',
            'role' => 'supervisor'
        ])->each(function ($u){
            Media::factory(10)->create([
                'sender_id' => $u->id,
                'user_id' => 11
            ]);
        });
        User::factory(9)->create()->each(function ($u){
            Media::factory(10)->create([
                'sender_id' => $u->id,
                'user_id' => 11
            ]);
        });

        Media::factory(20)->create([
            'sender_id' => rand(1,11),
            'department_id' => 1
        ]);

        for ($i = 2; $i < 12; $i++) {
            Task::factory(10)->create([
                'user_id' => $i,
            ]);
        }

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

        $users = User::all();

        foreach ($users as $user){

            $tasks = $user->tasks->filter(function ($t){
                return $t->status == 3;
            });

            $count = $tasks->count();

            if ($count !== 0){
                $on_time = $tasks->filter(function ($t){
                    // todo: compare time here
                    $dead = strtotime($t->deadline);
                    $submit = strtotime($t->submit_at);
                    return $submit <= $dead;
                })->count();
                $rate = ($on_time/$count) * 100;
                $user->rate = $rate;
                $user->save();
            }
        }
    }
}
