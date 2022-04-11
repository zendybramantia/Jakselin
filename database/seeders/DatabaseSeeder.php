<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create('id_ID');


        // Seeding User
        echo "Seeding User\n";
        $userTemporary = [];
        for ($i = 0; $i < 30; $i += 1) {
            $user = User::create([
                'nama' => $faker->name(),
                'email' => $faker->email(),
                'username' => $faker->userName(),
                'nohp' => "23232323",
                'avatar' => "images/profile.jpg",
                'password' => bcrypt($faker->password())
            ]);
            array_push($userTemporary, $user);
        }
    }
}
