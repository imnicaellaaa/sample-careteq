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
        DB::table('id_types')->insert([
            [
                'id'            => '1',
                'name'          => "Voter's ID",
                'idno_format'   => "####-####X-X####XXX######"
            ],

            [
                'id'            => '2',
                'name'          => 'Passport',
                'idno_format'   => "X#######X"
            ],

            [
                'id'            => '3',
                'name'          => "Drivers License",
                'idno_format'   => "XX#-##-######"
            ],

            [
                'id'            => '4',
                'name'          => "Postal ID",
                'idno_format'   => "XXX ############ X"
            ],

            [
                'id'            => '5',
                'name'          => "SSS",
                'idno_format'   => "##-#######-# "
            ],

            [
                'id'            => '6',
                'name'          => "GSIS",
                'idno_format'   => "####-#######-#"
            ],

            [
                'id'            => '7',
                'name'          => "Tax Identification Number (TIN) Card",
                'idno_format'   => "###-###-###-####"
            ],

            [
                'id'            => '8',
                'name'          => "Senior",
                'idno_format'   => "####"
            ],

            [
                'id'            => '9',
                'name'          => "PWD ID",
                'idno_format'   => "###-####"
            ],

            [
                'id'            => '10',
                'name'          => "PRC",
                'idno_format'   => "#######"
            ],

            [
                'id'            => '11',
                'name'          => "Birth Certificate",
                'idno_format'   => " "
            ],

            [
                'id'            => '12',
                'name'          => "Unified Multi-Purpose Identification Card (UMID)",
                'idno_format'   => "####-#######-#"
            ],

            [
                'id'            => '13',
                'name'          => "School ID",
                'idno_format'   => " "
            ],

            [
                'id'            => '14',
                'name'          => "Overseas Workers Welfare Administration (OWWA)",
                'idno_format'   => "###########"
            ],
        ]);
    }
}


