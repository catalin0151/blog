<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $adminRole = Role::create([
            'name' => 'admin',
            'slug' => 'admin',
        ]);
        Role::create([
            'name' => 'user',
            'slug' => 'user'
        ]);
        Role::create([
            'name' => 'author',
            'slug' => 'author'
        ]);
        User::create([
            'name' => 'Catalin Ciobanu',
            'email' => 'cash0151@gmail.com',
            'password' => Hash::make('admin'),
            'role_id' => $adminRole->id,
        ]);
        $faker = Faker::create();
        foreach(range(1,10) as $user) {
            User::create([
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('admin'),
                'role_id' => $adminRole->id,
            ]);
        }

    }
}
