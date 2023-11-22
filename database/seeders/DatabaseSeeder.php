<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Bouncer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),

            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator',
        ]);

        $admin_abilities = Bouncer::ability()->firstOrCreate([
            'name' => 'create-games',
            'title' => 'Create new game ',
        ]);

        Bouncer::allow($admin)->to($admin_abilities);

        $user = User::first();

        Bouncer::assign('admin')->to($user);
    }
}
