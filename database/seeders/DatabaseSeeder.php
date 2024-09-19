<?php

namespace Database\Seeders;

use App\Models\Department;
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
//         User::factory(10)->make()->each(function ($u){
//             Department::factory(3)->create([
//                 'leader_id' => $u->id
//             ]);
//         });

        User::factory()->create([
            'name' => 'Test User',
            'username' => 'test_user',
        ]);
    }
}
