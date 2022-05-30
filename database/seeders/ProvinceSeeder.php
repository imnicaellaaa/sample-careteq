<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            [
                'id'            => '1',
                'name'          => 'Ilocos Norte',
                'country_id'   => '167'
            ],
            [
                'id'            => '2',
                'name'          => 'Ilocos Sur',
                'country_id'   => '167'
            ],

            [
                'id'            => '3',
                'name'          => 'La Union',
                'country_id'   => '167'
            ],

            [
                'id'            => '4',
                'name'          => 'Pangasinan',
                'country_id'   => '167'
            ],

            [
            'id'            => '5',
            'name'          => 'Batanes',
            'country_id'   => '167'
             ],

             [
            'id'            => '6',
            'name'          => 'Cagayan',
            'country_id'   => '167'
             ],

             [
            'id'            => '7',
            'name'          => 'Isabela',
            'country_id'   => '167'
            ],

            [
            'id'            => '8',
            'name'          => 'Nueva Vizcaya',
            'country_id'   => '167'
            ],

            [
            'id'            => '9',
            'name'          => 'Quirino',
            'country_id'   => '167'
            ],

            [
                'id'            => '16',
                'name'          => 'Aurora',
                'country_id'   => '167'
            ],

            [
                'id'            => '10',
                'name'          => 'Bataan',
                'country_id'   => '167'
            ],
            [
                'id'            => '11',
                'name'          => 'Bulacan',
                'country_id'   => '167'
            ],
            [
                'id'            => '12',
                'name'          => 'Nueva Ecija',
                'country_id'   => '167'
            ],
            [
                'id'            => '13',
                'name'          => 'Pampanga',
                'country_id'   => '167'
            ],
            [
                'id'            => '14',
                'name'          => 'Tarlac',
                'country_id'   => '167'
            ],
            [
                'id'            => '15',
                'name'          => 'Zambales',
                'country_id'   => '167'
            ],

            [
                'id'            => '17',
                'name'          => 'Batangas',
                'country_id'   => '167'
            ],
            [
                'id'            => '18',
                'name'          => 'Cavite',
                'country_id'   => '167'
            ],
            [
                'id'            => '19',
                'name'          => 'Laguna',
                'country_id'   => '167'
            ],
            [
                'id'            => '20',
                'name'          => 'Quezon',
                'country_id'   => '167'
            ],
            [
                'id'            => '21',
                'name'          => 'Rizal',
                'country_id'   => '167'
            ],

            [
                'id'            => '22',
                'name'          => 'Albay',
                'country_id'   => '167'
            ],

            [
                'id'            => '23',
                'name'          => 'Camarines Norte',
                'country_id'   => '167'
            ],

            [
                'id'            => '24',
                'name'          => 'Camarines Sur',
                'country_id'   => '167'
            ],

            [
                'id'            => '25',
                'name'          => 'Catanduanes',
                'country_id'   => '167'
            ],

            [
                'id'            => '26',
                'name'          => 'Masbate',
                'country_id'   => '167'
            ],

            [
                'id'            => '27',
                'name'          => 'Sorsogon',
                'country_id'   => '167'
            ],

            [
                'id'            => '28',
                'name'          => 'Aklan',
                'country_id'   => '167'
            ],


            [
                'id'            => '29',
                'name'          => 'Antique',
                'country_id'   => '167'
            ],


            [
                'id'            => '30',
                'name'          => 'Bacolod',
                'country_id'   => '167'
            ],


            [
                'id'            => '31',
                'name'          => 'Capiz',
                'country_id'   => '167'
            ],


            [
                'id'            => '32',
                'name'          => 'Iloilo',
                'country_id'   => '167'
            ],


            [
                'id'            => '33',
                'name'          => 'Negrod Occidental',
                'country_id'   => '167'
            ],

            [
                'id'            => '34',
                'name'          => 'Bohol',
                'country_id'   => '167'
            ],

            [
                'id'            => '35',
                'name'          => 'Cebu',
                'country_id'   => '167'
            ],

            [
                'id'            => '36',
                'name'          => 'Mandaue',
                'country_id'   => '167'
            ],

            [
                'id'            => '37',
                'name'          => 'Negros Oriental',
                'country_id'   => '167'
            ],

            [
                'id'            => '38',
                'name'          => 'Siquijor',
                'country_id'   => '167'
            ],

            [
                'id'            => '39',
                'name'          => 'Biliran',
                'country_id'   => '167'
            ],

            [
                'id'            => '40',
                'name'          => 'Eastern Samar',
                'country_id'   => '167'
            ],

            [
                'id'            => '41',
                'name'          => 'Leyte',
                'country_id'   => '167'
            ],

            [
                'id'            => '42',
                'name'          => 'Northern Samar',
                'country_id'   => '167'
            ],

            [
                'id'            => '43',
                'name'          => 'Samar',
                'country_id'   => '167'
            ],

            [
                'id'            => '44',
                'name'          => 'Southern Leyte',
                'country_id'   => '167'
            ],

            [
                'id'            => '45',
                'name'          => 'Tacloban',
                'country_id'   => '167'
            ],

            [
                'id'            => '46',
                'name'          => 'Isabela City',
                'country_id'   => '167'
            ],

            [
                'id'            => '47',
                'name'          => 'Zamboanga City',
                'country_id'   => '167'
            ],

            [
                'id'            => '48',
                'name'          => 'Zamboanga Del Norte',
                'country_id'   => '167'
            ],

            [
                'id'            => '49',
                'name'          => 'Zamboanga Del Sur',
                'country_id'   => '167'
            ],

            [
                'id'            => '50',
                'name'          => 'Zamboanga Sibugay',
                'country_id'   => '167'
            ],

            [
                'id'            => '51',
                'name'          => 'Bukidnon',
                'country_id'   => '167'
            ],

            [
                'id'            => '52',
                'name'          => 'Cagayan De Oro',
                'country_id'   => '167'
            ],

            [
                'id'            => '53',
                'name'          => 'Camiguin',
                'country_id'   => '167'
            ],

            [
                'id'            => '54',
                'name'          => 'Iligan',
                'country_id'   => '167'
            ],

            [
                'id'            => '55',
                'name'          => 'Lanao Del Norte',
                'country_id'   => '167'
            ],

            [
                'id'            => '56',
                'name'          => 'Misamis Occidental',
                'country_id'   => '167'
            ],

            [
                'id'            => '57',
                'name'          => 'Misamis Oriental',
                'country_id'   => '167'
            ],

            [
                'id'            => '58',
                'name'          => 'Davao De Oro',
                'country_id'   => '167'
            ],

            [
                'id'            => '59',
                'name'          => 'Davao City',
                'country_id'   => '167'
            ],

            [
                'id'            => '60',
                'name'          => 'Davao Del Norte',
                'country_id'   => '167'
            ],

            [
                'id'            => '61',
                'name'          => 'Davao Del Sur',
                'country_id'   => '167'
            ],

            [
                'id'            => '62',
                'name'          => 'Davao Occidental',
                'country_id'   => '167'
            ],

            [
                'id'            => '63',
                'name'          => 'Davao Oriental',
                'country_id'   => '167'
            ],

            [
                'id'            => '64',
                'name'          => 'Cotabato',
                'country_id'   => '167'
            ],

            [
                'id'            => '65',
                'name'          => 'Cotobato City',
                'country_id'   => '167'
            ],

            [
                'id'            => '66',
                'name'          => 'General Santos',
                'country_id'   => '167'
            ],

            [
                'id'            => '67',
                'name'          => 'Sranggani',
                'country_id'   => '167'
            ],

            [
                'id'            => '68',
                'name'          => 'South Cotabato',
                'country_id'   => '167'
            ],

            [
                'id'            => '69',
                'name'          => 'Sultan Kudarat',
                'country_id'   => '167'
            ],

            [
                'id'            => '70',
                'name'          => 'Caloocan',
                'country_id'   => '167'
            ],

            [
                'id'            => '71',
                'name'          => 'Las Piñas',
                'country_id'   => '167'
            ],

            [
                'id'            => '72',
                'name'          => 'Makati',
                'country_id'   => '167'
            ],

            [
                'id'            => '73',
                'name'          => 'Malabon',
                'country_id'   => '167'
            ],

            [
                'id'            => '74',
                'name'          => 'Mandaluyong',
                'country_id'   => '167'
            ],

            [
                'id'            => '75',
                'name'          => 'Manila',
                'country_id'   => '167'
            ],

            [
                'id'            => '76',
                'name'          => 'Marikina',
                'country_id'   => '167'
            ],

            [
                'id'            => '77',
                'name'          => 'Muntinlupa',
                'country_id'   => '167'
            ],

            [
                'id'            => '78',
                'name'          => 'Navotas',
                'country_id'   => '167'
            ],

            [
                'id'            => '79',
                'name'          => 'Parañaque',
                'country_id'   => '167'
            ],

            [
                'id'            => '80',
                'name'          => 'Pasay',
                'country_id'   => '167'
            ],

            [
                'id'            => '81',
                'name'          => 'Pasig',
               'country_id'   => '167'
            ],

            [
                'id'            => '82',
                'name'          => 'Pateros',
                'country_id'   => '167'
            ],

            [
                'id'            => '83',
                'name'          => 'Quezon City',
                'country_id'   => '167'
            ],

            [
                'id'            => '84',
                'name'          => 'San Juan',
                'country_id'   => '167'
            ],

            [
                'id'            => '85',
                'name'          => 'Taguig',
                'country_id'   => '167'
            ],

            [
                'id'            => '86',
                'name'          => 'Valenzuela',
                'country_id'   => '167'
            ],

            [
                'id'            => '87',
                'name'          => 'Abra',
                'country_id'   => '167'
            ],

            [
                'id'            => '88',
                'name'          => 'Apayao',
                'country_id'   => '167'
            ],

            [
                'id'            => '89',
                'name'          => 'Baguio',
                'country_id'   => '167'
            ],

            [
                'id'            => '90',
                'name'          => 'Benguet',
                'country_id'   => '167'
            ],

            [
                'id'            => '91',
                'name'          => 'Ifugao',
                'country_id'   => '167'
            ],

            [
                'id'            => '92',
                'name'          => 'Kalinga',
                'country_id'   => '167'
            ],

            [
                'id'            => '93',
                'name'          => 'Mountain Province',
                'country_id'   => '167'
            ],

            [
                'id'            => '94',
                'name'          => 'Basilan',
                'country_id'   => '167'
            ],

            [
                'id'            => '95',
                'name'          => 'Lanao Del Sur',
                'country_id'   => '167'
            ],

            [
                'id'            => '96',
                'name'          => 'Maguindanao',
                'country_id'   => '167'
            ],

            [
                'id'            => '97',
                'name'          => 'Sulu',
                'country_id'   => '167'
            ],

            [
                'id'            => '98',
                'name'          => 'Tawi-Tawi',
                'country_id'   => '167'
            ],

            [
                'id'            => '99',
                'name'          => 'Agusan Del Norte',
                'country_id'   => '167'
            ],

            [
                'id'            => '100',
                'name'          => 'Agusan Del Sur',
                'country_id'   => '167'
            ],

            [
                'id'            => '101',
                'name'          => 'Butuan',
                'country_id'   => '167'
            ],

            [
                'id'            => '102',
                'name'          => 'Dinagat Islands',
                'country_id'   => '167'
            ],

            [
                'id'            => '103',
                'name'          => 'Surigao Del Norte',
                'country_id'   => '167'
            ],

            [
                'id'            => '104',
                'name'          => 'Surigao Del Sur',
                'country_id'   => '167'
            ],

            [
                'id'            => '105',
                'name'          => 'Marinduque',
                'country_id'   => '167'
            ],

            [
                'id'            => '106',
                'name'          => 'Occidental Mindoro',
                'country_id'   => '167'
            ],

            [
                'id'            => '107',
                'name'          => 'Oriental Mindoro',
                'country_id'   => '167'
            ],

            [
                'id'            => '108',
                'name'          => 'Palawan',
                'country_id'   => '167'
            ],

            [
                'id'            => '109',
                'name'          => 'Puerto Princesa',
                'country_id'   => '167'
            ],

            [
                'id'            => '110',
                'name'          => 'Romblon',
                'country_id'   => '167'
            ],

        ]);
    }
}


