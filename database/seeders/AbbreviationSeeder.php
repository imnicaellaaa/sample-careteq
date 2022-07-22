<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbbreviationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abbreviations')->insert([
            [
                'id'                => '1',
                'abbreviation'     => "Dr.",
                'description'       => "Doctor",
            ],

            [
                'id'                => '2',
                'abbreviation'     => "Dra.",
                'description'       => "Doctora",
            ],
        ]);
    }
}
