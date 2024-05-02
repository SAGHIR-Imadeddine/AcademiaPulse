<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::factory(25)->create([
        //     'classe_id' => 1,
        //     'role_id' => 3,
        // ]);

        // Role::create(['name'=>'admin']);
        // Role::create(['name'=>'teacher']);
        // Role::create(['name'=>'student']);
        // Role::create(['name'=>'parent']);

        // User::factory()->create([
        //     'email' => 'admin@mail.co',
        //     'role_id' => 1,
        // ]);

        // User::factory()->create([
        //     'email' => 'teacher@mail.co',
        //     'role_id' => 2,
        // ]);

        // User::factory()->create([
        //     'email' => 'student@mail.co',
        //     'role_id' => 3,
        // ]);

        // User::factory()->create([
        //     'email' => 'parent@mail.co',
        //     'role_id' => 4,
        // ]);

        $parents = User::factory()
        ->count(10)
        ->create([
            'role_id' => 4,
        ]);

        foreach ($parents as $parent) {

            User::factory()
            ->count(3)
            ->create([
                'classe_id' => '1',
                'parent_id' => $parent->id,
                'role_id' => 3,
            ]);    
        }

        User::factory()->count(8)->create([
            'role_id' => 2,
        ]);

    }
}
