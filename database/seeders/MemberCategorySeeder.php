<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_categories')->insert([
            [
                'id'                           => '1',
                'membercategory_desc'          => "Employed-Government",
            ],

            [
                'id'                           => '2',
                'membercategory_desc'          => "Employed-Private",
            ],

            [
                'id'                           => '3',
                'membercategory_desc'          => "Individual Paying- OWWA",
            ],

            [
                'id'                           => '4',
                'membercategory_desc'          => "Individual Paying- Self Employed",
            ],

            [
                'id'                           => '5',
                'membercategory_desc'          => "Lifetime-Government",
            ],

            [
                'id'                           => '6',
                'membercategory_desc'          => "Lifetime-Private",
            ],

            [
                'id'                           => '7',
                'membercategory_desc'          => "Sponsored",
            ],
        ]);
    }
}
