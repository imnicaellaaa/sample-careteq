<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            GenderSeeder::class,
            TitleSeeder::class,
            IdTypeSeeder::class,
            MemberCategorySeeder::class,
            AdminSeeder::class,
            AbbreviationSeeder::class,
            SpecializationSeeder::class,
        ]);
    }
}
