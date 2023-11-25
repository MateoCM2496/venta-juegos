<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Platform;
use App\Models\PayMethod;
use App\Models\StatusSale;


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

        $platforms = [
            ['name' => 'XBOX' ],
            ['name' => 'PSN'],
            ['name' => 'NINTENDO']
        ];
        foreach ($platforms as $platform) {
            Platform::create($platform);
        }

         
        $pay_methods = [
            ['info_pay_method' => 'Tarjeta Credito' ],
            ['info_pay_method' => 'Tarjeta Debito' ],
            ['info_pay_method' => 'Paypal' ],
        ];
        foreach ($pay_methods as $pay_method) {
            PayMethod::create($pay_method);
        }

        $status_sales = [
            ['name' => 'Aprovado'],
            ['name' => 'Desaprovado'],
            ['name' => 'Pendiente'],
        ];
        foreach ($status_sales as $status_sale) {
            StatusSale::create($status_sale);
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
