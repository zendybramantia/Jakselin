<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Category;
use App\Models\WisataKuliner;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Azhar Baihaqi Nugraha',
            'email' => 'azhar03456789@gmail.com',
            'nohp' => '081223727292',
            'username' => 'azhar03212',
            'password' => bcrypt('azhar03.,')
        ]);


        // Seeding User
        $faker = Faker::create('id_ID');
        echo 'Seeding User\n';
        $userTemporary = [];
        for ($i = 0; $i < 30; $i += 1) {
            $user = User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'username' => $faker->userName(),
                'nohp' => '23232323',
                'avatar' => 'images/profile.jpg',
                'password' => bcrypt('123')
            ]);
            array_push($userTemporary, $user);
        }

        Category::create([
            'name' => 'Cepat Saji'
        ]);
        Category::create([
            'name' => 'Cafe'
        ]);
        Category::create([
            'name' => 'Fine Dining'
        ]);
        Category::create([
            'name' => 'Kaki Lima'
        ]);
        Category::create([
            'name' => 'Bakery'
        ]);

        // WisataKuliner::create([
        //     'nama_tempat' => 'Lawles',
        //     'category_id' => 1,
        //     'alamat' => 'Kemang',
        //     'deskripsi' => 'Makanan cepat saji, yang main menunya adalah burger',
        //     'gambar' => 'https://source.unsplash.com/food/burger'
        // ]);
        WisataKuliner::factory(100)->create();
        User::factory(10)->create();
    }
}
