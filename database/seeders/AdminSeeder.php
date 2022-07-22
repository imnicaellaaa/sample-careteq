<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'id'            => '1',
                'name'          => "admin",
                'email'   => "imnicaella18@gmail.com",
                'password' => bcrypt('admin'),
            ],
        ]);
    }
}
