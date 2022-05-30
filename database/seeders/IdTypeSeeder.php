<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('i_d_types')->insert([
            [
                'id'            => '1',
                'name'          => "Voter's ID",
                'idno_format'   => "1234-5678B-C9101ESA100000"
            ],

            [
                'id'            => '2',
                'name'          => 'Passport',
                'idno_format'   => "P0000000A"
            ],

            [
                'id'            => '3',
                'name'          => "Drivers License",
                'idno_format'   => "NO3-12-123456"
            ],

            [
                'id'            => '4',
                'name'          => "Postal ID",
                'idno_format'   => "PRN 123456789101 P"
            ],

            [
                'id'            => '5',
                'name'          => "SSS/GSIS",
                'idno_format'   => "33-3333333-3 / 1234-1234567-1"
            ],

            [
                'id'            => '6',
                'name'          => "Tax Identification Number (TIN) Card",
                'idno_format'   => "012-345-567-0000"
            ],

            [
                'id'            => '7',
                'name'          => "Senior/PWDID",
                'idno_format'   => "1234 / 123-4567"
            ],

            [
                'id'            => '8',
                'name'          => "PRC",
                'idno_format'   => "0012345"
            ],

            [
                'id'            => '9',
                'name'          => "NBI",
                'idno_format'   => "HGUR87H38D-U47204A873"
            ],

            [
                'id'            => '10',
                'name'          => "School ID",
                'idno_format'   => "YYYY-12345"
            ],

            [
                'id'            => '11',
                'name'          => "Birth Certificate",
                'idno_format'   => "YYYY-1234"
            ],

            [
                'id'            => '12',
                'name'          => "(Saint vincent)Employee ID",
                'idno_format'   => "YYYY-0313"
            ],
        ]);
    }
}


