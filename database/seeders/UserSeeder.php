<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use PhpParser\Builder\Use_;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = Factory::create('id_ID');
        User::create([
            'name' =>$faker->name(),
            'email' => $faker->name().'@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => $faker->phoneNumber(),
            'role' => 'Admin',

        ]);
    }
}
