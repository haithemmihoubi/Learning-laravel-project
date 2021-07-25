<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorieTableSeeder::class,
            ProductTableSeeder::class,
            CustomerTableSeeder::class,
            OrderTableSeeder::class,
            OrderDetailTableSeeder::class,


        ]);
    }
}
