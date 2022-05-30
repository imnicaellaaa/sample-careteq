<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            [
                'id'            => '1',
                'name'          => 'Mr.',
            ],

            [
                'id'            => '2',
                'name'          => 'Ms.',
            ],

            [
                'id'            => '3',
                'name'          => 'Mrs.',
            ],

            [
                'id'            => '4',
                'name'          => 'Father',
            ],
        ]);
    }
}
