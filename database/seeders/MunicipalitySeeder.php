<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipalities')->insert([

            //ILOCOS NORTE
            [
                'id'            => '1',
                'name'          => 'Adams',
                'province_id'   => '1'
            ],

            [
                'id'            => '2',
                'name'          => 'Bacarra',
                'province_id'   => '1'
            ],

            [
                'id'            => '3',
                'name'          => 'Badoc',
                'province_id'   => '1'
            ],

            [
                'id'            => '4',
                'name'          => 'Bangui (Ilocos Norte)',
                'province_id'   => '1'
            ],

            [
                'id'            => '5',
                'name'          => 'City of Batac',
                'province_id'   => '1'
            ],

            [
                'id'            => '6',
                'name'          => 'Burgos (Ilocos Norte)',
                'province_id'   => '1'
            ],

            [
                'id'            => '7',
                'name'          => 'Carasi',
                'province_id'   => '1'
            ],

            [
                'id'            => '8',
                'name'          => 'Currimao',
                'province_id'   => '1'
            ],

            [
                'id'            => '9',
                'name'          => 'Dingras',
                'region_id'   => '1'
            ],

            [
                'id'            => '10',
                'name'          => 'Dumalneg',
                'province_id'   => '1'
            ],

            [
                'id'            => '11',
                'name'          => 'Laoag City (Capital)',
                'province_id'   => '1'
            ],

            [
                'id'            => '12',
                'name'          => 'Marcos',
                'province_id'   => '1'
            ],

            [
                'id'            => '13',
                'name'          => 'Nueva Era',
                'province_id'   => '1'
            ],

            [
                'id'            => '14',
                'name'          => 'Pagudpud',
                'province_id'   => '1'
            ],

            [
                'id'            => '15',
                'name'          => 'Paoay',
                'province_id'   => '1'
            ],

            [
                'id'            => '16',
                'name'          => 'Pasuquin',
                'province_id'   => '1'
            ],

            [
                'id'            => '17',
                'name'          => 'Piddig',
                'province_id'   => '1'
            ],

            [
                'id'            => '18',
                'name'          => 'Pinili',
                'province_id'   => '1'
            ],

            [
                'id'            => '19',
                'name'          => 'San Nicolas (Ilocos Norte)',
                'province_id'   => '1'
            ],

            [
                'id'            => '20',
                'name'          => 'Sarrat',
                'province_id'   => '1'
            ],

            [
                'id'            => '21',
                'name'          => 'Solsona',
                'province_id'   => '1'
            ],

            [
                'id'            => '22',
                'name'          => 'Vintar',
                'province_id'   => '1'
            ],

            //ILOCOS SUR
            [
                'id'            => '23',
                'name'          => 'Alilem',
                'province_id'   => '2'
            ],

            [
                'id'            => '24',
                'name'          => 'Banayoyo',
                'province_id'   => '2'
            ],

            [
                'id'            => '25',
                'name'          => 'Bantay (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '26',
                'name'          => 'Burgos (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '27',
                'name'          => 'Cabugao',
                'province_id'   => '2'
            ],

            [
                'id'            => '28',
                'name'          => 'Candon',
                'province_id'   => '2'
            ],

            [
                'id'            => '29',
                'name'          => 'Caoayan',
                'province_id'   => '2'
            ],

            [
                'id'            => '30',
                'name'          => 'Cervantes',
                'province_id'   => '2'
            ],

            [
                'id'            => '31',
                'name'          => 'Galimuyod',
                'province_id'   => '2'
            ],

            [
                'id'            => '32',
                'name'          => 'Gregorio Del Pilar',
                'province_id'   => '2'
            ],

            [
                'id'            => '33',
                'name'          => 'Lidlidda',
                'province_id'   => '2'
            ],

            [
                'id'            => '34',
                'name'          => 'Magsingal',
                'province_id'   => '2'
            ],

            [
                'id'            => '35',
                'name'          => 'Nagbukel',
                'province_id'   => '2'
            ],

            [
                'id'            => '36',
                'name'          => 'Narvacan',
                'province_id'   => '2'
            ],

            [
                'id'            => '37',
                'name'          => 'Quirino (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '38',
                'name'          => 'Salcedo (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '39',
                'name'          => 'San Emilio',
                'province_id'   => '2'
            ],

            [
                'id'            => '40',
                'name'          => 'San Esteban',
                'province_id'   => '2'
            ],


            [
                'id'            => '41',
                'name'          => 'San Ildefonso (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '42',
                'name'          => 'San Juan (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '43',
                'name'          => 'San Vicente (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '44',
                'name'          => 'Santa',
                'province_id'   => '2'
            ],

            [
                'id'            => '45',
                'name'          => 'Santa Catalina (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '46',
                'name'          => 'Santa Cruz (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '47',
                'name'          => 'Santa Maria (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '48',
                'name'          => 'Santiago (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '49',
                'name'          => 'Santo Domingo (Ilocos Sur)',
                'province_id'   => '2'
            ],

            [
                'id'            => '50',
                'name'          => 'Sigay',
                'province_id'   => '2'
            ],

            [
                'id'            => '51',
                'name'          => 'Sinait',
                'province_id'   => '2'
            ],

            [
                'id'            => '52',
                'name'          => 'Sugpon',
                'province_id'   => '2'
            ],

            [
                'id'            => '53',
                'name'          => 'Suyo',
                'province_id'   => '2'
            ],

            [
                'id'            => '54',
                'name'          => 'Tagudin',
                'province_id'   => '2'
            ],

            [
                'id'            => '55',
                'name'          => 'Vigan',
                'province_id'   => '2'
            ],


            // LA UNION
            [
                'id'            => '56',
                'name'          => 'Agoo',
                'province_id'   => '3'
            ],

            [
                'id'            => '57',
                'name'          => 'Aringay',
                'province_id'   => '3'
            ],

            [
                'id'            => '58',
                'name'          => 'Bacnotan',
                'province_id'   => '3'
            ],

            [
                'id'            => '59',
                'name'          => 'Bagulin',
                'province_id'   => '3'
            ],

            [
                'id'            => '60',
                'name'          => 'Balaoan',
                'province_id'   => '3'
            ],

            [
                'id'            => '61',
                'name'          => 'Bangar',
                'province_id'   => '3'
            ],
            [
                'id'            => '62',
                'name'          => 'Bauang',
                'province_id'   => '3'
            ],

            [
                'id'            => '63',
                'name'          => 'Burgos (Ilocos Sur)',
                'province_id'   => '3'
            ],

            [
                'id'            => '64',
                'name'          => 'Caba',
                'province_id'   => '3'
            ],

            [
                'id'            => '65',
                'name'          => 'Luna',
                'province_id'   => '3'
            ],

            [
                'id'            => '66',
                'name'          => 'Naguilian',
                'province_id'   => '3'
            ],

            [
                'id'            => '67',
                'name'          => 'Pugo',
                'province_id'   => '3'
            ],

            [
                'id'            => '68',
                'name'          => 'Rosario',
                'province_id'   => '3'
            ],

            [
                'id'            => '69',
                'name'          => 'San Fernando',
                'province_id'   => '3'
            ],

            [
                'id'            => '70',
                'name'          => 'San Gabriel',
                'province_id'   => '3'
            ],

            [
                'id'            => '71',
                'name'          => 'San Juan (Ilocos Sur)',
                'province_id'   => '3'
            ],

            [
                'id'            => '72',
                'name'          => 'Santo Tomas',
                'province_id'   => '3'
            ],

            [
                'id'            => '73',
                'name'          => 'Santol',
                'province_id'   => '3'
            ],

            [
                'id'            => '74',
                'name'          => 'Sudipen',
                'province_id'   => '3'
            ],

            [
                'id'            => '75',
                'name'          => 'Tubao',
                'province_id'   => '3'
            ],


            //PANGASINAN
            [
                'id'            => '76',
                'name'          => 'Agno',
                'province_id'   => '4'
            ],

            [
                'id'            => '77',
                'name'          => 'Aguilar',
                'province_id'   => '4'
            ],

            [
                'id'            => '78',
                'name'          => 'Alaminos',
                'province_id'   => '4'
            ],

            [
                'id'            => '79',
                'name'          => 'Alcala',
                'province_id'   => '4'
            ],

            [
                'id'            => '80',
                'name'          => 'Anda',
                'province_id'   => '4'
            ],

            [
                'id'            => '81',
                'name'          => 'Asingan',
                'province_id'   => '4'
            ],

            [
                'id'            => '82',
                'name'          => 'Bulangao',
                'province_id'   => '4'
            ],

            [
                'id'            => '83',
                'name'          => 'Bani',
                'province_id'   => '4'
            ],

            [
                'id'            => '84',
                'name'          => 'Basista',
                'province_id'   => '4'
            ],

            [
                'id'            => '85',
                'name'          => 'Bautista',
                'province_id'   => '4'
            ],

            [
                'id'            => '86',
                'name'          => 'Bayambang',
                'province_id'   => '4'
            ],

            [
                'id'            => '87',
                'name'          => 'Binalonan',
                'province_id'   => '4'
            ],

            [
                'id'            => '88',
                'name'          => 'Binmaley',
                'province_id'   => '4'
            ],

            [
                'id'            => '89',
                'name'          => 'Bolinao',
                'province_id'   => '4'
            ],

            [
                'id'            => '90',
                'name'          => 'Bugallon',
                'province_id'   => '4'
            ],

            [
                'id'            => '91',
                'name'          => 'Burgos (Pangasinan)',
                'province_id'   => '4'
            ],

            [
                'id'            => '92',
                'name'          => 'Calasiao',
                'province_id'   => '4'
            ],

            [
                'id'            => '93',
                'name'          => 'Dagupan',
                'province_id'   => '4'
            ],

            [
                'id'            => '94',
                'name'          => 'Dasol',
                'province_id'   => '4'
            ],

            [
                'id'            => '95',
                'name'          => 'Infanta',
                'province_id'   => '4'
            ],

            [
                'id'            => '96',
                'name'          => 'Labrador',
                'province_id'   => '4'
            ],

            [
                'id'            => '97',
                'name'          => 'Laoac',
                'province_id'   => '4'
            ],

            [
                'id'            => '98',
                'name'          => 'Lingayen',
                'province_id'   => '4'
            ],

            [
                'id'            => '99',
                'name'          => 'Mabini',
                'province_id'   => '4'
            ],

            [
                'id'            => '100',
                'name'          => 'Malasiqui',
                'province_id'   => '4'
            ],

            [
                'id'            => '101',
                'name'          => 'Manaoag',
                'province_id'   => '4'
            ],

            [
                'id'            => '102',
                'name'          => 'Mangaldan',
                'province_id'   => '4'
            ],

            [
                'id'            => '103',
                'name'          => 'Mangatarem',
                'province_id'   => '4'
            ],

            [
                'id'            => '104',
                'name'          => 'Mapandan',
                'province_id'   => '4'
            ],

            [
                'id'            => '105',
                'name'          => 'Natividad',
                'province_id'   => '4'
            ],

            [
                'id'            => '106',
                'name'          => 'Pozorrubio',
                'province_id'   => '4'
            ],

            [
                'id'            => '107',
                'name'          => 'Rosales',
                'province_id'   => '4'
            ],

            [
                'id'            => '108',
                'name'          => 'San Carlos',
                'province_id'   => '4'
            ],

            [
                'id'            => '109',
                'name'          => 'San Fabian',
                'province_id'   => '4'
            ],

            [
                'id'            => '110',
                'name'          => 'San Jacinto',
                'province_id'   => '4'
            ],

            [
                'id'            => '111',
                'name'          => 'San Manuel (La Union)',
                'province_id'   => '4'
            ],

            [
                'id'            => '112',
                'name'          => 'San Nicolas (La Union)',
                'province_id'   => '4'
            ],

            [
                'id'            => '113',
                'name'          => 'San Quintin',
                'province_id'   => '4'
            ],

            [
                'id'            => '114',
                'name'          => 'Santa Barbara',
                'province_id'   => '4'
            ],

            [
                'id'            => '115',
                'name'          => 'Santa Maria (La Union)',
                'province_id'   => '4'
            ],

            [
                'id'            => '116',
                'name'          => 'Sison',
                'province_id'   => '4'
            ],

            [
                'id'            => '117',
                'name'          => 'Sual',
                'province_id'   => '4'
            ],

            [
                'id'            => '118',
                'name'          => 'Tayug',
                'province_id'   => '4'
            ],

            [
                'id'            => '119',
                'name'          => 'Umingan',
                'province_id'   => '4'
            ],

            [
                'id'            => '120',
                'name'          => 'Urdaneta',
                'province_id'   => '4'
            ],

            [
                'id'            => '121',
                'name'          => 'Villasis',
                'province_id'   => '4'
            ],

            //BATANES
            [
                'id'            => '122',
                'name'          => 'Basco',
                'province_id'   => '5'
            ],

            [
                'id'            => '123',
                'name'          => 'Itbayat',
                'province_id'   => '5'
            ],

            [
                'id'            => '124',
                'name'          => 'Mahatao',
                'province_id'   => '5'
            ],

            [
                'id'            => '125',
                'name'          => 'Sabtang',
                'province_id'   => '5'
            ],

            [
                'id'            => '126',
                'name'          => 'Uyugan',
                'province_id'   => '5'
            ],


            //CAGAYAN
            [
                'id'            => '127',
                'name'          => 'Abulug',
                'province_id'   => '6'
            ],

            [
                'id'            => '128',
                'name'          => 'Alcala',
                'province_id'   => '6'
            ],

            [
                'id'            => '129',
                'name'          => 'Allacapan',
                'province_id'   => '6'
            ],

            [
                'id'            => '130',
                'name'          => 'Amulung',
                'province_id'   => '6'
            ],

            [
                'id'            => '131',
                'name'          => 'Aparri',
                'province_id'   => '6'
            ],

            [
                'id'            => '132',
                'name'          => 'Baggao',
                'province_id'   => '6'
            ],

            [
                'id'            => '133',
                'name'          => 'Ballesteros',
                'province_id'   => '6'
            ],

            [
                'id'            => '134',
                'name'          => 'Buguey',
                'province_id'   => '6'
            ],

            [
                'id'            => '135',
                'name'          => 'Calayan',
                'province_id'   => '6'
            ],

            [
                'id'            => '136',
                'name'          => 'Camalaniugan',
                'province_id'   => '6'
            ],

            [
                'id'            => '137',
                'name'          => 'Claveria',
                'province_id'   => '6'
            ],

            [
                'id'            => '138',
                'name'          => 'Enrile',
                'province_id'   => '6'
            ],

            [
                'id'            => '139',
                'name'          => 'Gattaran',
                'province_id'   => '6'
            ],

            [
                'id'            => '140',
                'name'          => 'Gonzaga',
                'province_id'   => '6'
            ],

            [
                'id'            => '141',
                'name'          => 'Iguig',
                'province_id'   => '6'
            ],

            [
                'id'            => '142',
                'name'          => 'Lal-lo',
                'province_id'   => '6'
            ],

            [
                'id'            => '143',
                'name'          => 'Lasam',
                'province_id'   => '6'
            ],

            [
                'id'            => '144',
                'name'          => 'Pamplona',
                'province_id'   => '6'
            ],

            [
                'id'            => '145',
                'name'          => 'Peñablanca',
                'province_id'   => '6'
            ],

            [
                'id'            => '146',
                'name'          => 'Piat',
                'province_id'   => '6'
            ],

            [
                'id'            => '147',
                'name'          => 'Rizal (Batanes)',
                'province_id'   => '6'
            ],

            [
                'id'            => '148',
                'name'          => 'Sanchez-Mira',
                'province_id'   => '6'
            ],

            [
                'id'            => '149',
                'name'          => 'Santa Ana',
                'province_id'   => '6'
            ],

            [
                'id'            => '150',
                'name'          => 'Santa Praxedes',
                'province_id'   => '6'
            ],

            [
                'id'            => '151',
                'name'          => 'Santa Teresita',
                'province_id'   => '6'
            ],

            [
                'id'            => '152',
                'name'          => 'Santo Niño (Faire)',
                'province_id'   => '6'
            ],

            [
                'id'            => '153',
                'name'          => 'Solana',
                'province_id'   => '6'
            ],

            [
                'id'            => '154',
                'name'          => 'Tuao',
                'province_id'   => '6'
            ],


            //ISABELA
            [
                'id'            => '155',
                'name'          => 'Alicia',
                'province_id'   => '7'
            ],

            [
                'id'            => '156',
                'name'          => 'Angadanan',
                'province_id'   => '7'
            ],

            [
                'id'            => '157',
                'name'          => 'Aurora',
                'province_id'   => '7'
            ],

            [
                'id'            => '158',
                'name'          => 'Benito Soliven',
                'province_id'   => '7'
            ],

            [
                'id'            => '159',
                'name'          => 'Burgos (Isabela)',
                'province_id'   => '7'
            ],

            [
                'id'            => '160',
                'name'          => 'Cabagan',
                'province_id'   => '7'
            ],

            [
                'id'            => '161',
                'name'          => 'Cabatuan',
                'province_id'   => '7'
            ],

            [
                'id'            => '162',
                'name'          => 'Cauayan',
                'province_id'   => '7'
            ],

            [
                'id'            => '163',
                'name'          => 'Cordon',
                'province_id'   => '7'
            ],

            [
                'id'            => '164',
                'name'          => 'Delfin Albano',
                'province_id'   => '7'
            ],

            [
                'id'            => '165',
                'name'          => 'Dinapigue',
                'province_id'   => '7'
            ],

            [
                'id'            => '166',
                'name'          => 'Divilacan',
                'province_id'   => '7'
            ],

            [
                'id'            => '167',
                'name'          => 'Echague',
                'province_id'   => '7'
            ],

            [
                'id'            => '168',
                'name'          => 'Gamu',
                'province_id'   => '7'
            ],

            [
                'id'            => '169',
                'name'          => 'Ilagan',
                'province_id'   => '7'
            ],

            [
                'id'            => '170',
                'name'          => 'Jones',
                'province_id'   => '7'
            ],

            [
                'id'            => '171',
                'name'          => 'Luna',
                'province_id'   => '7'
            ],

            [
                'id'            => '172',
                'name'          => 'Maconacon',
                'province_id'   => '7'
            ],

            [
                'id'            => '173',
                'name'          => 'Mallig',
                'province_id'   => '7'
            ],

            [
                'id'            => '174',
                'name'          => 'Naguilian',
                'province_id'   => '7'
            ],

            [
                'id'            => '175',
                'name'          => 'Palanan',
                'province_id'   => '7'
            ],

            [
                'id'            => '176',
                'name'          => 'Quezon (Isabela)',
                'province_id'   => '7'
            ],

            [
                'id'            => '177',
                'name'          => 'Quirino (Isabela)',
                'province_id'   => '7'
            ],

            [
                'id'            => '178',
                'name'          => 'Ramon',
                'province_id'   => '7'
            ],

            [
                'id'            => '179',
                'name'          => 'Reina Mercedes',
                'province_id'   => '7'
            ],

            [
                'id'            => '180',
                'name'          => 'Roxas',
                'province_id'   => '7'
            ],

            [
                'id'            => '181',
                'name'          => 'San Agustin',
                'province_id'   => '7'
            ],

            [
                'id'            => '182',
                'name'          => 'San Guillermo',
                'province_id'   => '7'
            ],

            [
                'id'            => '183',
                'name'          => 'San Isidro',
                'province_id'   => '7'
            ],

            [
                'id'            => '184',
                'name'          => 'San Manuel (Cagayan)',
                'province_id'   => '7'
            ],

            [
                'id'            => '185',
                'name'          => 'San Mariano',
                'province_id'   => '7'
            ],

            [
                'id'            => '186',
                'name'          => 'San Mateo (Cagayan)',
                'province_id'   => '7'
            ],

            [
                'id'            => '187',
                'name'          => 'San Pablo (Cagayan)',
                'province_id'   => '7'
            ],

            [
                'id'            => '188',
                'name'          => 'Santa Maria (Cagayan)',
                'province_id'   => '7'
            ],

            [
                'id'            => '189',
                'name'          => 'Santiago (Cagayan)',
                'province_id'   => '7'
            ],

            [
                'id'            => '190',
                'name'          => 'Santo Tomas',
                'province_id'   => '7'
            ],

            [
                'id'            => '191',
                'name'          => 'Tumauini',
                'province_id'   => '7'
            ],


            //NEUVA VISCAYA
            [
                'id'            => '192',
                'name'          => 'Alfonso Castañeda',
                'province_id'   => '8'
            ],

            [
                'id'            => '193',
                'name'          => 'Ambaguio',
                'province_id'   => '8'
            ],

            [
                'id'            => '194',
                'name'          => 'Aritao',
                'province_id'   => '8'
            ],

            [
                'id'            => '195',
                'name'          => 'Bagabag',
                'province_id'   => '8'
            ],

            [
                'id'            => '196',
                'name'          => 'Bambang',
                'province_id'   => '8'
            ],
            [
                'id'            => '197',
                'name'          => 'Bayombong',
                'province_id'   => '8'
            ],

            [
                'id'            => '198',
                'name'          => 'Diadi',
                'province_id'   => '8'
            ],

            [
                'id'            => '199',
                'name'          => 'Dupax del Norte',
                'province_id'   => '8'
            ],

            [
                'id'            => '200',
                'name'          => 'Dupax del Sur',
                'province_id'   => '8'
            ],

            [
                'id'            => '201',
                'name'          => 'Kasibu',
                'province_id'   => '8'
            ],

            [
                'id'            => '202',
                'name'          => 'Kayapa',
                'province_id'   => '8'
            ],

            [
                'id'            => '203',
                'name'          => 'Quezon (Isabela)',
                'province_id'   => '8'
            ],

            [
                'id'            => '204',
                'name'          => 'Santa Fe',
                'province_id'   => '8'
            ],

            [
                'id'            => '205',
                'name'          => 'Solano',
                'province_id'   => '8'
            ],

            [
                'id'            => '206',
                'name'          => 'Villaverde',
                'province_id'   => '8'
            ],


            //QUIRINO
            [
                'id'            => '207',
                'name'          => 'Aglipay',
                'province_id'   => '9'
            ],

            [
                'id'            => '208',
                'name'          => 'Cabarroguis',
                'province_id'   => '9'
            ],

            [
                'id'            => '209',
                'name'          => 'Diffun',
                'province_id'   => '9'
            ],

            [
                'id'            => '210',
                'name'          => 'Maddela',
                'province_id'   => '9'
            ],

            [
                'id'            => '211',
                'name'          => 'Nagtipunan',
                'province_id'   => '9'
            ],

            [
                'id'            => '212',
                'name'          => 'Saguday',
                'province_id'   => '9'
            ],


            //AURORA
            [
                'id'            => '214',
                'name'          => 'Baler',
                'province_id'   => '16'
            ],

            [
                'id'            => '215',
                'name'          => 'Casiguran',
                'province_id'   => '16'
            ],

            [
                'id'            => '216',
                'name'          => 'Dilasag',
                'province_id'   => '16'
            ],

            [
                'id'            => '217',
                'name'          => 'Dinalungan',
                'province_id'   => '16'
            ],

            [
                'id'            => '218',
                'name'          => 'Dingalan',
                'province_id'   => '16'
            ],

            [
                'id'            => '219',
                'name'          => 'Dipaculao',
                'province_id'   => '16'
            ],

            [
                'id'            => '220',
                'name'          => 'Dipaculao',
                'province_id'   => '16'
            ],

            [
                'id'            => '221',
                'name'          => 'Maria Aurora',
                'province_id'   => '16'
            ],

            [
                'id'            => '222',
                'name'          => 'San Luis',
                'province_id'   => '16'
            ],

            //BATAAN
            [
                'id'            => '223',
                'name'          => 'Abucay',
                'province_id'   => '10'
            ],

            [
                'id'            => '224',
                'name'          => 'Bagac',
                'province_id'   => '10'
            ],

            [
                'id'            => '225',
                'name'          => 'Balanga',
                'province_id'   => '10'
            ],

            [
                'id'            => '226',
                'name'          => 'Dinalupihan',
                'province_id'   => '10'
            ],

            [
                'id'            => '227',
                'name'          => 'Hermosa',
                'province_id'   => '10'
            ],

            [
                'id'            => '228',
                'name'          => 'Limay',
                'province_id'   => '10'
            ],

            [
                'id'            => '229',
                'name'          => 'Mariveles',
                'province_id'   => '10'
            ],

            [
                'id'            => '230',
                'name'          => 'Morong',
                'province_id'   => '10'
            ],

            [
                'id'            => '231',
                'name'          => 'Orani',
                'province_id'   => '10'
            ],

            [
                'id'            => '232',
                'name'          => 'Orion',
                'province_id'   => '10'
            ],

            [
                'id'            => '233',
                'name'          => 'Pilar',
                'province_id'   => '10'
            ],

            [
                'id'            => '234',
                'name'          => 'Samal',
                'province_id'   => '10'
            ],



            //BULACAN
            [
                'id'            => '235',
                'name'          => 'Angat',
                'province_id'   => '11'
            ],

            [
                'id'            => '236',
                'name'          => 'Balagtas',
                'province_id'   => '11'
            ],

            [
                'id'            => '237',
                'name'          => 'Baliuag',
                'province_id'   => '11'
            ],

            [
                'id'            => '238',
                'name'          => 'Bocaue',
                'province_id'   => '11'
            ],

            [
                'id'            => '239',
                'name'          => 'Bulakan',
                'province_id'   => '11'
            ],

            [
                'id'            => '240',
                'name'          => 'Bustos',
                'province_id'   => '11'
            ],

            [
                'id'            => '241',
                'name'          => 'Calumpit',
                'province_id'   => '11'
            ],

            [
                'id'            => '242',
                'name'          => 'Doña Remedios Trinidad',
                'province_id'   => '11'
            ],

            [
                'id'            => '243',
                'name'          => 'Guiguinto',
                'province_id'   => '11'
            ],

            [
                'id'            => '244',
                'name'          => 'Hagonoy',
                'province_id'   => '11'
            ],

            [
                'id'            => '245',
                'name'          => 'Malolos',
                'province_id'   => '11'
            ],

            [
                'id'            => '246',
                'name'          => 'Marilao',
                'province_id'   => '11'
            ],

            [
                'id'            => '247',
                'name'          => 'Meycauayan',
                'province_id'   => '11'
            ],

            [
                'id'            => '248',
                'name'          => 'Norzagaray',
                'province_id'   => '11'
            ],

            [
                'id'            => '249',
                'name'          => 'Obando',
                'province_id'   => '11'
            ],

            [
                'id'            => '250',
                'name'          => 'Pandi',
                'province_id'   => '11'
            ],

            [
                'id'            => '251',
                'name'          => 'Paombong',
                'province_id'   => '11'
            ],

            [
                'id'            => '252',
                'name'          => 'Plaridel',
                'province_id'   => '11'
            ],

            [
                'id'            => '253',
                'name'          => 'Pulilan',
                'province_id'   => '11'
            ],

            [
                'id'            => '254',
                'name'          => 'San Ildefonso (Bulacan)',
                'province_id'   => '11'
            ],

            [
                'id'            => '255',
                'name'          => 'San Jose del Monte',
                'province_id'   => '11'
            ],

            [
                'id'            => '256',
                'name'          => 'San Miguel (Bulacan)',
                'province_id'   => '11'
            ],

            [
                'id'            => '257',
                'name'          => 'San Rafael',
                'province_id'   => '11'
            ],

            [
                'id'            => '258',
                'name'          => 'Santa Maria (Bulacan)',
                'province_id'   => '11'
            ],



            //NUEVA ECIJA
            [
                'id'            => '259',
                'name'          => 'Aliaga',
                'province_id'   => '12'
            ],

            [
                'id'            => '260',
                'name'          => 'Bongabon',
                'province_id'   => '12'
            ],

            [
                'id'            => '261',
                'name'          => 'Cabanatuan',
                'province_id'   => '12'
            ],

            [
                'id'            => '262',
                'name'          => 'Cabiao',
                'province_id'   => '12'
            ],

            [
                'id'            => '263',
                'name'          => 'Carranglan',
                'province_id'   => '12'
            ],

            [
                'id'            => '264',
                'name'          => 'Cuyapo',
                'province_id'   => '12'
            ],

            [
                'id'            => '265',
                'name'          => 'Gabaldon',
                'province_id'   => '12'
            ],

            [
                'id'            => '266',
                'name'          => 'Gapan',
                'province_id'   => '12'
            ],

            [
                'id'            => '267',
                'name'          => 'General Mamerto Natividad',
                'province_id'   => '12'
            ],

            [
                'id'            => '268',
                'name'          => 'General Tinio',
                'province_id'   => '12'
            ],

            [
                'id'            => '269',
                'name'          => 'Guimba',
                'province_id'   => '12'
            ],

            [
                'id'            => '270',
                'name'          => 'Jaen',
                'province_id'   => '12'
            ],

            [
                'id'            => '271',
                'name'          => 'Laur',
                'province_id'   => '12'
            ],

            [
                'id'            => '272',
                'name'          => 'Licab',
                'province_id'   => '12'
            ],

            [
                'id'            => '273',
                'name'          => 'Llanera',
                'province_id'   => '12'
            ],

            [
                'id'            => '274',
                'name'          => 'Lupao',
                'province_id'   => '12'
            ],

            [
                'id'            => '275',
                'name'          => 'Muñoz',
                'province_id'   => '12'
            ],

            [
                'id'            => '276',
                'name'          => 'Nampicuan',
                'province_id'   => '12'
            ],

            [
                'id'            => '277',
                'name'          => 'Palayan',
                'province_id'   => '12'
            ],

            [
                'id'            => '278',
                'name'          => 'Pantabangan',
                'province_id'   => '12'
            ],

            [
                'id'            => '279',
                'name'          => 'Peñaranda',
                'province_id'   => '12'
            ],

            [
                'id'            => '280',
                'name'          => 'Quezon (Nueva Ecija)',
                'province_id'   => '12'
            ],

            [
                'id'            => '281',
                'name'          => 'Rizal(Nueva Ecija)',
                'province_id'   => '12'
            ],

            [
                'id'            => '282',
                'name'          => 'San Antonio',
                'province_id'   => '12'
            ],

            [
                'id'            => '283',
                'name'          => 'San Isidro',
                'province_id'   => '12'
            ],

            [
                'id'            => '284',
                'name'          => 'San Jose (Nueva Ecija)',
                'province_id'   => '12'
            ],

            [
                'id'            => '285',
                'name'          => 'San Leonardo',
                'province_id'   => '12'
            ],

            [
                'id'            => '286',
                'name'          => 'Santa Rosa',
                'province_id'   => '12'
            ],

            [
                'id'            => '287',
                'name'          => 'Santo Domingo (Nueva Ecija)',
                'province_id'   => '12'
            ],

            [
                'id'            => '288',
                'name'          => 'Talavera',
                'province_id'   => '12'
            ],

            [
                'id'            => '289',
                'name'          => 'Talugtug',
                'province_id'   => '12'
            ],

            [
                'id'            => '290',
                'name'          => 'Zaragoza',
                'province_id'   => '12'
            ],



            //PAMPANGA
            [
                'id'            => '291',
                'name'          => 'Apalit',
                'province_id'   => '13'
            ],

            [
                'id'            => '292',
                'name'          => 'Bacolor',
                'province_id'   => '13'
            ],

            [
                'id'            => '293',
                'name'          => 'Candaba',
                'province_id'   => '13'
            ],

            [
                'id'            => '294',
                'name'          => 'Floridablanca',
                'province_id'   => '13'
            ],

            [
                'id'            => '295',
                'name'          => 'Guagua',
                'province_id'   => '13'
            ],

            [
                'id'            => '296',
                'name'          => 'Lubao',
                'province_id'   => '13'
            ],

            [
                'id'            => '297',
                'name'          => 'Mabalacat',
                'province_id'   => '13'
            ],

            [
                'id'            => '298',
                'name'          => 'Macabebe',
                'province_id'   => '13'
            ],

            [
                'id'            => '299',
                'name'          => 'Magalang',
                'province_id'   => '13'
            ],

            [
                'id'            => '300',
                'name'          => 'Masantol',
                'province_id'   => '13'
            ],

            [
                'id'            => '301',
                'name'          => 'Mexico',
                'province_id'   => '13'
            ],

            [
                'id'            => '302',
                'name'          => 'Minalin',
                'province_id'   => '13'
            ],

            [
                'id'            => '303',
                'name'          => 'Porac',
                'province_id'   => '13'
            ],

            [
                'id'            => '304',
                'name'          => 'San Fernando',
                'province_id'   => '13'
            ],

            [
                'id'            => '305',
                'name'          => 'San Luis',
                'province_id'   => '13'
            ],

            [
                'id'            => '306',
                'name'          => 'San Simon',
                'province_id'   => '13'
            ],

            [
                'id'            => '307',
                'name'          => 'Santa Ana',
                'province_id'   => '13'
            ],

            [
                'id'            => '308',
                'name'          => 'Santa Rita',
                'province_id'   => '13'
            ],

            [
                'id'            => '309',
                'name'          => 'Santo Tomas',
                'province_id'   => '13'
            ],

            [
                'id'            => '310',
                'name'          => 'Sasmuan',
                'province_id'   => '13'
            ],



            //TARLAC
            [
                'id'            => '311',
                'name'          => 'Anao',
                'province_id'   => '14'
            ],

            [
                'id'            => '312',
                'name'          => 'Bamban',
                'province_id'   => '14'
            ],

            [
                'id'            => '313',
                'name'          => 'Camiling',
                'province_id'   => '14'
            ],

            [
                'id'            => '314',
                'name'          => 'Capas',
                'province_id'   => '14'
            ],

            [
                'id'            => '315',
                'name'          => 'Concepcion',
                'province_id'   => '14'
            ],

            [
                'id'            => '316',
                'name'          => 'Gerona',
                'province_id'   => '14'
            ],

            [
                'id'            => '317',
                'name'          => 'La Paz',
                'province_id'   => '14'
            ],

            [
                'id'            => '318',
                'name'          => 'Mayantoc',
                'province_id'   => '14'
            ],

            [
                'id'            => '319',
                'name'          => 'Moncada',
                'province_id'   => '14'
            ],

            [
                'id'            => '320',
                'name'          => 'Paniqui',
                'province_id'   => '14'
            ],

            [
                'id'            => '321',
                'name'          => 'Pura',
                'province_id'   => '14'
            ],

            [
                'id'            => '322',
                'name'          => 'Ramos',
                'province_id'   => '14'
            ],

            [
                'id'            => '323',
                'name'          => 'San Clemente',
                'province_id'   => '14'
            ],

            [
                'id'            => '324',
                'name'          => 'San Jose (Tarlac)',
                'province_id'   => '14'
            ],

            [
                'id'            => '325',
                'name'          => 'San Manuel (Tarlac)',
                'province_id'   => '14'
            ],

            [
                'id'            => '326',
                'name'          => 'Santa Ignacia',
                'province_id'   => '14'
            ],

            [
                'id'            => '327',
                'name'          => 'Tarlac City',
                'province_id'   => '14'
            ],

            [
                'id'            => '328',
                'name'          => 'Victoria',
                'province_id'   => '14'
            ],



            //ZAMBALES
            [
                'id'            => '329',
                'name'          => 'Botolan',
                'province_id'   => '15'
            ],

            [
                'id'            => '330',
                'name'          => 'Cabangan',
                'province_id'   => '15'
            ],

            [
                'id'            => '331',
                'name'          => 'Candelaria',
                'province_id'   => '15'
            ],

            [
                'id'            => '332',
                'name'          => 'Castillejos',
                'province_id'   => '15'
            ],

            [
                'id'            => '333',
                'name'          => 'Iba',
                'province_id'   => '15'
            ],

            [
                'id'            => '334',
                'name'          => 'Masinloc',
                'province_id'   => '15'
            ],

            [
                'id'            => '335',
                'name'          => 'Palauig',
                'province_id'   => '15'
            ],

            [
                'id'            => '336',
                'name'          => 'San Antonio',
                'province_id'   => '15'
            ],

            [
                'id'            => '337',
                'name'          => 'San Felipe',
                'province_id'   => '15'
            ],

            [
                'id'            => '338',
                'name'          => 'San Marcelino',
                'province_id'   => '15'
            ],

            [
                'id'            => '339',
                'name'          => 'San Narciso',
                'province_id'   => '15'
            ],

            [
                'id'            => '340',
                'name'          => 'Santa Cruz (Zambales)',
                'province_id'   => '15'
            ],

            [
                'id'            => '341',
                'name'          => 'Subic',
                'province_id'   => '15'
            ],



            //BATANGAS
            [
                'id'            => '342',
                'name'          => 'Agoncillo',
                'province_id'   => '17'
            ],

            [
                'id'            => '343',
                'name'          => 'Alitagtag',
                'province_id'   => '17'
            ],

            [
                'id'            => '344',
                'name'          => 'Balayan',
                'province_id'   => '17'
            ],

            [
                'id'            => '345',
                'name'          => 'Balete',
                'province_id'   => '17'
            ],

            [
                'id'            => '346',
                'name'          => 'Batangas City',
                'province_id'   => '17'
            ],

            [
                'id'            => '347',
                'name'          => 'Bauan',
                'province_id'   => '17'
            ],

            [
                'id'            => '348',
                'name'          => 'Calaca',
                'province_id'   => '17'
            ],

            [
                'id'            => '349',
                'name'          => 'Calatagan',
                'province_id'   => '17'
            ],

            [
                'id'            => '350',
                'name'          => 'Cuenca',
                'province_id'   => '17'
            ],

            [
                'id'            => '351',
                'name'          => 'Ibaan',
                'province_id'   => '17'
            ],

            [
                'id'            => '352',
                'name'          => 'Laurel',
                'province_id'   => '17'
            ],

            [
                'id'            => '353',
                'name'          => 'Lemery',
                'province_id'   => '17'
            ],

            [
                'id'            => '354',
                'name'          => 'Lian',
                'province_id'   => '17'
            ],

            [
                'id'            => '355',
                'name'          => 'Lipa',
                'province_id'   => '17'
            ],


            [
                'id'            => '356',
                'name'          => 'Lobo',
                'province_id'   => '17'
            ],


            [
                'id'            => '357',
                'name'          => 'Mabini',
                'province_id'   => '17'
            ],

            [
                'id'            => '358',
                'name'          => 'Malvar',
                'province_id'   => '17'
            ],

            [
                'id'            => '359',
                'name'          => 'Mataas na kahoy',
                'province_id'   => '17'
            ],

            [
                'id'            => '360',
                'name'          => 'Nasugbu',
                'province_id'   => '17'
            ],

            [
                'id'            => '361',
                'name'          => 'Padre Garcia',
                'province_id'   => '17'
            ],

            [
                'id'            => '362',
                'name'          => 'Rosario',
                'province_id'   => '17'
            ],

            [
                'id'            => '363',
                'name'          => 'San Jose (Batangas)',
                'province_id'   => '17'
            ],

            [
                'id'            => '364',
                'name'          => 'San Juan (Batangas)',
                'province_id'   => '17'
            ],

            [
                'id'            => '365',
                'name'          => 'San Luis',
                'province_id'   => '17'
            ],

            [
                'id'            => '366',
                'name'          => 'San Nicolas (Batangas)',
                'province_id'   => '17'
            ],

            [
                'id'            => '367',
                'name'          => 'San Pascual',
                'province_id'   => '17'
            ],

            [
                'id'            => '368',
                'name'          => 'Santa Teresita',
                'province_id'   => '17'
            ],

            [
                'id'            => '369',
                'name'          => 'Santo Tomas',
                'province_id'   => '17'
            ],

            [
                'id'            => '370',
                'name'          => 'Taal',
                'province_id'   => '17'
            ],

            [
                'id'            => '371',
                'name'          => 'Talisay',
                'province_id'   => '17'
            ],

            [
                'id'            => '372',
                'name'          => 'Tanauan',
                'province_id'   => '17'
            ],

            [
                'id'            => '373',
                'name'          => 'Tanauan',
                'province_id'   => '17'
            ],

            [
                'id'            => '374',
                'name'          => 'Taysan',
                'province_id'   => '17'
            ],

            [
                'id'            => '375',
                'name'          => 'Tingloy',
                'province_id'   => '17'
            ],

            [
                'id'            => '376',
                'name'          => 'Tuy',
                'province_id'   => '17'
            ],



            //CAVITE
            [
                'id'            => '377',
                'name'          => 'Alfonso',
                'province_id'   => '18'
            ],

            [
                'id'            => '378',
                'name'          => 'Amadeo',
                'province_id'   => '18'
            ],

            [
                'id'            => '379',
                'name'          => 'Bacoor',
                'province_id'   => '18'
            ],

            [
                'id'            => '380',
                'name'          => 'Carmona',
                'province_id'   => '18'
            ],

            [
                'id'            => '381',
                'name'          => 'Cavite City',
                'province_id'   => '18'
            ],

            [
                'id'            => '382',
                'name'          => 'Dasmariñas',
                'province_id'   => '18'
            ],

            [
                'id'            => '383',
                'name'          => 'General Emilio Aguinaldo',
                'province_id'   => '18'
            ],

            [
                'id'            => '384',
                'name'          => 'General Mariano Alvarez (GMA)',
                'province_id'   => '18'
            ],

            [
                'id'            => '385',
                'name'          => 'General Trias',
                'province_id'   => '18'
            ],

            [
                'id'            => '386',
                'name'          => 'Imus',
                'province_id'   => '18'
            ],

            [
                'id'            => '387',
                'name'          => 'Indang',
                'province_id'   => '18'
            ],

            [
                'id'            => '388',
                'name'          => 'Kawit',
                'province_id'   => '18'
            ],

            [
                'id'            => '389',
                'name'          => 'Magallanes',
                'province_id'   => '18'
            ],

            [
                'id'            => '390',
                'name'          => 'Maragondon',
                'province_id'   => '18'
            ],

            [
                'id'            => '391',
                'name'          => 'Mendez',
                'province_id'   => '18'
            ],

            [
                'id'            => '392',
                'name'          => 'Naic',
                'province_id'   => '18'
            ],

            [
                'id'            => '393',
                'name'          => 'Noveleta',
                'province_id'   => '18'
            ],

            [
                'id'            => '394',
                'name'          => 'Rosario',
                'province_id'   => '18'
            ],

            [
                'id'            => '395',
                'name'          => 'Silang',
                'province_id'   => '18'
            ],

            [
                'id'            => '396',
                'name'          => 'Tagaytay',
                'province_id'   => '18'
            ],

            [
                'id'            => '397',
                'name'          => 'Tanza',
                'province_id'   => '18'
            ],

            [
                'id'            => '398',
                'name'          => 'Ternate',
                'province_id'   => '18'
            ],

            [
                'id'            => '399',
                'name'          => 'Trece Martires',
                'province_id'   => '18'
            ],



            //LAGUNA
            [
                'id'            => '400',
                'name'          => 'Alaminos',
                'province_id'   => '19'
            ],

            [
                'id'            => '401',
                'name'          => 'Bay',
                'province_id'   => '19'
            ],

            [
                'id'            => '402',
                'name'          => 'Biñan',
                'province_id'   => '19'
            ],

            [
                'id'            => '403',
                'name'          => 'Cabuyao',
                'province_id'   => '19'
            ],

            [
                'id'            => '404',
                'name'          => 'Calamba',
                'province_id'   => '19'
            ],

            [
                'id'            => '405',
                'name'          => 'Calauan',
                'province_id'   => '19'
            ],

            [
                'id'            => '406',
                'name'          => 'Cavinti',
                'province_id'   => '19'
            ],

            [
                'id'            => '407',
                'name'          => 'Famy',
                'province_id'   => '19'
            ],

            [
                'id'            => '408',
                'name'          => 'Kalayaan',
                'province_id'   => '19'
            ],

            [
                'id'            => '409',
                'name'          => 'Liliw',
                'province_id'   => '19'
            ],

            [
                'id'            => '410',
                'name'          => 'Los Baños',
                'province_id'   => '19'
            ],

            [
                'id'            => '411',
                'name'          => 'Luisiana',
                'province_id'   => '19'
            ],

            [
                'id'            => '412',
                'name'          => 'Lumban',
                'province_id'   => '19'
            ],

            [
                'id'            => '413',
                'name'          => 'Mabitac',
                'province_id'   => '19'
            ],

            [
                'id'            => '414',
                'name'          => 'Magdalena',
                'province_id'   => '19'
            ],

            [
                'id'            => '415',
                'name'          => 'Majayjay',
                'province_id'   => '19'
            ],

            [
                'id'            => '416',
                'name'          => 'Nagcarlan',
                'province_id'   => '19'
            ],

            [
                'id'            => '417',
                'name'          => 'Paete',
                'province_id'   => '19'
            ],

            [
                'id'            => '418',
                'name'          => 'Pagsanjan',
                'province_id'   => '19'
            ],

            [
                'id'            => '419',
                'name'          => 'Pakil',
                'province_id'   => '19'
            ],

            [
                'id'            => '420',
                'name'          => 'Pangil',
                'province_id'   => '19'
            ],

            [
                'id'            => '421',
                'name'          => 'Pila',
                'province_id'   => '19'
            ],

            [
                'id'            => '422',
                'name'          => 'Rizal (Laguna)',
                'province_id'   => '19'
            ],

            [
                'id'            => '423',
                'name'          => 'San Pablo (Laguna)',
                'province_id'   => '19'
            ],

            [
                'id'            => '424',
                'name'          => 'San Pedro',
                'province_id'   => '19'
            ],

            [
                'id'            => '425',
                'name'          => 'Santa Cruz (Laguna)',
                'province_id'   => '19'
            ],

            [
                'id'            => '426',
                'name'          => 'Santa Maria (Laguna)',
                'province_id'   => '19'
            ],

            [
                'id'            => '427',
                'name'          => 'Santa Rosa',
                'province_id'   => '19'
            ],

            [
                'id'            => '428',
                'name'         => 'Siniloan',
                'province_id'   => '19'
            ],

            [
                'id'            => '429',
                'name'          => 'Victoria',
                'province_id'   => '19'
            ],



            //QUEZON
            [
                'id'            => '430',
                'name'          => 'Agdangan',
                'province_id'   => '20'
            ],

            [
                'id'            => '431',
                'name'          => 'Alabat',
                'province_id'   => '20'
            ],

            [
                'id'            => '432',
                'name'          => 'Atimonan',
                'province_id'   => '20'
            ],

            [
                'id'            => '433',
                'name'          => 'Buenavista',
                'province_id'   => '20'
            ],

            [
                'id'            => '434',
                'name'          => 'Burdeos',
                'province_id'   => '20'
            ],

            [
                'id'            => '435',
                'name'          => 'Calauag',
                'province_id'   => '20'
            ],

            [
                'id'            => '436',
                'name'          => 'Candelaria',
                'province_id'   => '20'
            ],

            [
                'id'            => '437',
                'name'          => 'Catanauan',
                'province_id'   => '20'
            ],

            [
                'id'            => '438',
                'name'          => 'Dolores',
                'province_id'   => '20'
            ],

            [
                'id'            => '439',
                'name'          => 'General Luna',
                'province_id'   => '20'
            ],

            [
                'id'            => '440',
                'name'          => 'General Nakar',
                'province_id'   => '20'
            ],

            [
                'id'            => '441',
                'name'          => 'Guinayangan',
                'province_id'   => '20'
            ],

            [
                'id'            => '442',
                'name'          => 'Gumaca',
                'province_id'   => '20'
            ],

            [
                'id'            => '443',
                'name'          => 'Infanta',
                'province_id'   => '20'
            ],

            [
                'id'            => '444',
                'name'          => 'Jomalig',
                'province_id'   => '20'
            ],

            [
                'id'            => '445',
                'name'          => 'Lopez',
                'province_id'   => '20'
            ],

            [
                'id'            => '446',
                'name'          => 'Lucban',
                'province_id'   => '20'
            ],

            [
                'id'            => '447',
                'name'          => 'Macalelon',
                'province_id'   => '20'
            ],

            [
                'id'            => '448',
                'name'          => 'Mauban',
                'province_id'   => '20'
            ],

            [
                'id'            => '449',
                'name'          => 'Mulanay',
                'province_id'   => '20'
            ],

            [
                'id'            => '450',
                'name'          => 'Padre Burgos',
                'province_id'   => '20'
            ],

            [
                'id'            => '451',
                'name'          => 'Pagbilao',
                'province_id'   => '20'
            ],

            [
                'id'            => '452',
                'name'          => 'Panukulan',
                'province_id'   => '20'
            ],

            [
                'id'            => '453',
                'name'          => 'Patnanungan',
                'province_id'   => '20'
            ],

            [
                'id'            => '454',
                'name'          => 'Perez',
                'province_id'   => '20'
            ],

            [
                'id'            => '455',
                'name'          => 'Pitogo',
                'province_id'   => '20'
            ],

            [
                'id'            => '456',
                'name'          => 'Plaridel',
                'province_id'   => '20'
            ],

            [
                'id'            => '457',
                'name'          => 'Polillo',
                'province_id'   => '20'
            ],

            [
                'id'            => '458',
                'name'          => 'Quezon (Quezon)',
                'province_id'   => '20'
            ],

            [
                'id'            => '459',
                'name'          => 'Real',
                'province_id'   => '20'
            ],

            [
                'id'            => '460',
                'name'          => 'Sampaloc',
                'province_id'   => '20'
            ],

            [
                'id'            => '461',
                'name'          => 'San Andres',
                'province_id'   => '20'
            ],

            [
                'id'            => '462',
                'name'          => 'San Antonio',
                'province_id'   => '20'
            ],

            [
                'id'            => '463',
                'name'          => 'San Francisco',
                'province_id'   => '20'
            ],

            [
                'id'            => '464',
                'name'          => 'San Narciso',
                'province_id'   => '20'
            ],

            [
                'id'            => '465',
                'name'          => 'Sariaya',
                'province_id'   => '20'
            ],

            [
                'id'            => '466',
                'name'          => 'Tagkawayan',
                'province_id'   => '20'
            ],

            [
                'id'            => '467',
                'name'          => 'Tayabas',
                'province_id'   => '20'
            ],

            [
                'id'            => '468',
                'name'          => 'Tiaong',
                'province_id'   => '20'
            ],

            [
                'id'            => '469',
                'name'          => 'Unisan',
                'province_id'   => '20'
            ],



            //RIZAL
            [
                'id'            => '470',
                'name'          => 'Angono',
                'province_id'   => '21'
            ],

            [
                'id'            => '471',
                'name'          => 'Antipolo',
                'province_id'   => '21'
            ],

            [
                'id'            => '472',
                'name'          => 'Baras',
                'province_id'   => '21'
            ],

            [
                'id'            => '473',
                'name'          => 'Binangonan',
                'province_id'   => '21'
            ],

            [
                'id'            => '474',
                'name'          => 'Cainta',
                'province_id'   => '21'
            ],

            [
                'id'            => '475',
                'name'          => 'Cardona',
                'province_id'   => '21'
            ],

            [
                'id'            => '476',
                'name'          => 'Jalajala',
                'province_id'   => '21'
            ],

            [
                'id'            => '477',
                'name'          => 'Morong',
                'province_id'   => '21'
            ],

            [
                'id'            => '478',
                'name'          => 'Pililla',
                'province_id'   => '21'
            ],

            [
                'id'            => '479',
                'name'          => 'Rodriguez',
                'province_id'   => '21'
            ],

            [
                'id'            => '480',
                'name'          => 'San Mateo (Rizal)',
                'province_id'   => '21'
            ],

            [
                'id'            => '481',
                'name'          => 'Tanay',
                'province_id'   => '21'
            ],

            [
                'id'            => '482',
                'name'          => 'Taytay',
                'province_id'   => '21'
            ],

            [
                'id'            => '483',
                'name'          => 'Teresa',
                'province_id'   => '21'
            ],



            //ALBAY
            [
                'id'            => '484',
                'name'          => 'Bacacay',
                'province_id'   => '22'
            ],

            [
                'id'            => '485',
                'name'          => 'Camalig',
                'province_id'   => '22'
            ],

            [
                'id'            => '486',
                'name'          => 'Daraga',
                'province_id'   => '22'
            ],

            [
                'id'            => '487',
                'name'          => 'Guinobatan',
                'province_id'   => '22'
            ],

            [
                'id'            => '488',
                'name'          => 'Jovellar',
                'province_id'   => '22'
            ],

            [
                'id'            => '489',
                'name'          => 'Legazpi',
                'province_id'   => '22'
            ],

            [
                'id'            => '490',
                'name'          => 'Libon',
                'province_id'   => '22'
            ],

            [
                'id'            => '491',
                'name'          => 'Ligao',
                'province_id'   => '22'
            ],

            [
                'id'            => '492',
                'name'          => 'Malilipot',
                'province_id'   => '22'
            ],

            [
                'id'            => '493',
                'name'          => 'Malinao',
                'province_id'   => '22'
            ],

            [
                'id'            => '494',
                'name'          => 'Manito',
                'province_id'   => '22'
            ],

            [
                'id'            => '495',
                'name'          => 'Oas',
                'province_id'   => '22'
            ],

            [
                'id'            => '496',
                'name'          => 'Pio Duran',
                'province_id'   => '22'
            ],

            [
                'id'            => '497',
                'name'          => 'Polangui',
                'province_id'   => '22'
            ],

            [
                'id'            => '498',
                'name'          => 'Rapu-Rapu',
                'province_id'   => '22'
            ],

            [
                'id'            => '499',
                'name'          => 'Santo Domingo (Albay)',
                'province_id'   => '22'
            ],

            [
                'id'            => '500',
                'name'          => 'Tabaco',
                'province_id'   => '22'
            ],



            //CAMARINES NORTE
            [
                'id'            => '501',
                'name'          => 'Tiwi',
                'province_id'   => '22'
            ],

            [
                'id'            => '502',
                'name'          => 'Basud',
                'province_id'   => '23'
            ],

            [
                'id'            => '503',
                'name'          => 'Capalonga',
                'province_id'   => '23'
            ],

            [
                'id'            => '504',
                'name'          => 'Daet',
                'province_id'   => '23'
            ],

            [
                'id'            => '505',
                'name'          => 'Jose Panganiban',
                'province_id'   => '23'
            ],

            [
                'id'            => '506',
                'name'          => 'Labo',
                'province_id'   => '23'
            ],

            [
                'id'            => '507',
                'name'          => 'Mercedes',
                'province_id'   => '23'
            ],

            [
                'id'            => '508',
                'name'          => 'Paracale',
                'province_id'   => '23'
            ],

            [
                'id'            => '509',
                'name'          => 'San Lorenzo Ruiz',
                'province_id'   => '23'
            ],

            [
                'id'            => '510',
                'name'          => 'San Vicente (Camarines Norte)',
                'province_id'   => '23'
            ],

            [
                'id'            => '511',
                'name'          => 'Santa Elena',
                'province_id'   => '23'
            ],

            [
                'id'            => '512',
                'name'          => 'Talisay',
                'province_id'   => '23'
            ],

            [
                'id'            => '513',
                'name'          => 'Vinzons',
                'province_id'   => '23'
            ],



            //CAMARINES SUR
            [
                'id'            => '514',
                'name'          => 'Baao',
                'province_id'   => '24'
            ],

            [
                'id'            => '515',
                'name'          => 'Balatan',
                'province_id'   => '24'
            ],

            [
                'id'            => '516',
                'name'          => 'Bato',
                'province_id'   => '24'
            ],

            [
                'id'            => '517',
                'name'          => 'Bombon',
                'province_id'   => '24'
            ],

            [
                'id'            => '518',
                'name'          => 'Buhi',
                'province_id'   => '24'
            ],

            [
                'id'            => '519',
                'name'          => 'Bula',
                'province_id'   => '24'
            ],

            [
                'id'            => '520',
                'name'          => 'Cabusao',
                'province_id'   => '24'
            ],

            [
                'id'            => '521',
                'name'          => 'Calabanga',
                'province_id'   => '24'
            ],

            [
                'id'            => '522',
                'name'          => 'Camaligan',
                'province_id'   => '24'
            ],

            [
                'id'            => '523',
                'name'          => 'Canaman',
                'province_id'   => '24'
            ],

            [
                'id'            => '524',
                'name'          => 'Caramoan',
                'province_id'   => '24'
            ],

            [
                'id'            => '525',
                'name'          => 'Del Gallego',
                'province_id'   => '24'
            ],

            [
                'id'            => '526',
                'name'          => 'Gainza',
                'province_id'   => '24'
            ],

            [
                'id'            => '527',
                'name'          => 'Garchitorena',
                'province_id'   => '24'
            ],

            [
                'id'            => '528',
                'name'          => 'Goa',
                'province_id'   => '24'
            ],

            [
                'id'            => '529',
                'name'          => 'Iriga',
                'province_id'   => '24'
            ],

            [
                'id'            => '530',
                'name'          => 'Lagonoy',
                'province_id'   => '24'
            ],

            [
                'id'            => '531',
                'name'          => 'Libmanan',
                'province_id'   => '24'
            ],

            [
                'id'            => '532',
                'name'          => 'Lupi',
                'province_id'   => '24'
            ],

            [
                'id'            => '533',
                'name'          => 'Magarao',
                'province_id'   => '24'
            ],

            [
                'id'            => '534',
                'name'          => 'Milaor',
                'province_id'   => '24'
            ],

            [
                'id'            => '535',
                'name'          => 'Minalabac',
                'province_id'   => '24'
            ],

            [
                'id'            => '536',
                'name'          => 'Nabua',
                'province_id'   => '24'
            ],

            [
                'id'            => '537',
                'name'          => 'Naga',
                'province_id'   => '24'
            ],

            [
                'id'            => '538',
                'name'          => 'Ocampo',
                'province_id'   => '24'
            ],

            [
                'id'            => '539',
                'name'          => 'Pamplona',
                'province_id'   => '24'
            ],

            [
                'id'            => '540',
                'name'          => 'Pasacao',
                'province_id'   => '24'
            ],

            [
                'id'            => '541',
                'name'          => 'Pili',
                'province_id'   => '24'
            ],

            [
                'id'            => '542',
                'name'          => 'Presentacion',
                'province_id'   => '24'
            ],

            [
                'id'            => '543',
                'name'          => 'Ragay',
                'province_id'   => '24'
            ],

            [
                'id'            => '544',
                'name'          => 'Sagñay',
                'province_id'   => '24'
            ],

            [
                'id'            => '545',
                'name'          => 'San Fernando',
                'province_id'   => '24'
            ],

            [
                'id'            => '546',
                'name'          => 'San Jose (Camarines Sur)',
                'province_id'   => '24'
            ],

            [
                'id'            => '547',
                'name'          => 'Sipocot',
                'province_id'   => '24'
            ],

            [
                'id'            => '548',
                'name'          => 'Siruma',
                'province_id'   => '24'
            ],

            [
                'id'            => '549',
                'name'          => 'Tigaon',
                'province_id'   => '24'
            ],

            [
                'id'            => '550',
                'name'          => 'Tinambac',
                'province_id'   => '24'
            ],



            //CATANDUANES
            [
                'id'            => '551',
                'name'          => 'Bagamanoc',
                'province_id'   => '25'
            ],

            [
                'id'            => '552',
                'name'          => 'Baras',
                'province_id'   => '25'
            ],

            [
                'id'            => '553',
                'name'          => 'Bato',
                'province_id'   => '25'
            ],

            [
                'id'            => '554',
                'name'          => 'Caramoran',
                'province_id'   => '25'
            ],

            [
                'id'            => '555',
                'name'          => 'Gigmoto',
                'province_id'   => '25'
            ],

            [
                'id'            => '556',
                'name'          => 'Pandan',
                'province_id'   => '25'
            ],

            [
                'id'            => '557',
                'name'          => 'Panganiban',
                'province_id'   => '25'
            ],

            [
                'id'            => '558',
                'name'          => 'San Andres',
                'province_id'   => '25'
            ],

            [
                'id'            => '559',
                'name'          => 'San Miguel (Catanduanes)',
                'province_id'   => '25'
            ],

            [
                'id'            => '560',
                'name'          => 'Viga',
                'province_id'   => '25'
            ],

            [
                'id'            => '561',
                'name'          => 'Virac',
                'province_id'   => '25'
            ],



            //MASBATE
            [
                'id'            => '562',
                'name'          => 'Aroroy',
                'province_id'   => '26'
            ],

            [
                'id'            => '563',
                'name'          => 'Baleno',
                'province_id'   => '26'
            ],

            [
                'id'            => '564',
                'name'          => 'Balud',
                'province_id'   => '26'
            ],

            [
                'id'            => '565',
                'name'          => 'Batuan',
                'province_id'   => '26'
            ],

            [
                'id'            => '566',
                'name'          => 'Cataingan',
                'province_id'   => '26'
            ],

            [
                'id'            => '567',
                'name'          => 'Cawayan',
                'province_id'   => '26'
            ],

            [
                'id'            => '568',
                'name'          => 'Claveria',
                'province_id'   => '26'
            ],

            [
                'id'            => '569',
                'name'          => 'Dimasalang',
                'province_id'   => '26'
            ],

            [
                'id'            => '570',
                'name'          => 'Esperanza',
                'province_id'   => '26'
            ],

            [
                'id'            => '571',
                'name'          => 'Mandaon',
                'province_id'   => '26'
            ],

            [
                'id'            => '572',
                'name'          => 'Masbate City',
                'province_id'   => '26'
            ],

            [
                'id'            => '573',
                'name'          => 'Milagros',
                'province_id'   => '26'
            ],

            [
                'id'            => '574',
                'name'          => 'Mobo',
                'province_id'   => '26'
            ],

            [
                'id'            => '575',
                'name'          => 'Monreal',
                'province_id'   => '26'
            ],

            [
                'id'            => '576',
                'name'          => 'Palanas',
                'province_id'   => '26'
            ],

            [
                'id'            => '577',
                'name'          => 'Pio V. Corpuz',
                'province_id'   => '26'
            ],

            [
                'id'            => '578',
                'name'          => 'Placer',
                'province_id'   => '26'
            ],

            [
                'id'            => '579',
                'name'          => 'San Fernando',
                'province_id'   => '26'
            ],

            [
                'id'            => '580',
                'name'          => 'San Jacinto',
                'province_id'   => '26'
            ],

            [
                'id'            => '581',
                'name'          => 'San Pascual',
                'province_id'   => '26'
            ],

            [
                'id'            => '582',
                'name'          => 'Uson',
                'province_id'   => '26'
            ],



            //SORSOGON
            [
                'id'            => '583',
                'name'          => 'Barcelona',
                'province_id'   => '27'
            ],

            [
                'id'            => '584',
                'name'          => 'Bulan',
                'province_id'   => '27'
            ],

            [
                'id'            => '585',
                'name'          => 'Bulusan',
                'province_id'   => '27'
            ],

            [
                'id'            => '586',
                'name'          => 'Casiguran',
                'province_id'   => '27'
            ],

            [
                'id'            => '587',
                'name'          => 'Castilla',
                'province_id'   => '27'
            ],

            [
                'id'            => '588',
                'name'          => 'Donsol',
                'province_id'   => '27'
            ],

            [
                'id'            => '589',
                'name'          => 'Gubat',
                'province_id'   => '27'
            ],

            [
                'id'            => '590',
                'name'          => 'Irosin',
                'province_id'   => '27'
            ],

            [
                'id'            => '591',
                'name'          => 'Juban',
                'province_id'   => '27'
            ],

            [
                'id'            => '592',
                'name'          => 'Magallanes',
                'province_id'   => '27'
            ],

            [
                'id'            => '593',
                'name'          => 'Matnog',
                'province_id'   => '27'
            ],

            [
                'id'            => '594',
                'name'          => 'Pilar',
                'province_id'   => '27'
            ],

            [
                'id'            => '595',
                'name'          => 'Prieto Diaz',
                'province_id'   => '27'
            ],

            [
                'id'            => '596',
                'name'          => 'Santa Magdalena',
                'province_id'   => '27'
            ],

            [
                'id'            => '597',
                'name'          => 'Sorsogon City',
                'province_id'   => '27'
            ],



            //AKLAN
            [
                'id'            => '598',
                'name'          => 'Altavas',
                'province_id'   => '28'
            ],

            [
                'id'            => '599',
                'name'          => 'Balete',
                'province_id'   => '28'
            ],

            [
                'id'            => '600',
                'name'          => 'Banga',
                'province_id'   => '28'
            ],

            [
                'id'            => '601',
                'name'          => 'Batan',
                'province_id'   => '28'
            ],

            [
                'id'            => '602',
                'name'          => 'Buruanga',
                'province_id'   => '28'
            ],

            [
                'id'            => '603',
                'name'          => 'Ibajay',
                'province_id'   => '28'
            ],

            [
                'id'            => '604',
                'name'          => 'Kalibo',
                'province_id'   => '28'
            ],

            [
                'id'            => '605',
                'name'          => 'Lezo',
                'province_id'   => '28'
            ],

            [
                'id'            => '606',
                'name'          => 'Libacao',
                'province_id'   => '28'
            ],

            [
                'id'            => '607',
                'name'          => 'Madalag',
                'province_id'   => '28'
            ],

            [
                'id'            => '608',
                'name'          => 'Makato',
                'province_id'   => '28'
            ],

            [
                'id'            => '609',
                'name'          => 'Malay',
                'province_id'   => '28'
            ],

            [
                'id'            => '610',
                'name'          => 'Malay',
                'province_id'   => '28'
            ],

            [
                'id'            => '611',
                'name'          => 'Malinao',
                'province_id'   => '28'
            ],

            [
                'id'            => '612',
                'name'          => 'Nabas',
                'province_id'   => '28'
            ],

            [
                'id'            => '613',
                'name'          => 'New Washington',
                'province_id'   => '28'
            ],

            [
                'id'            => '614',
                'name'          => 'Numancia',
                'province_id'   => '28'
            ],

            [
                'id'            => '615',
                'name'          => 'Tangalan',
                'province_id'   => '28'
            ],



            //ANTIQUE
            [
                'id'            => '616',
                'name'          => 'Anini-y',
                'province_id'   => '29'
            ],

            [
                'id'            => '617',
                'name'          => 'Barbaza',
                'province_id'   => '29'
            ],

            [
                'id'            => '618',
                'name'          => 'Belison',
                'province_id'   => '29'
            ],

            [
                'id'            => '619',
                'name'          => 'Bugasong',
                'province_id'   => '29'
            ],

            [
                'id'            => '620',
                'name'          => 'Caluya',
                'province_id'   => '29'
            ],

            [
                'id'            => '621',
                'name'          => 'Culasi',
                'province_id'   => '29'
            ],

            [
                'id'            => '622',
                'name'          => 'Hamtic',
                'province_id'   => '29'
            ],

            [
                'id'            => '623',
                'name'          => 'Laua-an',
                'province_id'   => '29'
            ],

            [
                'id'            => '624',
                'name'          => 'Libertad',
                'province_id'   => '29'
            ],

            [
                'id'            => '625',
                'name'          => 'Pandan',
                'province_id'   => '29'
            ],

            [
                'id'            => '626',
                'name'          => 'Patnongon',
                'province_id'   => '29'
            ],

            [
                'id'            => '627',
                'name'          => 'San Jose de Buenavista',
                'province_id'   => '29'
            ],

            [
                'id'            => '628',
                'name'          => 'San Remigio',
                'province_id'   => '29'
            ],

            [
                'id'            => '629',
                'name'          => 'Sebaste',
                'province_id'   => '29'
            ],

            [
                'id'            => '630',
                'name'          => 'Sibalom',
                'province_id'   => '29'
            ],

            [
                'id'            => '631',
                'name'          => 'Tibiao',
                'province_id'   => '29'
            ],

            [
                'id'            => '632',
                'name'          => 'Tobias Fornier',
                'province_id'   => '29'
            ],

            [
                'id'            => '633',
                'name'          => 'Valderrama',
                'province_id'   => '29'
            ],


            //BACOLOD
            [
                'id'            => '634',
                'name'          => 'Bacolod',
                'province_id'   => '30'
            ],


            //CAPIZ
            [
                'id'            => '635',
                'name'          => 'Cuartero',
                'province_id'   => '31'
            ],

            [
                'id'            => '636',
                'name'          => 'Dao',
                'province_id'   => '31'
            ],

            [
                'id'            => '637',
                'name'          => 'Dumalag',
                'province_id'   => '31'
            ],

            [
                'id'            => '638',
                'name'          => 'Dumarao',
                'province_id'   => '31'
            ],

            [
                'id'            => '639',
                'name'          => 'Ivisan',
                'province_id'   => '31'
            ],

            [
                'id'            => '640',
                'name'          => 'Jamindan',
                'province_id'   => '31'
            ],

            [
                'id'            => '641',
                'name'          => 'Maayon',
                'province_id'   => '31'
            ],

            [
                'id'            => '642',
                'name'          => 'Mambusao',
                'province_id'   => '31'
            ],

            [
                'id'            => '643',
                'name'          => 'Panay',
                'province_id'   => '31'
            ],

            [
                'id'            => '644',
                'name'          => 'Panitan',
                'province_id'   => '31'
            ],

            [
                'id'            => '645',
                'name'          => 'Pilar',
                'province_id'   => '31'
            ],

            [
                'id'            => '646',
                'name'          => 'Pontevedra',
                'province_id'   => '31'
            ],

            [
                'id'            => '647',
                'name'          => 'President Roxas',
                'province_id'   => '31'
            ],

            [
                'id'            => '648',
                'name'          => 'Roxas City',
                'province_id'   => '31'
            ],

            [
                'id'            => '649',
                'name'          => 'Sapian',
                'province_id'   => '31'
            ],

            [
                'id'            => '650',
                'name'          => 'Sigma',
                'province_id'   => '31'
            ],

            [
                'id'            => '651',
                'name'          => 'Tapaz',
                'province_id'   => '31'
            ],



            //ILOILO
            [
                'id'            => '652',
                'name'          => 'Ajuy',
                'province_id'   => '32'
            ],

            [
                'id'            => '653',
                'name'          => 'Alimodian',
                'province_id'   => '32'
            ],

            [
                'id'            => '654',
                'name'          => 'Anilao',
                'province_id'   => '32'
            ],

            [
                'id'            => '655',
                'name'          => 'Badiangan',
                'province_id'   => '32'
            ],

            [
                'id'            => '656',
                'name'          => 'Balasan',
                'province_id'   => '32'
            ],

            [
                'id'            => '657',
                'name'          => 'Banate',
                'province_id'   => '32'
            ],

            [
                'id'            => '658',
                'name'          => 'Barotac Nuevo',
                'province_id'   => '32'
            ],

            [
                'id'            => '659',
                'name'          => 'Batad',
                'province_id'   => '32'
            ],

            [
                'id'            => '660',
                'name'          => 'Bingawan',
                'province_id'   => '32'
            ],

            [
                'id'            => '661',
                'name'          => 'Cabatuan',
                'province_id'   => '32'
            ],

            [
                'id'            => '662',
                'name'          => 'Calinog',
                'province_id'   => '32'
            ],

            [
                'id'            => '663',
                'name'          => 'Carles',
                'province_id'   => '32'
            ],

            [
                'id'            => '664',
                'name'          => 'Concepcion',
                'province_id'   => '32'
            ],

            [
                'id'            => '665',
                'name'          => 'Dingle',
                'province_id'   => '32'
            ],

            [
                'id'            => '666',
                'name'          => 'Dueñas',
                'province_id'   => '32'
            ],

            [
                'id'            => '667',
                'name'          => 'Dumangas',
                'province_id'   => '32'
            ],

            [
                'id'            => '668',
                'name'          => 'Estancia',
                'province_id'   => '32'
            ],

            [
                'id'            => '669',
                'name'          => 'Guimbal',
                'province_id'   => '32'
            ],

            [
                'id'            => '670',
                'name'          => 'Igbaras',
                'province_id'   => '32'
            ],

            [
                'id'            => '671',
                'name'          => 'Janiuay',
                'province_id'   => '32'
            ],

            [
                'id'            => '672',
                'name'          => 'Lambunao',
                'province_id'   => '32'
            ],

            [
                'id'            => '673',
                'name'          => 'Leganes',
                'province_id'   => '32'
            ],

            [
                'id'            => '674',
                'name'          => 'Lemery',
                'province_id'   => '32'
            ],

            [
                'id'            => '675',
                'name'          => 'Leon',
                'province_id'   => '32'
            ],

            [
                'id'            => '676',
                'name'          => 'Maasin',
                'province_id'   => '32'
            ],

            [
                'id'            => '677',
                'name'          => 'Miagao',
                'province_id'   => '32'
            ],

            [
                'id'            => '678',
                'name'          => 'Mina',
                'province_id'   => '32'
            ],

            [
                'id'            => '679',
                'name'          => 'New Lucena',
                'province_id'   => '32'
            ],

            [
                'id'            => '680',
                'name'          => 'Oton',
                'province_id'   => '32'
            ],

            [
                'id'            => '681',
                'name'          => 'Passi',
                'province_id'   => '32'
            ],

            [
                'id'            => '682',
                'name'          => 'Pavia',
                'province_id'   => '32'
            ],

            [
                'id'            => '683',
                'name'          => 'Pototan',
                'province_id'   => '32'
            ],

            [
                'id'            => '684',
                'name'          => 'San Dionisio',
                'province_id'   => '32'
            ],

            [
                'id'            => '685',
                'name'          => 'San Enrique',
                'province_id'   => '32'
            ],

            [
                'id'            => '686',
                'name'          => 'San Joaquin',
                'province_id'   => '32'
            ],

            [
                'id'            => '687',
                'name'          => 'San Miguel (Iloilo)',
                'province_id'   => '32'
            ],

            [
                'id'            => '688',
                'name'          => 'San Rafael',
                'province_id'   => '32'
            ],

            [
                'id'            => '689',
                'name'          => 'Santa Barbara',
                'province_id'   => '32'
            ],

            [
                'id'            => '690',
                'name'          => 'Sara',
                'province_id'   => '32'
            ],

            [
                'id'            => '691',
                'name'          => 'Sara',
                'province_id'   => '32'
            ],

            [
                'id'            => '692',
                'name'          => 'Tigbauan',
                'province_id'   => '32'
            ],

            [
                'id'            => '693',
                'name'          => 'Tubungan',
                'province_id'   => '32'
            ],

            [
                'id'            => '694',
                'name'          => 'Zarraga',
                'province_id'   => '32'
            ],



            //NEGROS OCCIDENTAL
            [
                'id'            => '695',
                'name'          => 'Bago',
                'province_id'   => '33'
            ],

            [
                'id'            => '696',
                'name'          => 'Binalbagan',
                'province_id'   => '33'
            ],

            [
                'id'            => '697',
                'name'          => 'Cadiz',
                'province_id'   => '33'
            ],

            [
                'id'            => '698',
                'name'          => 'Calatrava',
                'province_id'   => '33'
            ],

            [
                'id'            => '699',
                'name'          => 'Candoni',
                'province_id'   => '33'
            ],

            [
                'id'            => '700',
                'name'          => 'Cauayan',
                'province_id'   => '33'
            ],

            [
                'id'            => '701',
                'name'          => 'Enrique B. Magalona',
                'province_id'   => '33'
            ],

            [
                'id'            => '702',
                'name'          => 'Escalante',
                'province_id'   => '33'
            ],

            [
                'id'            => '703',
                'name'          => 'Himamaylan',
                'province_id'   => '33'
            ],

            [
                'id'            => '704',
                'name'          => 'Hinigaran',
                'province_id'   => '33'
            ],

            [
                'id'            => '705',
                'name'          => 'Hinoba-an',
                'province_id'   => '33'
            ],

            [
                'id'            => '706',
                'name'          => 'Ilog',
                'province_id'   => '33'
            ],

            [
                'id'            => '707',
                'name'          => 'Isabela',
                'province_id'   => '33'
            ],

            [
                'id'            => '708',
                'name'          => 'Kabankalan',
                'province_id'   => '33'
            ],

            [
                'id'            => '709',
                'name'          => 'La Carlota',
                'province_id'   => '33'
            ],

            [
                'id'            => '710',
                'name'          => 'La Castellana',
                'province_id'   => '33'
            ],

            [
                'id'            => '711',
                'name'          => 'Manapla',
                'province_id'   => '33'
            ],

            [
                'id'            => '712',
                'name'          => 'Moises Padilla',
                'province_id'   => '33'
            ],

            [
                'id'            => '713',
                'name'          => 'Murcia',
                'province_id'   => '33'
            ],

            [
                'id'            => '714',
                'name'          => 'Pontevedra',
                'province_id'   => '33'
            ],

            [
                'id'            => '715',
                'name'          => 'Pulupandan',
                'province_id'   => '33'
            ],

            [
                'id'            => '716',
                'name'          => 'Sagay',
                'province_id'   => '33'
            ],

            [
                'id'            => '717',
                'name'          => 'Salvador Benedicto',
                'province_id'   => '33'
            ],

            [
                'id'            => '718',
                'name'          => 'San Carlos',
                'province_id'   => '33'
            ],

            [
                'id'            => '719',
                'name'          => 'San Enrique',
                'province_id'   => '33'
            ],

            [
                'id'            => '720',
                'name'          => 'Silay',
                'province_id'   => '33'
            ],

            [
                'id'            => '721',
                'name'          => 'Sipalay',
                'province_id'   => '33'
            ],

            [
                'id'            => '722',
                'name'          => 'Talisay',
                'province_id'   => '33'
            ],

            [
                'id'            => '723',
                'name'          => 'Toboso',
                'province_id'   => '33'
            ],

            [
                'id'            => '724',
                'name'          => 'Valladolid',
                'province_id'   => '33'
            ],

            [
                'id'            => '725',
                'name'          => 'Victorias',
                'province_id'   => '33'
            ],



            //BOHOL
            [
                'id'            => '726',
                'name'          => 'Alburquerque',
                'province_id'   => '34'
            ],

            [
                'id'            => '727',
                'name'          => 'Alicia',
                'province_id'   => '34'
            ],

            [
                'id'            => '728',
                'name'          => 'Anda',
                'province_id'   => '34'
            ],

            [
                'id'            => '729',
                'name'          => 'Antequera',
                'province_id'   => '34'
            ],

            [
                'id'            => '730',
                'name'          => 'Baclayon',
                'province_id'   => '34'
            ],

            [
                'id'            => '731',
                'name'          => 'Balilihan',
                'province_id'   => '34'
            ],

            [
                'id'            => '732',
                'name'          => 'Batuan',
                'province_id'   => '34'
            ],

            [
                'id'            => '733',
                'name'          => 'Bien Unido',
                'province_id'   => '34'
            ],

            [
                'id'            => '734',
                'name'          => 'Bilar',
                'province_id'   => '34'
            ],

            [
                'id'            => '735',
                'name'          => 'Buenavista',
                'province_id'   => '34'
            ],

            [
                'id'            => '736',
                'name'          => 'Calape',
                'province_id'   => '34'
            ],

            [
                'id'            => '737',
                'name'          => 'Candijay',
                'province_id'   => '34'
            ],

            [
                'id'            => '738',
                'name'          => 'Carmen',
                'province_id'   => '34'
            ],

            [
                'id'            => '739',
                'name'          => 'Catigbian',
                'province_id'   => '34'
            ],

            [
                'id'            => '740',
                'name'          => 'Clarin',
                'province_id'   => '34'
            ],

            [
                'id'            => '741',
                'name'          => 'Corella',
                'province_id'   => '34'
            ],

            [
                'id'            => '742',
                'name'          => 'Cortes',
                'province_id'   => '34'
            ],

            [
                'id'            => '743',
                'name'          => 'Dagohoy',
                'province_id'   => '34'
            ],

            [
                'id'            => '744',
                'name'          => 'Danao',
                'province_id'   => '34'
            ],

            [
                'id'            => '745',
                'name'          => 'Dauis',
                'province_id'   => '34'
            ],

            [
                'id'            => '746',
                'name'          => 'Dimiao',
                'province_id'   => '34'
            ],

            [
                'id'            => '747',
                'name'          => 'Duero',
                'province_id'   => '34'
            ],

            [
                'id'            => '748',
                'name'          => 'Garcia Hernandez',
                'province_id'   => '34'
            ],

            [
                'id'            => '749',
                'name'          => 'Getafe',
                'province_id'   => '34'
            ],

            [
                'id'            => '750',
                'name'          => 'Guindulman',
                'province_id'   => '34'
            ],

            [
                'id'            => '751',
                'name'          => 'Inabanga',
                'province_id'   => '34'
            ],

            [
                'id'            => '752',
                'name'          => 'Jagna',
                'province_id'   => '34'
            ],

            [
                'id'            => '753',
                'name'          => 'Lila',
                'province_id'   => '34'
            ],

            [
                'id'            => '754',
                'name'          => 'Loay',
                'province_id'   => '34'
            ],

            [
                'id'            => '755',
                'name'          => 'Loboc',
                'province_id'   => '34'
            ],

            [
                'id'            => '756',
                'name'          => 'Loon',
                'province_id'   => '34'
            ],

            [
                'id'            => '757',
                'name'          => 'Mabini',
                'province_id'   => '34'
            ],

            [
                'id'            => '758',
                'name'          => 'Maribojoc',
                'province_id'   => '34'
            ],

            [
                'id'            => '759',
                'name'          => 'Panglao',
                'province_id'   => '34'
            ],

            [
                'id'            => '760',
                'name'          => 'Pilar',
                'province_id'   => '34'
            ],

            [
                'id'            => '761',
                'name'          => 'President Carlos P. Garcia',
                'province_id'   => '34'
            ],

            [
                'id'            => '762',
                'name'          => 'Sagbayan',
                'province_id'   => '34'
            ],

            [
                'id'            => '763',
                'name'          => 'San Isidro',
                'province_id'   => '34'
            ],

            [
                'id'            => '764',
                'name'          => 'San Miguel (Bohol)',
                'province_id'   => '34'
            ],

            [
                'id'            => '766',
                'name'          => 'Sevilla',
                'province_id'   => '34'
            ],

            [
                'id'            => '767',
                'name'          => 'Sierra Bullones',
                'province_id'   => '34'
            ],

            [
                'id'            => '768',
                'name'          => 'Sikatuna',
                'province_id'   => '34'
            ],

            [
                'id'            => '769',
                'name'          => 'Tagbilaran',
                'province_id'   => '34'
            ],

            [
                'id'            => '770',
                'name'          => 'Talibon',
                'province_id'   => '34'
            ],

            [
                'id'            => '771',
                'name'          => 'Trinidad',
                'province_id'   => '34'
            ],

            [
                'id'            => '772',
                'name'          => 'Tubigon',
                'province_id'   => '34'
            ],

            [
                'id'            => '773',
                'name'          => 'Ubay',
                'province_id'   => '34'
            ],

            [
                'id'            => '774',
                'name'          => 'Valencia',
                'province_id'   => '34'
            ],



            //CEBU
            [
                'id'            => '775',
                'name'          => 'Alcantara',
                'province_id'   => '35'
            ],

            [
                'id'            => '776',
                'name'          => 'Alcoy',
                'province_id'   => '35'
            ],

            [
                'id'            => '777',
                'name'          => 'Alegria',
                'province_id'   => '35'
            ],

            [
                'id'            => '778',
                'name'          => 'Aloguinsan',
                'province_id'   => '35'
            ],

            [
                'id'            => '779',
                'name'          => 'Argao',
                'province_id'   => '35'
            ],

            [
                'id'            => '780',
                'name'          => 'Asturias',
                'province_id'   => '35'
            ],

            [
                'id'            => '781',
                'name'          => 'Badian',
                'province_id'   => '35'
            ],

            [
                'id'            => '782',
                'name'          => 'Balamban',
                'province_id'   => '35'
            ],

            [
                'id'            => '783',
                'name'          => 'Bantayan',
                'province_id'   => '35'
            ],

            [
                'id'            => '784',
                'name'          => 'Barili',
                'province_id'   => '35'
            ],

            [
                'id'            => '785',
                'name'          => 'Bogo',
                'province_id'   => '35'
            ],

            [
                'id'            => '786',
                'name'          => 'Boljoon',
                'province_id'   => '35'
            ],

            [
                'id'            => '787',
                'name'          => 'Borbon',
                'province_id'   => '35'
            ],

            [
                'id'            => '788',
                'name'          => 'Carcar',
                'province_id'   => '35'
            ],

            [
                'id'            => '789',
                'name'          => 'Carmen',
                'province_id'   => '35'
            ],

            [
                'id'            => '790',
                'name'          => 'Catmon',
                'province_id'   => '35'
            ],

            [
                'id'            => '791',
                'name'          => 'Compostela',
                'province_id'   => '35'
            ],

            [
                'id'            => '792',
                'name'          => 'Consolacion',
                'province_id'   => '35'
            ],

            [
                'id'            => '793',
                'name'          => 'Cordova',
                'province_id'   => '35'
            ],

            [
                'id'            => '794',
                'name'          => 'Daanbantayan',
                'province_id'   => '35'
            ],

            [
                'id'            => '795',
                'name'          => 'Dalaguete',
                'province_id'   => '35'
            ],

            [
                'id'            => '796',
                'name'          => 'Danao',
                'province_id'   => '35'
            ],

            [
                'id'            => '797',
                'name'          => 'Dumanjug',
                'province_id'   => '35'
            ],

            [
                'id'            => '798',
                'name'          => 'Ginatilan',
                'province_id'   => '35'
            ],

            [
                'id'            => '799',
                'name'          => 'Liloan',
                'province_id'   => '35'
            ],

            [
                'id'            => '800',
                'name'          => 'Madridejos',
                'province_id'   => '35'
            ],

            [
                'id'            => '801',
                'name'          => 'Malabuyoc',
                'province_id'   => '35'
            ],

            [
                'id'            => '802',
                'name'          => 'Medellin',
                'province_id'   => '35'
            ],

            [
                'id'            => '803',
                'name'          => 'Minglanilla',
                'province_id'   => '35'
            ],

            [
                'id'            => '804',
                'name'          => 'Moalboal',
                'province_id'   => '35'
            ],

            [
                'id'            => '805',
                'name'          => 'Naga',
                'province_id'   => '35'
            ],

            [
                'id'            => '806',
                'name'          => 'Oslob',
                'province_id'   => '35'
            ],

            [
                'id'            => '807',
                'name'          => 'Pilar',
                'province_id'   => '35'
            ],

            [
                'id'            => '808',
                'name'          => 'Pinamungajan',
                'province_id'   => '35'
            ],

            [
                'id'            => '809',
                'name'          => 'Poro',
                'province_id'   => '35'
            ],

            [
                'id'            => '810',
                'name'          => 'Ronda',
                'province_id'   => '35'
            ],

            [
                'id'            => '811',
                'name'          => 'Samboan',
                'province_id'   => '35'
            ],

            [
                'id'            => '812',
                'name'          => 'San Fernando',
                'province_id'   => '35'
            ],

            [
                'id'            => '813',
                'name'          => 'San Francisco',
                'province_id'   => '35'
            ],

            [
                'id'            => '814',
                'name'          => 'San Remigio',
                'province_id'   => '35'
            ],

            [
                'id'            => '815',
                'name'          => 'Santa Fe',
                'province_id'   => '35'
            ],

            [
                'id'            => '816',
                'name'          => 'Santander',
                'province_id'   => '35'
            ],

            [
                'id'            => '817',
                'name'          => 'Sibonga',
                'province_id'   => '35'
            ],

            [
                'id'            => '818',
                'name'          => 'Sogod',
                'province_id'   => '35'
            ],

            [
                'id'            => '819',
                'name'          => 'Tabogon',
                'province_id'   => '35'
            ],

            [
                'id'            => '820',
                'name'          => 'Tabuelan',
                'province_id'   => '35'
            ],

            [
                'id'            => '821',
                'name'          => 'Talisay',
                'province_id'   => '35'
            ],

            [
                'id'            => '822',
                'name'          => 'Toledo',
                'province_id'   => '35'
            ],

            [
                'id'            => '823',
                'name'          => 'Tuburan',
                'province_id'   => '35'
            ],

            [
                'id'            => '824',
                'name'          => 'Tudela',
                'province_id'   => '35'
            ],


            //MANDAUE
            [
                'id'            => '825',
                'name'          => 'Mandaue',
                'province_id'   => '36'
            ],



            //NEGROS ORIENTAL
            [
                'id'            => '826',
                'name'          => 'Amlan',
                'province_id'   => '37'
            ],

            [
                'id'            => '827',
                'name'          => 'Ayungon',
                'province_id'   => '37'
            ],

            [
                'id'            => '828',
                'name'          => 'Bacong',
                'province_id'   => '37'
            ],

            [
                'id'            => '829',
                'name'          => 'Bais',
                'province_id'   => '37'
            ],

            [
                'id'            => '830',
                'name'          => 'Basay',
                'province_id'   => '37'
            ],

            [
                'id'            => '831',
                'name'          => 'Bayawan',
                'province_id'   => '37'
            ],

            [
                'id'            => '832',
                'name'          => 'Bindoy',
                'province_id'   => '37'
            ],

            [
                'id'            => '833',
                'name'          => 'Canlaon',
                'province_id'   => '37'
            ],

            [
                'id'            => '834',
                'name'          => 'Dauin',
                'province_id'   => '37'
            ],

            [
                'id'            => '835',
                'name'          => 'Dumaguete',
                'province_id'   => '37'
            ],

            [
                'id'            => '836',
                'name'          => 'Guihulngan',
                'province_id'   => '37'
            ],

            [
                'id'            => '837',
                'name'          => 'Jimalalud',
                'province_id'   => '37'
            ],

            [
                'id'            => '838',
                'name'          => 'La Libertad',
                'province_id'   => '37'
            ],

            [
                'id'            => '839',
                'name'          => 'Mabinay',
                'province_id'   => '37'
            ],

            [
                'id'            => '840',
                'name'          => 'Manjuyod',
                'province_id'   => '37'
            ],

            [
                'id'            => '841',
                'name'          => 'Pamplona',
                'province_id'   => '37'
            ],

            [
                'id'            => '842',
                'name'          => 'San Jose (Negros Oriental)',
                'province_id'   => '37'
            ],

            [
                'id'            => '843',
                'name'          => 'Santa Catalina (Negros Oriental)',
                'province_id'   => '37'
            ],

            [
                'id'            => '844',
                'name'          => 'Siaton',
                'province_id'   => '37'
            ],

            [
                'id'            => '845',
                'name'          => 'Sibulan',
                'province_id'   => '37'
            ],

            [
                'id'            => '846',
                'name'          => 'Tanjay',
                'province_id'   => '37'
            ],

            [
                'id'            => '847',
                'name'          => 'Tayasan',
                'province_id'   => '37'
            ],

            [
                'id'            => '848',
                'name'          => 'Valencia',
                'province_id'   => '37'
            ],

            [
                'id'            => '849',
                'name'          => 'Vallehermoso',
                'province_id'   => '37'
            ],

            [
                'id'            => '850',
                'name'          => 'Zamboanguita',
                'province_id'   => '37'
            ],



            //SIQUIJOR
            [
                'id'            => '851',
                'name'          => 'Enrique Villanueva',
                'province_id'   => '38'
            ],

            [
                'id'            => '852',
                'name'          => 'Larena',
                'province_id'   => '38'
            ],

            [
                'id'            => '853',
                'name'          => 'Lazi',
                'province_id'   => '38'
            ],

            [
                'id'            => '854',
                'name'          => 'Maria',
                'province_id'   => '38'
            ],

            [
                'id'            => '855',
                'name'          => 'San Juan (Siquijor)',
                'province_id'   => '38'
            ],

            [
                'id'            => '856',
                'name'          => 'Siquijor',
                'province_id'   => '38'
            ],


            //BILIRAN
            [
                'id'            => '857',
                'name'          => 'Almeria',
                'province_id'   => '39'
            ],

            [
                'id'            => '858',
                'name'          => 'Biliran',
                'province_id'   => '39'
            ],

            [
                'id'            => '859',
                'name'          => 'Cabucgayan',
                'province_id'   => '39'
            ],

            [
                'id'            => '860',
                'name'          => 'Caibiran',
                'province_id'   => '39'
            ],

            [
                'id'            => '861',
                'name'          => 'Culaba',
                'province_id'   => '39'
            ],

            [
                'id'            => '862',
                'name'          => 'Kawayan',
                'province_id'   => '39'
            ],

            [
                'id'            => '863',
                'name'          => 'Maripipi',
                'province_id'   => '39'
            ],

            [
                'id'            => '864',
                'name'          => 'Naval',
                'province_id'   => '39'
            ],



            //EASTERN SAMAR
            [
                'id'            => '865',
                'name'          => 'Arteche',
                'province_id'   => '40'
            ],

            [
                'id'            => '866',
                'name'          => 'Balangiga',
                'province_id'   => '40'
            ],

            [
                'id'            => '867',
                'name'          => 'Balangkayan',
                'province_id'   => '40'
            ],

            [
                'id'            => '868',
                'name'          => 'Borongan',
                'province_id'   => '40'
            ],

            [
                'id'            => '869',
                'name'          => 'Can-avid',
                'province_id'   => '40'
            ],

            [
                'id'            => '870',
                'name'          => 'Dolores',
                'province_id'   => '40'
            ],

            [
                'id'            => '871',
                'name'          => 'General MacArthur',
                'province_id'   => '40'
            ],

            [
                'id'            => '872',
                'name'          => 'Giporlos',
                'province_id'   => '40'
            ],

            [
                'id'            => '873',
                'name'          => 'Guiuan',
                'province_id'   => '40'
            ],

            [
                'id'            => '874',
                'name'          => 'Hernani',
                'province_id'   => '40'
            ],

            [
                'id'            => '875',
                'name'          => 'Jipapad',
                'province_id'   => '40'
            ],

            [
                'id'            => '876',
                'name'          => 'Lawaan',
                'province_id'   => '40'
            ],

            [
                'id'            => '877',
                'name'          => 'Llorente',
                'province_id'   => '40'
            ],

            [
                'id'            => '878',
                'name'          => 'Maslog',
                'province_id'   => '40'
            ],

            [
                'id'            => '879',
                'name'          => 'Maydolong',
                'province_id'   => '40'
            ],

            [
                'id'            => '880',
                'name'          => 'Mercedes',
                'province_id'   => '40'
            ],

            [
                'id'            => '881',
                'name'          => 'Oras',
                'province_id'   => '40'
            ],

            [
                'id'            => '882',
                'name'          => 'Quinapondan',
                'province_id'   => '40'
            ],

            [
                'id'            => '883',
                'name'          => 'Salcedo (Eastern Samar)',
                'province_id'   => '40'
            ],

            [
                'id'            => '884',
                'name'          => 'San Julian',
                'province_id'   => '40'
            ],

            [
                'id'            => '885',
                'name'          => 'San Policarpo',
                'province_id'   => '40'
            ],

            [
                'id'            => '886',
                'name'          => 'Sulat',
                'province_id'   => '40'
            ],

            [
                'id'            => '887',
                'name'          => 'Taft',
                'province_id'   => '40'
            ],



            //LEYTE
            [
                'id'            => '888',
                'name'          => 'Abuyog',
                'province_id'   => '41'
            ],

            [
                'id'            => '889',
                'name'          => 'Alangalang',
                'province_id'   => '41'
            ],

            [
                'id'            => '890',
                'name'          => 'Albuera',
                'province_id'   => '41'
            ],

            [
                'id'            => '891',
                'name'          => 'Babatngon',
                'province_id'   => '41'
            ],

            [
                'id'            => '892',
                'name'          => 'Barugo',
                'province_id'   => '41'
            ],

            [
                'id'            => '893',
                'name'          => 'Bato',
                'province_id'   => '41'
            ],

            [
                'id'            => '894',
                'name'          => 'Baybay',
                'province_id'   => '41'
            ],

            [
                'id'            => '895',
                'name'          => 'Burauen',
                'province_id'   => '41'
            ],

            [
                'id'            => '896',
                'name'          => 'Calubian',
                'province_id'   => '41'
            ],

            [
                'id'            => '897',
                'name'          => 'Capoocan',
                'province_id'   => '41'
            ],

            [
                'id'            => '898',
                'name'          => 'Carigara',
                'province_id'   => '41'
            ],

            [
                'id'            => '899',
                'name'          => 'Dagami',
                'province_id'   => '41'
            ],

            [
                'id'            => '900',
                'name'          => 'Dulag',
                'province_id'   => '41'
            ],

            [
                'id'            => '901',
                'name'          => 'Hilongos',
                'province_id'   => '41'
            ],

            [
                'id'            => '902',
                'name'          => 'Hindang',
                'province_id'   => '41'
            ],

            [
                'id'            => '903',
                'name'          => 'Inopacan',
                'province_id'   => '41'
            ],

            [
                'id'            => '904',
                'name'          => 'Isabel',
                'province_id'   => '41'
            ],

            [
                'id'            => '905',
                'name'          => 'Jaro',
                'province_id'   => '41'
            ],

            [
                'id'            => '906',
                'name'          => 'Javier',
                'province_id'   => '41'
            ],

            [
                'id'            => '907',
                'name'          => 'Julita',
                'province_id'   => '41'
            ],

            [
                'id'            => '908',
                'name'          => 'Kananga',
                'province_id'   => '41'
            ],

            [
                'id'            => '909',
                'name'          => 'La Paz',
                'province_id'   => '41'
            ],

            [
                'id'            => '910',
                'name'          => 'Leyte',
                'province_id'   => '41'
            ],

            [
                'id'            => '911',
                'name'          => 'MacArthur',
                'province_id'   => '41'
            ],

            [
                'id'            => '912',
                'name'          => 'Mahaplag',
                'province_id'   => '41'
            ],

            [
                'id'            => '913',
                'name'          => 'Matag-ob',
                'province_id'   => '41'
            ],

            [
                'id'            => '914',
                'name'          => 'Matalom',
                'province_id'   => '41'
            ],

            [
                'id'            => '915',
                'name'          => 'Mayorga',
                'province_id'   => '41'
            ],

            [
                'id'            => '916',
                'name'          => 'Merida',
                'province_id'   => '41'
            ],

            [
                'id'            => '917',
                'name'          => 'Ormoc',
                'province_id'   => '41'
            ],

            [
                'id'            => '918',
                'name'          => 'Palo',
                'province_id'   => '41'
            ],

            [
                'id'            => '919',
                'name'          => 'Palompon',
                'province_id'   => '41'
            ],

            [
                'id'            => '920',
                'name'          => 'Pastrana',
                'province_id'   => '41'
            ],

            [
                'id'            => '921',
                'name'          => 'San Isidro',
                'province_id'   => '41'
            ],

            [
                'id'            => '922',
                'name'          => 'San Miguel (Leyte)',
                'province_id'   => '41'
            ],

            [
                'id'            => '923',
                'name'          => 'Santa Fe',
                'province_id'   => '41'
            ],

            [
                'id'            => '924',
                'name'          => 'Tabango',
                'province_id'   => '41'
            ],

            [
                'id'            => '925',
                'name'          => 'Tabontabon',
                'province_id'   => '41'
            ],

            [
                'id'            => '926',
                'name'          => 'Tanauan',
                'province_id'   => '41'
            ],

            [
                'id'            => '927',
                'name'          => 'Tolosa',
                'province_id'   => '41'
            ],

            [
                'id'            => '928',
                'name'          => 'Tunga',
                'province_id'   => '41'
            ],

            [
                'id'            => '929',
                'name'          => 'Villaba',
                'province_id'   => '41'
            ],



            //NORTHERN SAMAR
            [
                'id'            => '930',
                'name'          => 'Allen',
                'province_id'   => '42'
            ],

            [
                'id'            => '931',
                'name'          => 'Biri',
                'province_id'   => '42'
            ],

            [
                'id'            => '932',
                'name'          => 'Bobon',
                'province_id'   => '42'
            ],

            [
                'id'            => '933',
                'name'          => 'Capul',
                'province_id'   => '42'
            ],

            [
                'id'            => '934',
                'name'          => 'Catarman',
                'province_id'   => '42'
            ],

            [
                'id'            => '935',
                'name'          => 'Catubig',
                'province_id'   => '42'
            ],

            [
                'id'            => '936',
                'name'          => 'Gamay',
                'province_id'   => '42'
            ],

            [
                'id'            => '937',
                'name'          => 'Laoang',
                'province_id'   => '42'
            ],

            [
                'id'            => '938',
                'name'          => 'Lapinig',
                'province_id'   => '42'
            ],

            [
                'id'            => '939',
                'name'          => 'Las Navas',
                'province_id'   => '42'
            ],

            [
                'id'            => '940',
                'name'          => 'Lavezares',
                'province_id'   => '42'
            ],

            [
                'id'            => '941',
                'name'          => 'Lope de Vega',
                'province_id'   => '42'
            ],

            [
                'id'            => '942',
                'name'          => 'Mapanas',
                'province_id'   => '42'
            ],

            [
                'id'            => '943',
                'name'          => 'Mondragon',
                'province_id'   => '42'
            ],

            [
                'id'            => '944',
                'name'          => 'Palapag',
                'province_id'   => '42'
            ],

            [
                'id'            => '945',
                'name'          => 'Pambujan',
                'province_id'   => '42'
            ],

            [
                'id'            => '946',
                'name'          => 'Rosario',
                'province_id'   => '42'
            ],

            [
                'id'            => '947',
                'name'          => 'San Antonio',
                'province_id'   => '42'
            ],

            [
                'id'            => '948',
                'name'          => 'San Isidro',
                'province_id'   => '42'
            ],

            [
                'id'            => '949',
                'name'          => 'San Jose (Northern Samar)',
                'province_id'   => '42'
            ],

            [
                'id'            => '950',
                'name'          => 'San Roque',
                'province_id'   => '42'
            ],

            [
                'id'            => '951',
                'name'          => 'San Vicente (Northern Samar)',
                'province_id'   => '42'
            ],

            [
                'id'            => '952',
                'name'          => 'Silvino Lobos',
                'province_id'   => '42'
            ],

            [
                'id'            => '953',
                'name'          => 'Victoria',
                'province_id'   => '42'
            ],



            //SAMAR
            [
                'id'            => '954',
                'name'          => 'Almagro',
                'province_id'   => '43'
            ],

            [
                'id'            => '955',
                'name'          => 'Basey',
                'province_id'   => '43'
            ],

            [
                'id'            => '956',
                'name'          => 'Calbayog',
                'province_id'   => '43'
            ],

            [
                'id'            => '957',
                'name'          => 'Calbiga',
                'province_id'   => '43'
            ],

            [
                'id'            => '958',
                'name'          => 'Catbalogan',
                'province_id'   => '43'
            ],

            [
                'id'            => '959',
                'name'          => 'Daram',
                'province_id'   => '43'
            ],

            [
                'id'            => '960',
                'name'          => 'Gandara',
                'province_id'   => '43'
            ],

            [
                'id'            => '961',
                'name'          => 'Hinabangan',
                'province_id'   => '43'
            ],

            [
                'id'            => '962',
                'name'          => 'Jiabong',
                'province_id'   => '43'
            ],

            [
                'id'            => '963',
                'name'          => 'Marabut',
                'province_id'   => '43'
            ],

            [
                'id'            => '964',
                'name'          => 'Matuguinao',
                'province_id'   => '43'
            ],

            [
                'id'            => '965',
                'name'          => 'Motiong',
                'province_id'   => '43'
            ],

            [
                'id'            => '966',
                'name'          => 'Pagsanghan',
                'province_id'   => '43'
            ],

            [
                'id'            => '967',
                'name'          => 'Paranas',
                'province_id'   => '43'
            ],

            [
                'id'            => '968',
                'name'          => 'Pinabacdao',
                'province_id'   => '43'
            ],

            [
                'id'            => '969',
                'name'          => 'San Jorge',
                'province_id'   => '43'
            ],

            [
                'id'            => '970',
                'name'          => 'San Jose de Buan',
                'province_id'   => '43'
            ],

            [
                'id'            => '971',
                'name'          => 'San Sebastian',
                'province_id'   => '43'
            ],

            [
                'id'            => '972',
                'name'          => 'Santa Margarita',
                'province_id'   => '43'
            ],

            [
                'id'            => '973',
                'name'          => 'Santa Rita',
                'province_id'   => '43'
            ],

            [
                'id'            => '974',
                'name'          => 'Santo Niño',
                'province_id'   => '43'
            ],

            [
                'id'            => '975',
                'name'          => 'Tagapul-an',
                'province_id'   => '43'
            ],

            [
                'id'            => '976',
                'name'          => 'Talalora',
                'province_id'   => '43'
            ],

            [
                'id'            => '977',
                'name'          => 'Tarangnan',
                'province_id'   => '43'
            ],

            [
                'id'            => '978',
                'name'          => 'Villareal',
                'province_id'   => '43'
            ],

            [
                'id'            => '979',
                'name'          => 'Zumarraga',
                'province_id'   => '43'
            ],



            //SOUTHERN LEYTE
            [
                'id'            => '980',
                'name'          => 'Anahawan',
                'province_id'   => '44'
            ],

            [
                'id'            => '981',
                'name'          => 'Bontoc',
                'province_id'   => '44'
            ],

            [
                'id'            => '982',
                'name'          => 'Hinunangan',
                'province_id'   => '44'
            ],

            [
                'id'            => '983',
                'name'          => 'Hinundayan',
                'province_id'   => '44'
            ],

            [
                'id'            => '984',
                'name'          => 'Libagon',
                'province_id'   => '44'
            ],

            [
                'id'            => '985',
                'name'          => 'Liloan',
                'province_id'   => '44'
            ],

            [
                'id'            => '986',
                'name'          => 'Limasawa',
                'province_id'   => '44'
            ],

            [
                'id'            => '987',
                'name'          => 'Maasin',
                'province_id'   => '44'
            ],

            [
                'id'            => '988',
                'name'          => 'Macrohon',
                'province_id'   => '44'
            ],

            [
                'id'            => '989',
                'name'          => 'Malitbog',
                'province_id'   => '44'
            ],

            [
                'id'            => '990',
                'name'          => 'Padre Burgos',
                'province_id'   => '44'
            ],

            [
                'id'            => '991',
                'name'          => 'Pintuyan',
                'province_id'   => '44'
            ],

            [
                'id'            => '992',
                'name'          => 'Saint Bernard',
                'province_id'   => '44'
            ],

            [
                'id'            => '993',
                'name'          => 'San Francisco',
                'province_id'   => '44'
            ],

            [
                'id'            => '994',
                'name'          => 'San Juan (Southern Leyte)',
                'province_id'   => '44'
            ],

            [
                'id'            => '995',
                'name'          => 'San Ricardo',
                'province_id'   => '44'
            ],

            [
                'id'            => '996',
                'name'          => 'Silago',
                'province_id'   => '44'
            ],

            [
                'id'            => '997',
                'name'          => 'Sogod',
                'province_id'   => '44'
            ],

            [
                'id'            => '998',
                'name'          => 'Tomas Oppus',
                'province_id'   => '44'
            ],


            //TACLOBAN
            [
                'id'            => '999',
                'name'          => 'Tacloban',
                'province_id'   => '45'
            ],



            //ISABELA CITY
            [
                'id'            => '1000',
                'name'          => 'Aguada',
                'province_id'   => '46'
            ],

            [
                'id'            => '1001',
                'name'          => 'Balatanay',
                'province_id'   => '46'
            ],

            [
                'id'            => '1002',
                'name'          => 'Baluno',
                'province_id'   => '46'
            ],

            [
                'id'            => '1003',
                'name'          => 'Begang',
                'province_id'   => '46'
            ],

            [
                'id'            => '1004',
                'name'          => 'Binuangan',
                'province_id'   => '46'
            ],

            [
                'id'            => '1005',
                'name'          => 'Busay',
                'province_id'   => '46'
            ],

            [
                'id'            => '1006',
                'name'          => 'Cabunbata',
                'province_id'   => '46'
            ],

            [
                'id'            => '1007',
                'name'          => 'Calvario',
                'province_id'   => '46'
            ],

            [
                'id'            => '1008',
                'name'          => 'Carbon',
                'province_id'   => '46'
            ],

            [
                'id'            => '1009',
                'name'          => 'Diki',
                'province_id'   => '46'
            ],

            [
                'id'            => '1010',
                'name'          => 'Doña Ramona T. Alano',
                'province_id'   => '46'
            ],

            [
                'id'            => '1011',
                'name'          => 'Isabela Eastside',
                'province_id'   => '46'
            ],

            [
                'id'            => '1012',
                'name'          => 'Isabela Proper',
                'province_id'   => '46'
            ],

            [
                'id'            => '1013',
                'name'          => 'Kapatagan Grande',
                'province_id'   => '46'
            ],

            [
                'id'            => '1014',
                'name'          => 'Kapayawan',
                'province_id'   => '46'
            ],

            [
                'id'            => '1015',
                'name'          => 'Kaumpurnah Zone I',
                'province_id'   => '46'
            ],


            [
                'id'            => '1016',
                'name'          => 'Kaumpurnah Zone II',
                'province_id'   => '46'
            ],

            [
                'id'            => '1017',
                'name'          => 'Kaumpurnah Zone III',
                'province_id'   => '46'
            ],

            [
                'id'            => '1018',
                'name'          => 'Kumalarang',
                'province_id'   => '46'
            ],

            [
                'id'            => '1019',
                'name'          => 'La Piedad',
                'province_id'   => '46'
            ],

            [
                'id'            => '1020',
                'name'          => 'Lampinigan',
                'province_id'   => '46'
            ],

            [
                'id'            => '1021',
                'name'          => 'Lanote',
                'province_id'   => '46'
            ],

            [
                'id'            => '1022',
                'name'          => 'Lukbuton',
                'province_id'   => '46'
            ],

            [
                'id'            => '1023',
                'name'          => 'Lumbang',
                'province_id'   => '46'
            ],

            [
                'id'            => '1024',
                'name'          => 'Makiri',
                'province_id'   => '46'
            ],

            [
                'id'            => '1025',
                'name'          => 'Maligue',
                'province_id'   => '46'
            ],

            [
                'id'            => '1026',
                'name'          => 'Marang-marang',
                'province_id'   => '46'
            ],

            [
                'id'            => '1027',
                'name'          => 'Marketsite',
                'province_id'   => '46'
            ],

            [
                'id'            => '1028',
                'name'          => 'Masula',
                'province_id'   => '46'
            ],

            [
                'id'            => '1029',
                'name'          => 'Menzi',
                'province_id'   => '46'
            ],

            [
                'id'            => '1030',
                'name'          => 'Panigayan',
                'province_id'   => '46'
            ],

            [
                'id'            => '1031',
                'name'          => 'Panunsulan',
                'province_id'   => '46'
            ],

            [
                'id'            => '1032',
                'name'          => 'Port Area',
                'province_id'   => '46'
            ],

            [
                'id'            => '1033',
                'name'          => 'Riverside',
                'province_id'   => '46'
            ],

            [
                'id'            => '1034',
                'name'          => 'San Rafael',
                'province_id'   => '46'
            ],

            [
                'id'            => '1035',
                'name'          => 'Santa Barbara',
                'province_id'   => '46'
            ],

            [
                'id'            => '1036',
                'name'          => 'Santa Cruz (Isabela City)',
                'province_id'   => '46'
            ],

            [
                'id'            => '1037',
                'name'          => 'Seaside',
                'province_id'   => '46'
            ],

            [
                'id'            => '1038',
                'name'          => 'Small Kapatagan',
                'province_id'   => '46'
            ],

            [
                'id'            => '1039',
                'name'          => 'Sumagdang',
                'province_id'   => '46'
            ],

            [
                'id'            => '1040',
                'name'          => 'Sunrise Village',
                'province_id'   => '46'
            ],

            [
                'id'            => '1041',
                'name'          => 'Tabiawan',
                'province_id'   => '46'
            ],

            [
                'id'            => '1042',
                'name'          => 'Tabuk',
                'province_id'   => '46'
            ],

            [
                'id'            => '1043',
                'name'          => 'Tampalan',
                'province_id'   => '46'
            ],

            [
                'id'            => '1044',
                'name'          => 'Timpul',
                'province_id'   => '46'
            ],


            //ZAMBOANG CITY
            [
                'id'            => '1045',
                'name'          => 'Zamboanga City',
                'province_id'   => '47'
            ],



            //ZAMBOANGA DEL NORTE
            [
                'id'            => '1046',
                'name'          => 'Baliguian',
                'province_id'   => '48'
            ],

            [
                'id'            => '1047',
                'name'          => 'Dapitan',
                'province_id'   => '48'
            ],

            [
                'id'            => '1048',
                'name'          => 'Dipolog',
                'province_id'   => '48'
            ],

            [
                'id'            => '1049',
                'name'          => 'Godod',
                'province_id'   => '48'
            ],

            [
                'id'            => '1050',
                'name'          => 'Gutalac',
                'province_id'   => '48'
            ],

            [
                'id'            => '1051',
                'name'          => 'Jose Dalman',
                'province_id'   => '48'
            ],

            [
                'id'            => '1052',
                'name'          => 'Kalawit',
                'province_id'   => '48'
            ],

            [
                'id'            => '1053',
                'name'          => 'Katipunan',
                'province_id'   => '48'
            ],

            [
                'id'            => '1054',
                'name'          => 'La Libertad',
                'province_id'   => '48'
            ],

            [
                'id'            => '1055',
                'name'          => 'Labason',
                'province_id'   => '48'
            ],

            [
                'id'            => '1056',
                'name'          => 'Leon B. Postigo',
                'province_id'   => '48'
            ],

            [
                'id'            => '1057',
                'name'          => 'Liloy',
                'province_id'   => '48'
            ],

            [
                'id'            => '1058',
                'name'          => 'Manukan',
                'province_id'   => '48'
            ],

            [
                'id'            => '1059',
                'name'          => 'Mutia',
                'province_id'   => '48'
            ],

            [
                'id'            => '1060',
                'name'          => 'Piñan',
                'province_id'   => '48'
            ],

            [
                'id'            => '1061',
                'name'          => 'Polanco',
                'province_id'   => '48'
            ],

            [
                'id'            => '1062',
                'name'          => 'President Manuel A. Roxas',
                'province_id'   => '48'
            ],

            [
                'id'            => '1063',
                'name'          => 'Rizal (Zamboanga Del Norte)',
                'province_id'   => '48'
            ],

            [
                'id'            => '1064',
                'name'          => 'Salug',
                'province_id'   => '48'
            ],

            [
                'id'            => '1065',
                'name'          => 'Sergio Osmeña Sr.',
                'province_id'   => '48'
            ],

            [
                'id'            => '1066',
                'name'          => 'Siayan',
                'province_id'   => '48'
            ],

            [
                'id'            => '1067',
                'name'          => 'Sibuco',
                'province_id'   => '48'
            ],

            [
                'id'            => '1068',
                'name'          => 'Sibutad',
                'province_id'   => '48'
            ],

            [
                'id'            => '1069',
                'name'          => 'Sindangan',
                'province_id'   => '48'
            ],

            [
                'id'            => '1070',
                'name'          => 'Siocon',
                'province_id'   => '48'
            ],

            [
                'id'            => '1071',
                'name'          => 'Sirawai',
                'province_id'   => '48'
            ],

            [
                'id'            => '1072',
                'name'          => 'Tampilisan',
                'province_id'   => '48'
            ],



            //ZAMBOANGA DEL SUR
            [
                'id'            => '1073',
                'name'          => 'Aurora',
                'province_id'   => '49'
            ],

            [
                'id'            => '1074',
                'name'          => 'Bayog',
                'province_id'   => '49'
            ],

            [
                'id'            => '1075',
                'name'          => 'Dimataling',
                'province_id'   => '49'
            ],

            [
                'id'            => '1076',
                'name'          => 'Dinas',
                'province_id'   => '49'
            ],

            [
                'id'            => '1077',
                'name'          => 'Dumalinao',
                'province_id'   => '49'
            ],

            [
                'id'            => '1078',
                'name'          => 'Dumingag',
                'province_id'   => '49'
            ],

            [
                'id'            => '1079',
                'name'          => 'Guipos',
                'province_id'   => '49'
            ],

            [
                'id'            => '1080',
                'name'          => 'Josefina',
                'province_id'   => '49'
            ],

            [
                'id'            => '1081',
                'name'          => 'Kumalarang',
                'province_id'   => '49'
            ],

            [
                'id'            => '1082',
                'name'          => 'Labangan',
                'province_id'   => '49'
            ],

            [
                'id'            => '1083',
                'name'          => 'Lakewood',
                'province_id'   => '49'
            ],

            [
                'id'            => '1084',
                'name'          => 'Lapuyan',
                'province_id'   => '49'
            ],

            [
                'id'            => '1085',
                'name'          => 'Mahayag',
                'province_id'   => '49'
            ],

            [
                'id'            => '1086',
                'name'          => 'Margosatubig',
                'province_id'   => '49'
            ],

            [
                'id'            => '1087',
                'name'          => 'Midsalip',
                'province_id'   => '49'
            ],

            [
                'id'            => '1088',
                'name'          => 'Molave',
                'province_id'   => '49'
            ],

            [
                'id'            => '1089',
                'name'          => 'Pagadian',
                'province_id'   => '49'
            ],

            [
                'id'            => '1090',
                'name'          => 'Pitogo',
                'province_id'   => '49'
            ],

            [
                'id'            => '1091',
                'name'          => 'Ramon Magsaysay',
                'province_id'   => '49'
            ],

            [
                'id'            => '1092',
                'name'          => 'San Miguel (Zamboanga Del Sur)',
                'province_id'   => '49'
            ],

            [
                'id'            => '1093',
                'name'          => 'San Pablo (Zamboanga Del Sur)',
                'province_id'   => '49'
            ],

            [
                'id'            => '1094',
                'name'          => 'Sominot',
                'province_id'   => '49'
            ],

            [
                'id'            => '1095',
                'name'          => 'Tabina',
                'province_id'   => '49'
            ],

            [
                'id'            => '1096',
                'name'          => 'Tambulig',
                'province_id'   => '49'
            ],

            [
                'id'            => '1097',
                'name'          => 'Tigbao',
                'province_id'   => '49'
            ],

            [
                'id'            => '1098',
                'name'          => 'Tukuran',
                'province_id'   => '49'
            ],

            [
                'id'            => '1099',
                'name'          => 'Vincenzo A. Sagun',
                'province_id'   => '49'
            ],



            //ZAMBOANGA SIBUGAY
            [
                'id'            => '1100',
                'name'          => 'Alicia',
                'province_id'   => '50'
            ],

            [
                'id'            => '1101',
                'name'          => 'Buug',
                'province_id'   => '50'
            ],

            [
                'id'            => '1102',
                'name'          => 'Diplahan',
                'province_id'   => '50'
            ],

            [
                'id'            => '1103',
                'name'          => 'Imelda',
                'province_id'   => '50'
            ],

            [
                'id'            => '1104',
                'name'          => 'Ipil',
                'province_id'   => '50'
            ],

            [
                'id'            => '1105',
                'name'          => 'Kabasalan',
                'province_id'   => '50'
            ],

            [
                'id'            => '1106',
                'name'          => 'Mabuhay',
                'province_id'   => '50'
            ],

            [
                'id'            => '1107',
                'name'          => 'Malangas',
                'province_id'   => '50'
            ],

            [
                'id'            => '1108',
                'name'          => 'Naga',
                'province_id'   => '50'
            ],

            [
                'id'            => '1109',
                'name'          => 'Olutanga',
                'province_id'   => '50'
            ],

            [
                'id'            => '1110',
                'name'          => 'Payao',
                'province_id'   => '50'
            ],

            [
                'id'            => '1111',
                'name'          => 'Roseller Lim',
                'province_id'   => '50'
            ],

            [
                'id'            => '1112',
                'name'          => 'Siay',
                'province_id'   => '50'
            ],

            [
                'id'            => '1113',
                'name'          => 'Talusan',
                'province_id'   => '50'
            ],

            [
                'id'            => '1114',
                'name'          => 'Titay',
                'province_id'   => '50'
            ],

            [
                'id'            => '1115',
                'name'          => 'Tungawan',
                'province_id'   => '50'
            ],



            //BUKIDNON
            [
                'id'            => '1116',
                'name'          => 'Baungon',
                'province_id'   => '51'
            ],

            [
                'id'            => '1117',
                'name'          => 'Cabanglasan',
                'province_id'   => '51'
            ],

            [
                'id'            => '1118',
                'name'          => 'Damulog',
                'province_id'   => '51'
            ],

            [
                'id'            => '1119',
                'name'          => 'Dangcagan',
                'province_id'   => '51'
            ],

            [
                'id'            => '1120',
                'name'          => 'Don Carlos',
                'province_id'   => '51'
            ],

            [
                'id'            => '1121',
                'name'          => 'Impasugong',
                'province_id'   => '51'
            ],

            [
                'id'            => '1122',
                'name'          => 'Kadingilan',
                'province_id'   => '51'
            ],

            [
                'id'            => '1123',
                'name'          => 'Kalilangan',
                'province_id'   => '51'
            ],

            [
                'id'            => '1124',
                'name'          => 'Kibawe',
                'province_id'   => '51'
            ],

            [
                'id'            => '1125',
                'name'          => 'Kitaotao',
                'province_id'   => '51'
            ],

            [
                'id'            => '1126',
                'name'          => 'Lantapan',
                'province_id'   => '51'
            ],

            [
                'id'            => '1127',
                'name'          => 'Libona',
                'province_id'   => '51'
            ],

            [
                'id'            => '1128',
                'name'          => 'Malaybalay',
                'province_id'   => '51'
            ],

            [
                'id'            => '1129',
                'name'          => 'Malitbog',
                'province_id'   => '51'
            ],

            [
                'id'            => '1130',
                'name'          => 'Manolo Fortich',
                'province_id'   => '51'
            ],

            [
                'id'            => '1131',
                'name'          => 'Maramag',
                'province_id'   => '51'
            ],

            [
                'id'            => '1132',
                'name'          => 'Pangantucan',
                'province_id'   => '51'
            ],

            [
                'id'            => '1133',
                'name'          => 'Quezon (Bukidnon)',
                'province_id'   => '51'
            ],

            [
                'id'            => '1134',
                'name'          => 'San Fernando',
                'province_id'   => '51'
            ],

            [
                'id'            => '1135',
                'name'          => 'Sumilao',
                'province_id'   => '51'
            ],

            [
                'id'            => '1136',
                'name'          => 'Talakag',
                'province_id'   => '51'
            ],

            [
                'id'            => '1137',
                'name'          => 'Valencia',
                'province_id'   => '51'
            ],


            //CAGAYAN DE ORO
            [
                'id'            => '1138',
                'name'          => 'Cagayan De Oro',
                'province_id'   => '52'
            ],


            //CAMIGUIN
            [
                'id'            => '1139',
                'name'          => 'Catarman',
                'province_id'   => '53'
            ],

            [
                'id'            => '1140',
                'name'          => 'Guinsiliban',
                'province_id'   => '53'
            ],

            [
                'id'            => '1141',
                'name'          => 'Mahinog',
                'province_id'   => '53'
            ],

            [
                'id'            => '1142',
                'name'          => 'Mambajao',
                'province_id'   => '53'
            ],

            [
                'id'            => '1143',
                'name'          => 'Sagay',
                'province_id'   => '53'
            ],


            //ILIGAN
            [
                'id'            => '1144',
                'name'          => 'Iligan',
                'province_id'   => '54'
            ],



            //LANAO DEL NORTE
            [
                'id'            => '1145',
                'name'          => 'Bacolod',
                'province_id'   => '55'
            ],

            [
                'id'            => '1146',
                'name'          => 'Baloi',
                'province_id'   => '55'
            ],

            [
                'id'            => '1147',
                'name'          => 'Baroy',
                'province_id'   => '55'
            ],

            [
                'id'            => '1148',
                'name'          => 'Kapatagan',
                'province_id'   => '55'
            ],

            [
                'id'            => '1149',
                'name'          => 'Kauswagan',
                'province_id'   => '55'
            ],

            [
                'id'            => '1150',
                'name'          => 'Kolambugan',
                'province_id'   => '55'
            ],

            [
                'id'            => '1151',
                'name'          => 'Lala',
                'province_id'   => '55'
            ],

            [
                'id'            => '1152',
                'name'          => 'Linamon',
                'province_id'   => '55'
            ],

            [
                'id'            => '1153',
                'name'          => 'Magsaysay (Lanao Del Norte)',
                'province_id'   => '55'
            ],

            [
                'id'            => '1154',
                'name'          => 'Maigo',
                'province_id'   => '55'
            ],

            [
                'id'            => '1155',
                'name'          => 'Matungao',
                'province_id'   => '55'
            ],

            [
                'id'            => '1156',
                'name'          => 'Munai',
                'province_id'   => '55'
            ],

            [
                'id'            => '1157',
                'name'          => 'Nunungan',
                'province_id'   => '55'
            ],


            [
                'id'            => '1158',
                'name'          => 'Pantao Ragat',
                'province_id'   => '55'
            ],

            [
                'id'            => '1160',
                'name'          => 'Pantar',
                'province_id'   => '55'
            ],

            [
                'id'            => '1161',
                'name'          => 'Poona Piagapo',
                'province_id'   => '55'
            ],

            [
                'id'            => '1162',
                'name'          => 'Salvador',
                'province_id'   => '55'
            ],

            [
                'id'            => '1163',
                'name'          => 'Sapad',
                'province_id'   => '55'
            ],

            [
                'id'            => '1164',
                'name'          => 'Sultan Naga Dimaporo',
                'province_id'   => '55'
            ],

            [
                'id'            => '1165',
                'name'          => 'Tagoloan',
                'province_id'   => '55'
            ],

            [
                'id'            => '1166',
                'name'          => 'Tangcal',
                'province_id'   => '55'
            ],

            [
                'id'            => '1167',
                'name'          => 'Tubod',
                'province_id'   => '55'
            ],



            //MISAMIS OCCIDENTAL
            [
                'id'            => '1168',
                'name'          => 'Aloran',
                'province_id'   => '56'
            ],

            [
                'id'            => '1169',
                'name'          => 'Baliangao',
                'province_id'   => '56'
            ],

            [
                'id'            => '1170',
                'name'          => 'Bonifacio',
                'province_id'   => '56'
            ],

            [
                'id'            => '1171',
                'name'          => 'Calamba',
                'province_id'   => '56'
            ],

            [
                'id'            => '1172',
                'name'          => 'Clarin',
                'province_id'   => '56'
            ],

            [
                'id'            => '1173',
                'name'          => 'Concepcion',
                'province_id'   => '56'
            ],

            [
                'id'            => '1174',
                'name'          => 'Don Victoriano Chiongbian',
                'province_id'   => '56'
            ],

            [
                'id'            => '1175',
                'name'          => 'Jimenez',
                'province_id'   => '56'
            ],

            [
                'id'            => '1176',
                'name'          => 'Lopez Jaena',
                'province_id'   => '56'
            ],

            [
                'id'            => '1177',
                'name'          => 'Oroquieta',
                'province_id'   => '56'
            ],

            [
                'id'            => '1178',
                'name'          => 'Ozamiz',
                'province_id'   => '56'
            ],

            [
                'id'            => '1179',
                'name'          => 'Panaon',
                'province_id'   => '56'
            ],

            [
                'id'            => '1180',
                'name'          => 'Plaridel',
                'province_id'   => '56'
            ],

            [
                'id'            => '1181',
                'name'          => 'Sapang Dalaga',
                'province_id'   => '56'
            ],

            [
                'id'            => '1182',
                'name'          => 'Sinacaban',
                'province_id'   => '56'
            ],

            [
                'id'            => '1183',
                'name'          => 'Tangub',
                'province_id'   => '56'
            ],

            [
                'id'            => '1184',
                'name'          => 'Tudela',
                'province_id'   => '56'
            ],



            //MISAMIS ORIENTAL
            [
                'id'            => '1185',
                'name'          => 'Alubijid',
                'province_id'   => '57'
            ],

            [
                'id'            => '1186',
                'name'          => 'Balingasag',
                'province_id'   => '57'
            ],

            [
                'id'            => '1187',
                'name'          => 'Balingoan',
                'province_id'   => '57'
            ],

            [
                'id'            => '1188',
                'name'          => 'Binuangan',
                'province_id'   => '57'
            ],

            [
                'id'            => '1189',
                'name'          => 'Claveria',
                'province_id'   => '57'
            ],

            [
                'id'            => '1190',
                'name'          => 'El Salvador',
                'province_id'   => '57'
            ],

            [
                'id'            => '1191',
                'name'          => 'Gingoog',
                'province_id'   => '57'
            ],

            [
                'id'            => '1192',
                'name'          => 'Gitagum',
                'province_id'   => '57'
            ],

            [
                'id'            => '1193',
                'name'          => 'Initao',
                'province_id'   => '57'
            ],

            [
                'id'            => '1194',
                'name'          => 'Jasaan',
                'province_id'   => '57'
            ],

            [
                'id'            => '1195',
                'name'          => 'Kinoguitan',
                'province_id'   => '57'
            ],

            [
                'id'            => '1196',
                'name'          => 'Lagonglong',
                'province_id'   => '57'
            ],

            [
                'id'            => '1197',
                'name'          => 'Laguindingan',
                'province_id'   => '57'
            ],

            [
                'id'            => '1198',
                'name'          => 'Libertad',
                'province_id'   => '57'
            ],

            [
                'id'            => '1199',
                'name'          => 'Lugait',
                'province_id'   => '57'
            ],

            [
                'id'            => '1200',
                'name'          => 'Magsaysay (Misamis Oriental)',
                'province_id'   => '57'
            ],

            [
                'id'            => '1201',
                'name'          => 'Manticao',
                'province_id'   => '57'
            ],

            [
                'id'            => '1202',
                'name'          => 'Medina',
                'province_id'   => '57'
            ],

            [
                'id'            => '1203',
                'name'          => 'Naawan',
                'province_id'   => '57'
            ],

            [
                'id'            => '1204',
                'name'          => 'Opol',
                'province_id'   => '57'
            ],

            [
                'id'            => '1205',
                'name'          => 'Salay',
                'province_id'   => '57'
            ],

            [
                'id'            => '1206',
                'name'          => 'Sugbongcogon',
                'province_id'   => '57'
            ],

            [
                'id'            => '1207',
                'name'          => 'Tagoloan',
                'province_id'   => '57'
            ],

            [
                'id'            => '1208',
                'name'          => 'Talisayan',
                'province_id'   => '57'
            ],

            [
                'id'            => '1209',
                'name'          => 'Villanueva',
                'province_id'   => '57'
            ],



            //DAVAO DE ORO
            [
                'id'            => '1210',
                'name'          => 'Compostela',
                'province_id'   => '58'
            ],

            [
                'id'            => '1211',
                'name'          => 'Laak',
                'province_id'   => '58'
            ],

            [
                'id'            => '1212',
                'name'          => 'Mabini',
                'province_id'   => '58'
            ],

            [
                'id'            => '1213',
                'name'          => 'Maco',
                'province_id'   => '58'
            ],

            [
                'id'            => '1214',
                'name'          => 'Maragusan',
                'province_id'   => '58'
            ],

            [
                'id'            => '1215',
                'name'          => 'Mawab',
                'province_id'   => '58'
            ],

            [
                'id'            => '1216',
                'name'          => 'Monkayo',
                'province_id'   => '58'
            ],

            [
                'id'            => '1217',
                'name'          => 'Montevista',
                'province_id'   => '58'
            ],

            [
                'id'            => '1218',
                'name'          => 'Nabunturan',
                'province_id'   => '58'
            ],

            [
                'id'            => '1219',
                'name'          => 'New Bataan',
                'province_id'   => '58'
            ],

            [
                'id'            => '1220',
                'name'          => 'Pantukan',
                'province_id'   => '58'
            ],


            //DAVAO CITY
            [
                'id'            => '1221',
                'name'          => 'Davao City',
                'province_id'   => '59'
            ],



            //DAVAO DEL NORTE
            [
                'id'            => '1222',
                'name'          => 'Asuncion',
                'province_id'   => '60'
            ],

            [
                'id'            => '1223',
                'name'          => 'Braulio E. Dujali',
                'province_id'   => '60'
            ],

            [
                'id'            => '1224',
                'name'          => 'Carmen',
                'province_id'   => '60'
            ],

            [
                'id'            => '1225',
                'name'          => 'Kapalong',
                'province_id'   => '60'
            ],

            [
                'id'            => '1226',
                'name'          => 'New Corella',
                'province_id'   => '60'
            ],

            [
                'id'            => '1227',
                'name'          => 'Panabo',
                'province_id'   => '60'
            ],

            [
                'id'            => '1228',
                'name'          => 'Samal',
                'province_id'   => '60'
            ],

            [
                'id'            => '1229',
                'name'          => 'San Isidro',
                'province_id'   => '60'
            ],

            [
                'id'            => '1230',
                'name'          => 'Santo Tomas',
                'province_id'   => '60'
            ],

            [
                'id'            => '1231',
                'name'          => 'Tagum',
                'province_id'   => '60'
            ],

            [
                'id'            => '1232',
                'name'          => 'Talaingod',
                'province_id'   => '60'
            ],



            //DAVAO DEL SUR
            [
                'id'            => '1233',
                'name'          => 'Bansalan',
                'province_id'   => '61'
            ],

            [
                'id'            => '1234',
                'name'          => 'Digos',
                'province_id'   => '61'
            ],

            [
                'id'            => '1235',
                'name'          => 'Hagonoy',
                'province_id'   => '61'
            ],

            [
                'id'            => '1236',
                'name'          => 'Kiblawan',
                'province_id'   => '61'
            ],

            [
                'id'            => '1237',
                'name'          => 'Magsaysay (Davao Del Sur)',
                'province_id'   => '61'
            ],

            [
                'id'            => '1238',
                'name'          => 'Malalag',
                'province_id'   => '61'
            ],

            [
                'id'            => '1239',
                'name'          => 'Matanao',
                'province_id'   => '61'
            ],

            [
                'id'            => '1240',
                'name'          => 'Padada',
                'province_id'   => '61'
            ],

            [
                'id'            => '1241',
                'name'          => 'Santa Cruz (Davao Del Sur)',
                'province_id'   => '61'
            ],

            [
                'id'            => '1242',
                'name'          => 'Sulop',
                'province_id'   => '61'
            ],



            //DAVAO OCCIDENTAL
            [
                'id'            => '1243',
                'name'          => 'Don Marcelino',
                'province_id'   => '62'
            ],

            [
                'id'            => '1244',
                'name'          => 'Jose Abad Santos',
                'province_id'   => '62'
            ],

            [
                'id'            => '1245',
                'name'          => 'Malita',
                'province_id'   => '62'
            ],

            [
                'id'            => '1246',
                'name'          => 'Santa Maria (Davao Occidental)',
                'province_id'   => '62'
            ],

            [
                'id'            => '1247',
                'name'          => 'Sarangani',
                'province_id'   => '62'
            ],



            //DAVAO ORIENTAL
            [
                'id'            => '1248',
                'name'          => 'Baganga',
                'province_id'   => '63'
            ],

            [
                'id'            => '1249',
                'name'          => 'Banaybanay',
                'province_id'   => '63'
            ],

            [
                'id'            => '1250',
                'name'          => 'Boston',
                'province_id'   => '63'
            ],

            [
                'id'            => '1251',
                'name'          => 'Caraga',
                'province_id'   => '63'
            ],

            [
                'id'            => '1252',
                'name'          => 'Cateel',
                'province_id'   => '63'
            ],

            [
                'id'            => '1253',
                'name'          => 'Governor Generoso',
                'province_id'   => '63'
            ],

            [
                'id'            => '1254',
                'name'          => 'Lupon',
                'province_id'   => '63'
            ],

            [
                'id'            => '1255',
                'name'          => 'Manay',
                'province_id'   => '63'
            ],

            [
                'id'            => '1256',
                'name'          => 'Mati',
                'province_id'   => '63'
            ],

            [
                'id'            => '1257',
                'name'          => 'San Isidro',
                'province_id'   => '63'
            ],

            [
                'id'            => '1258',
                'name'          => 'Tarragona',
                'province_id'   => '63'
            ],



            //COTOBATO
            [
                'id'            => '1259',
                'name'          => 'Alamada',
                'province_id'   => '64'
            ],

            [
                'id'            => '1260',
                'name'          => 'Aleosan',
                'province_id'   => '64'
            ],

            [
                'id'            => '1261',
                'name'          => 'Antipas',
                'province_id'   => '64'
            ],

            [
                'id'            => '1262',
                'name'          => 'Arakan',
                'province_id'   => '64'
            ],

            [
                'id'            => '1263',
                'name'          => 'Banisilan',
                'province_id'   => '64'
            ],

            [
                'id'            => '1264',
                'name'          => 'Carmen',
                'province_id'   => '64'
            ],

            [
                'id'            => '1265',
                'name'          => 'Kabacan',
                'province_id'   => '64'
            ],

            [
                'id'            => '1266',
                'name'          => 'Kidapawan',
                'province_id'   => '64'
            ],

            [
                'id'            => '1267',
                'name'          => 'Libungan',
                'province_id'   => '64'
            ],

            [
                'id'            => '1268',
                'name'          => 'Magpet',
                'province_id'   => '64'
            ],

            [
                'id'            => '1269',
                'name'          => 'Makilala',
                'province_id'   => '64'
            ],

            [
                'id'            => '1270',
                'name'          => 'Matalam',
                'province_id'   => '64'
            ],

            [
                'id'            => '1271',
                'name'          => 'Midsayap',
                'province_id'   => '64'
            ],

            [
                'id'            => '1272',
                'name'          => "M'lang",
                'province_id'   => '64'
            ],

            [
                'id'            => '1273',
                'name'          => 'Pigcawayan',
                'province_id'   => '64'
            ],

            [
                'id'            => '1274',
                'name'          => 'Pikit',
                'province_id'   => '64'
            ],

            [
                'id'            => '1275',
                'name'          => 'President Roxas',
                'province_id'   => '64'
            ],

            [
                'id'            => '1276',
                'name'          => 'Tulunan',
                'province_id'   => '64'
            ],


            //COTOBATO CITY
            [
                'id'            => '1277',
                'name'          => 'Cotobato City',
                'province_id'   => '65'
            ],


            //GENERAL SANTOS
            [
                'id'            => '1278',
                'name'          => 'General Santos',
                'province_id'   => '66'
            ],



            //SARANGGANI
            [
                'id'            => '1279',
                'name'          => 'Alabel',
                'province_id'   => '67'
            ],

            [
                'id'            => '1280',
                'name'          => 'Glan',
                'province_id'   => '67'
            ],

            [
                'id'            => '1281',
                'name'          => 'Kiamba',
                'province_id'   => '67'
            ],

            [
                'id'            => '1282',
                'name'          => 'Maasim',
                'province_id'   => '67'
            ],

            [
                'id'            => '1283',
                'name'          => 'Maitum',
                'province_id'   => '67'
            ],

            [
                'id'            => '1284',
                'name'          => 'Malapatan',
                'province_id'   => '67'
            ],

            [
                'id'            => '1285',
                'name'          => 'Malungon',
                'province_id'   => '67'
            ],



            //SOUTH COTABATO
            [
                'id'            => '1286',
                'name'          => 'Banga',
                'province_id'   => '68'
            ],

            [
                'id'            => '1287',
                'name'          => 'Koronadal',
                'province_id'   => '68'
            ],

            [
                'id'            => '1288',
                'name'          => 'Lake Sebu',
                'province_id'   => '68'
            ],

            [
                'id'            => '1289',
                'name'          => 'Norala',
                'province_id'   => '68'
            ],

            [
                'id'            => '1290',
                'name'          => 'Polomolok',
                'province_id'   => '68'
            ],

            [
                'id'            => '1291',
                'name'          => 'Santo Niño',
                'province_id'   => '68'
            ],

            [
                'id'            => '1292',
                'name'          => 'Surallah',
                'province_id'   => '68'
            ],

            [
                'id'            => '1293',
                'name'          => 'Tampakan',
                'province_id'   => '68'
            ],

            [
                'id'            => '1294',
                'name'          => 'Tantangan',
                'province_id'   => '68'
            ],

            [
                'id'            => '1295',
                'name'          => "T'Boli",
                'province_id'   => '68'
            ],

            [
                'id'            => '1296',
                'name'          => 'Tupi',
                'province_id'   => '68'
            ],



            //SULTAN KUDARAT
            [
                'id'            => '1297',
                'name'          => 'Bagumbayan',
                'province_id'   => '69'
            ],

            [
                'id'            => '1298',
                'name'          => 'Columbio',
                'province_id'   => '69'
            ],

            [
                'id'            => '1299',
                'name'          => 'Esperanza',
                'province_id'   => '69'
            ],

            [
                'id'            => '1300',
                'name'          => 'Isulan',
                'province_id'   => '69'
            ],

            [
                'id'            => '1301',
                'name'          => 'Kalamansig',
                'province_id'   => '69'
            ],

            [
                'id'            => '1302',
                'name'          => 'Lambayong',
                'province_id'   => '69'
            ],

            [
                'id'            => '1303',
                'name'          => 'Lebak',
                'province_id'   => '69'
            ],

            [
                'id'            => '1304',
                'name'          => 'Lutayan',
                'province_id'   => '69'
            ],

            [
                'id'            => '1305',
                'name'          => 'Palimbang',
                'province_id'   => '69'
            ],

            [
                'id'            => '1306',
                'name'          => 'President Quirino',
                'province_id'   => '69'
            ],

            [
                'id'            => '1307',
                'name'          => 'Senator Ninoy Aquino',
                'province_id'   => '69'
            ],

            [
                'id'            => '1308',
                'name'          => 'Tacurong',
                'province_id'   => '69'
            ],


            //CALOOCAN
            [
                'id'            => '1309',
                'name'          => 'Caloocan',
                'province_id'   => '70'
            ],


            //LAS PIÑAS
            [
                'id'            => '1310',
                'name'          => 'Las Piñas',
                'province_id'   => '71'
            ],


            //MAKATI
            [
                'id'            => '1311',
                'name'          => 'Makati',
                'province_id'   => '72'
            ],


            //MALABON
            [
                'id'            => '1312',
                'name'          => 'Malabon',
                'province_id'   => '73'
            ],


            //MANDALUYONG
            [
                'id'            => '1313',
                'name'          => 'Mandaluyong',
                'province_id'   => '74'
            ],


            //MANILA
            [
                'id'            => '1314',
                'name'          => 'Manila',
                'province_id'   => '75'
            ],


            //MARIKINA
            [
                'id'            => '1315',
                'name'          => 'Marikina',
                'province_id'   => '76'
            ],


            //MUNTINLUPA
            [
                'id'            => '1316',
                'name'          => 'Muntinlupa',
                'province_id'   => '77'
            ],


            //NAVOTAS
            [
                'id'            => '1317',
                'name'          => 'Navotas',
                'province_id'   => '78'
            ],


            //PARAÑAQUE
            [
                'id'            => '1318',
                'name'          => 'Parañaque',
                'province_id'   => '79'
            ],


            //PASAY
            [
                'id'            => '1319',
                'name'          => 'Pasay',
                'province_id'   => '80'
            ],


            //PASIG
            [
                'id'            => '1320',
                'name'          => 'Pasig',
                'province_id'   => '81'
            ],



            //PATEROS
            [
                'id'            => '1321',
                'name'          => 'Pateros',
                'province_id'   => '82'
            ],


            //QUEZON CITY
            [
                'id'            => '1322',
                'name'          => 'Quezon City',
                'province_id'   => '83'
            ],


            //SAN JUAN
            [
                'id'            => '1323',
                'name'          => 'San Juan',
                'province_id'   => '84'
            ],


            //TAGUIG
            [
                'id'            => '1324',
                'name'          => 'Taguig',
                'province_id'   => '85'
            ],


            //VALENZUELA
            [
                'id'            => '1325',
                'name'          => 'Valenzuela',
                'province_id'   => '86'
            ],


            //ABRA
            [
                'id'            => '1326',
                'name'          => 'Bangued',
                'province_id'   => '87'
            ],

            [
                'id'            => '1327',
                'name'          => 'Boliney',
                'province_id'   => '87'
            ],

            [
                'id'            => '1328',
                'name'          => 'Bucay',
                'province_id'   => '87'
            ],

            [
                'id'            => '1329',
                'name'          => 'Bucloc',
                'province_id'   => '87'
            ],

            [
                'id'            => '1330',
                'name'          => 'Daguioman',
                'province_id'   => '87'
            ],

            [
                'id'            => '1331',
                'name'          => 'Danglas',
                'province_id'   => '87'
            ],

            [
                'id'            => '1332',
                'name'          => 'Dolores',
                'province_id'   => '87'
            ],

            [
                'id'            => '1333',
                'name'          => 'La Paz',
                'province_id'   => '87'
            ],

            [
                'id'            => '1334',
                'name'          => 'Lacub',
                'province_id'   => '87'
            ],

            [
                'id'            => '1335',
                'name'          => 'Lagangilang',
                'province_id'   => '87'
            ],

            [
                'id'            => '1336',
                'name'          => 'Lagayan',
                'province_id'   => '87'
            ],

            [
                'id'            => '1337',
                'name'          => 'Langiden',
                'province_id'   => '87'
            ],

            [
                'id'            => '1338',
                'name'          => 'Licuan-Baay',
                'province_id'   => '87'
            ],

            [
                'id'            => '1339',
                'name'          => 'Luba',
                'province_id'   => '87'
            ],

            [
                'id'            => '1340',
                'name'          => 'Malibcong',
                'province_id'   => '87'
            ],

            [
                'id'            => '1341',
                'name'          => 'Manabo',
                'province_id'   => '87'
            ],

            [
                'id'            => '1342',
                'name'          => 'Peñarrubia',
                'province_id'   => '87'
            ],

            [
                'id'            => '1343',
                'name'          => 'Pidigan',
                'province_id'   => '87'
            ],

            [
                'id'            => '1344',
                'name'          => 'Pilar',
                'province_id'   => '87'
            ],

            [
                'id'            => '1345',
                'name'          => 'Sallapadan',
                'province_id'   => '87'
            ],

            [
                'id'            => '1346',
                'name'          => 'San Isidro',
                'province_id'   => '87'
            ],

            [
                'id'            => '1347',
                'name'          => 'San Juan',
                'province_id'   => '87'
            ],

            [
                'id'            => '1348',
                'name'          => 'San Quintin',
                'province_id'   => '87'
            ],

            [
                'id'            => '1349',
                'name'          => 'Tayum',
                'province_id'   => '87'
            ],

            [
                'id'            => '1350',
                'name'          => 'Tineg',
                'province_id'   => '87'
            ],

            [
                'id'            => '1351',
                'name'          => 'Tubo',
                'province_id'   => '87'
            ],

            [
                'id'            => '1352',
                'name'          => 'Villaviciosa',
                'province_id'   => '87'
            ],


            //APAYAO
            [
                'id'            => '1353',
                'name'          => 'Calanasan',
                'province_id'   => '88'
            ],

            [
                'id'            => '1354',
                'name'          => 'Conner',
                'province_id'   => '88'
            ],

            [
                'id'            => '1355',
                'name'          => 'Flora',
                'province_id'   => '88'
            ],

            [
                'id'            => '1356',
                'name'          => 'Kabugao',
                'province_id'   => '88'
            ],

            [
                'id'            => '1357',
                'name'          => 'Luna',
                'province_id'   => '88'
            ],

            [
                'id'            => '1358',
                'name'          => 'Pudtol',
                'province_id'   => '88'
            ],

            [
                'id'            => '1359',
                'name'          => 'Santa Marcela',
                'province_id'   => '88'
            ],


            //BAGUIO
            [
                'id'            => '1360',
                'name'          => 'Baguio',
                'province_id'   => '89'
            ],


            //BENGUET
            [
                'id'            => '1361',
                'name'          => 'Atok',
                'province_id'   => '90'
            ],

            [
                'id'            => '1362',
                'name'          => 'Bakun',
                'province_id'   => '90'
            ],

            [
                'id'            => '1363',
                'name'          => 'Bokod',
                'province_id'   => '90'
            ],

            [
                'id'            => '1364',
                'name'          => 'Buguias',
                'province_id'   => '90'
            ],

            [
                'id'            => '1365',
                'name'          => 'Itogon',
                'province_id'   => '90'
            ],

            [
                'id'            => '1366',
                'name'          => 'Kabayan',
                'province_id'   => '90'
            ],

            [
                'id'            => '1367',
                'name'          => 'Kapangan',
                'province_id'   => '90'
            ],

            [
                'id'            => '1368',
                'name'          => 'Kibungan',
                'province_id'   => '90'
            ],

            [
                'id'            => '1369',
                'name'          => 'La Trinidad',
                'province_id'   => '90'
            ],

            [
                'id'            => '1370',
                'name'          => 'Mankayan',
                'province_id'   => '90'
            ],

            [
                'id'            => '1371',
                'name'          => 'Sablan',
                'province_id'   => '90'
            ],

            [
                'id'            => '1372',
                'name'          => 'Tuba',
                'province_id'   => '90'
            ],

            [
                'id'            => '1373',
                'name'          => 'Tublay',
                'province_id'   => '90'
            ],


            //IFUGAO
            [
                'id'            => '1374',
                'name'          => 'Aguinaldo',
                'province_id'   => '91'
            ],

            [
                'id'            => '1375',
                'name'          => 'Alfonso Lista',
                'province_id'   => '91'
            ],

            [
                'id'            => '1376',
                'name'          => 'Asipulo',
                'province_id'   => '91'
            ],

            [
                'id'            => '1377',
                'name'          => 'Banaue',
                'province_id'   => '91'
            ],

            [
                'id'            => '1378',
                'name'          => 'Hingyon',
                'province_id'   => '91'
            ],

            [
                'id'            => '1379',
                'name'          => 'Hungduan',
                'province_id'   => '91'
            ],

            [
                'id'            => '1380',
                'name'          => 'Kiangan',
                'province_id'   => '91'
            ],

            [
                'id'            => '1381',
                'name'          => 'Lagawe',
                'province_id'   => '91'
            ],

            [
                'id'            => '1382',
                'name'          => 'Lamut',
                'province_id'   => '91'
            ],

            [
                'id'            => '1383',
                'name'          => 'Mayoyao',
                'province_id'   => '91'
            ],

            [
                'id'            => '1384',
                'name'          => 'Tinoc',
                'province_id'   => '91'
            ],


            //KALINGA
            [
                'id'            => '1385',
                'name'          => 'Balbalan',
                'province_id'   => '92'
            ],

            [
                'id'            => '1386',
                'name'          => 'Lubuagan',
                'province_id'   => '92'
            ],

            [
                'id'            => '1387',
                'name'          => 'Pasil',
                'province_id'   => '92'
            ],

            [
                'id'            => '1388',
                'name'          => 'Pinukpuk',
                'province_id'   => '92'
            ],

            [
                'id'            => '1389',
                'name'          => 'Rizal (Kalinga)',
                'province_id'   => '92'
            ],

            [
                'id'            => '1390',
                'name'          => 'Tabuk',
                'province_id'   => '92'
            ],

            [
                'id'            => '1391',
                'name'          => 'Tanudan',
                'province_id'   => '92'
            ],

            [
                'id'            => '1392',
                'name'          => 'Tinglayan',
                'province_id'   => '92'
            ],


            //MOUNTAIN PROVINCE
            [
                'id'            => '1393',
                'name'          => 'Barlig',
                'province_id'   => '93'
            ],

            [
                'id'            => '1394',
                'name'          => 'Bauko',
                'province_id'   => '93'
            ],

            [
                'id'            => '1395',
                'name'          => 'Besao',
                'province_id'   => '93'
            ],

            [
                'id'            => '1396',
                'name'          => 'Bontoc',
                'province_id'   => '93'
            ],

            [
                'id'            => '1397',
                'name'          => 'Natonin',
                'province_id'   => '93'
            ],

            [
                'id'            => '1398',
                'name'          => 'Paracelis',
                'province_id'   => '93'
            ],

            [
                'id'            => '1399',
                'name'          => 'Sabangan',
                'province_id'   => '93'
            ],

            [
                'id'            => '1400',
                'name'          => 'Sadanga',
                'province_id'   => '93'
            ],

            [
                'id'            => '1401',
                'name'          => 'Sagada',
                'province_id'   => '93'
            ],

            [
                'id'            => '1402',
                'name'          => 'Tadian',
                'province_id'   => '93'
            ],


            //BASILAN
            [
                'id'            => '1403',
                'name'          => 'Akbar',
                'province_id'   => '94'
            ],

            [
                'id'            => '1404',
                'name'          => 'Al-Barka',
                'province_id'   => '94'
            ],

            [
                'id'            => '1405',
                'name'          => 'Hadji Mohammad Ajul',
                'province_id'   => '94'
            ],

            [
                'id'            => '1406',
                'name'          => 'Hadji Muhtamad',
                'province_id'   => '94'
            ],

            [
                'id'            => '1407',
                'name'          => 'Isabela City',
                'province_id'   => '94'
            ],

            [
                'id'            => '1408',
                'name'          => 'Lamitan',
                'province_id'   => '94'
            ],

            [
                'id'            => '1409',
                'name'          => 'Lantawan',
                'province_id'   => '94'
            ],

            [
                'id'            => '1410',
                'name'          => 'Maluso',
                'province_id'   => '94'
            ],

            [
                'id'            => '1411',
                'name'          => 'Sumisip',
                'province_id'   => '94'
            ],

            [
                'id'            => '1412',
                'name'          => 'Tabuan-Lasa',
                'province_id'   => '94'
            ],

            [
                'id'            => '1413',
                'name'          => 'Tipo-Tipo',
                'province_id'   => '94'
            ],

            [
                'id'            => '1414',
                'name'          => 'Tuburan',
                'province_id'   => '94'
            ],

            [
                'id'            => '1415',
                'name'          => 'Ungkaya Pukan',
                'province_id'   => '94'
            ],


            //LANAO DEL SUR
            [
                'id'            => '1416',
                'name'          => 'Amai Manabilang',
                'province_id'   => '95'
            ],

            [
                'id'            => '1417',
                'name'          => 'Bacolod-Kalawi',
                'province_id'   => '95'
            ],

            [
                'id'            => '1418',
                'name'          => 'Balabagan',
                'province_id'   => '95'
            ],

            [
                'id'            => '1419',
                'name'          => 'Balindong',
                'province_id'   => '95'
            ],

            [
                'id'            => '1420',
                'name'          => 'Bayang',
                'province_id'   => '95'
            ],

            [
                'id'            => '1421',
                'name'          => 'Binidayan',
                'province_id'   => '95'
            ],

            [
                'id'            => '1422',
                'name'          => 'Buadiposo-Buntong',
                'province_id'   => '95'
            ],

            [
                'id'            => '1423',
                'name'          => 'Bubong',
                'province_id'   => '95'
            ],

            [
                'id'            => '1424',
                'name'          => 'Butig',
                'province_id'   => '95'
            ],

            [
                'id'            => '1425',
                'name'          => 'Calanogas',
                'province_id'   => '95'
            ],

            [
                'id'            => '1426',
                'name'          => 'Ditsaan-Ramain',
                'province_id'   => '95'
            ],

            [
                'id'            => '1427',
                'name'          => 'Ganassi',
                'province_id'   => '95'
            ],

            [
                'id'            => '1428',
                'name'          => 'Kapai',
                'province_id'   => '95'
            ],

            [
                'id'            => '1429',
                'name'          => 'Kapatagan',
                'province_id'   => '95'
            ],

            [
                'id'            => '1430',
                'name'          => 'Lumba-Bayabao',
                'province_id'   => '95'
            ],

            [
                'id'            => '1431',
                'name'          => 'Lumbaca-Unayan',
                'province_id'   => '95'
            ],

            [
                'id'            => '1432',
                'name'          => 'Lumbatan',
                'province_id'   => '95'
            ],

            [
                'id'            => '1433',
                'name'          => 'Lumbayanague',
                'province_id'   => '95'
            ],

            [
                'id'            => '1434',
                'name'          => 'Madalum',
                'province_id'   => '95'
            ],

            [
                'id'            => '1435',
                'name'          => 'Madamba',
                'province_id'   => '95'
            ],

            [
                'id'            => '1436',
                'name'          => 'Maguing',
                'province_id'   => '95'
            ],

            [
                'id'            => '1437',
                'name'          => 'Malabang',
                'province_id'   => '95'
            ],

            [
                'id'            => '1438',
                'name'          => 'Marantao',
                'province_id'   => '95'
            ],

            [
                'id'            => '1439',
                'name'          => 'Marawi',
                'province_id'   => '95'
            ],

            [
                'id'            => '1440',
                'name'          => 'Marogong',
                'province_id'   => '95'
            ],

            [
                'id'            => '1441',
                'name'          => 'Masiu',
                'province_id'   => '95'
            ],

            [
                'id'            => '1442',
                'name'          => 'Mulondo',
                'province_id'   => '95'
            ],

            [
                'id'            => '1443',
                'name'          => 'Pagayawan',
                'province_id'   => '95'
            ],

            [
                'id'            => '1444',
                'name'          => 'Piagapo',
                'province_id'   => '95'
            ],

            [
                'id'            => '1445',
                'name'          => 'Picong',
                'province_id'   => '95'
            ],

            [
                'id'            => '1446',
                'name'          => 'Poona Bayabao',
                'province_id'   => '95'
            ],

            [
                'id'            => '1447',
                'name'          => 'Pualas',
                'province_id'   => '95'
            ],

            [
                'id'            => '1448',
                'name'          => 'Saguiaran',
                'province_id'   => '95'
            ],

            [
                'id'            => '1449',
                'name'          => 'Sultan Dumalondong',
                'province_id'   => '95'
            ],

            [
                'id'            => '1450',
                'name'          => 'Tagoloan II',
                'province_id'   => '95'
            ],

            [
                'id'            => '1451',
                'name'          => 'Tamparan',
                'province_id'   => '95'
            ],

            [
                'id'            => '1452',
                'name'          => 'Taraka',
                'province_id'   => '95'
            ],

            [
                'id'            => '1453',
                'name'          => 'Tubaran',
                'province_id'   => '95'
            ],

            [
                'id'            => '1454',
                'name'          => 'Tugaya',
                'province_id'   => '95'
            ],

            [
                'id'            => '1455',
                'name'          => 'Wao',
                'province_id'   => '95'
            ],



            //MAGUINDANAO
            [
                'id'            => '1456',
                'name'          => 'Ampatuan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1457',
                'name'          => 'Barira',
                'province_id'   => '96'
            ],

            [
                'id'            => '1458',
                'name'          => 'Buldon',
                'province_id'   => '96'
            ],

            [
                'id'            => '1459',
                'name'          => 'Buluan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1460',
                'name'          => 'Datu Abdullah Sangki',
                'province_id'   => '96'
            ],

            [
                'id'            => '1461',
                'name'          => 'Datu Anggal Midtimbang',
                'province_id'   => '96'
            ],

            [
                'id'            => '1462',
                'name'          => 'Datu Blah T. Sinsuat',
                'province_id'   => '96'
            ],

            [
                'id'            => '1463',
                'name'          => 'Datu Hoffer Ampatuan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1464',
                'name'          => 'Datu Montawal',
                'province_id'   => '96'
            ],

            [
                'id'            => '1465',
                'name'          => 'Datu Odin Sinsuat',
                'province_id'   => '96'
            ],

            [
                'id'            => '1466',
                'name'          => 'Datu Odin Sinsuat',
                'province_id'   => '96'
            ],

            [
                'id'            => '1467',
                'name'          => 'Datu Paglas',
                'province_id'   => '96'
            ],

            [
                'id'            => '1468',
                'name'          => 'Datu Piang',
                'province_id'   => '96'
            ],

            [
                'id'            => '1469',
                'name'          => 'Datu Salibo',
                'province_id'   => '96'
            ],

            [
                'id'            => '1470',
                'name'          => 'Datu Saudi-Ampatuan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1471',
                'name'          => 'Datu Unsay',
                'province_id'   => '96'
            ],

            [
                'id'            => '1472',
                'name'          => 'General Salipada K. Pendatun',
                'province_id'   => '96'
            ],

            [
                'id'            => '1473',
                'name'          => 'Guindulungan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1474',
                'name'          => 'Kabuntalan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1475',
                'name'          => 'Mamasapano',
                'province_id'   => '96'
            ],

            [
                'id'            => '1476',
                'name'          => 'Mamasapano',
                'province_id'   => '96'
            ],

            [
                'id'            => '1477',
                'name'          => 'Mangudadatu',
                'province_id'   => '96'
            ],

            [
                'id'            => '1478',
                'name'          => 'Matanog',
                'province_id'   => '96'
            ],

            [
                'id'            => '1479',
                'name'          => 'Northern Kabuntalan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1480',
                'name'          => 'Pagalungan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1481',
                'name'          => 'Paglat',
                'province_id'   => '96'
            ],

            [
                'id'            => '1482',
                'name'          => 'Pandag',
                'province_id'   => '96'
            ],

            [
                'id'            => '1483',
                'name'          => 'Parang',
                'province_id'   => '96'
            ],

            [
                'id'            => '1484',
                'name'          => 'Rajah Buayan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1485',
                'name'          => 'Shariff Aguak',
                'province_id'   => '96'
            ],

            [
                'id'            => '1486',
                'name'          => 'Shariff Saydona Mustapha',
                'province_id'   => '96'
            ],

            [
                'id'            => '1487',
                'name'          => 'South Upi',
                'province_id'   => '96'
            ],

            [
                'id'            => '1488',
                'name'          => 'Sultan Kudarat',
                'province_id'   => '96'
            ],

            [
                'id'            => '1489',
                'name'          => 'Sultan Mastura',
                'province_id'   => '96'
            ],

            [
                'id'            => '1490',
                'name'          => 'Sultan sa Barongis',
                'province_id'   => '96'
            ],

            [
                'id'            => '1491',
                'name'          => 'Sultan Sumagka',
                'province_id'   => '96'
            ],

            [
                'id'            => '1492',
                'name'          => 'Talayan',
                'province_id'   => '96'
            ],

            [
                'id'            => '1493',
                'name'          => 'Upi',
                'province_id'   => '96'
            ],



            //SULU
            [
                'id'            => '1494',
                'name'          => 'Banguingui',
                'province_id'   => '97'
            ],

            [
                'id'            => '1495',
                'name'          => 'Hadji Panglima Tahil',
                'province_id'   => '97'
            ],

            [
                'id'            => '1496',
                'name'          => 'Indanan',
                'province_id'   => '97'
            ],

            [
                'id'            => '1497',
                'name'          => 'Jolo',
                'province_id'   => '97'
            ],

            [
                'id'            => '1498',
                'name'          => 'Kalingalan Caluang',
                'province_id'   => '97'
            ],

            [
                'id'            => '1499',
                'name'          => 'Lugus',
                'province_id'   => '97'
            ],

            [
                'id'            => '1500',
                'name'          => 'Luuk',
                'province_id'   => '97'
            ],

            [
                'id'            => '1501',
                'name'          => 'Maimbung',
                'province_id'   => '97'
            ],

            [
                'id'            => '1502',
                'name'          => 'Old Panamao',
                'province_id'   => '97'
            ],

            [
                'id'            => '1503',
                'name'          => 'Omar',
                'province_id'   => '97'
            ],

            [
                'id'            => '1504',
                'name'          => 'Pandami',
                'province_id'   => '97'
            ],

            [
                'id'            => '1505',
                'name'          => 'Panglima Estino',
                'province_id'   => '97'
            ],

            [
                'id'            => '1506',
                'name'          => 'Pangutaran',
                'province_id'   => '97'
            ],

            [
                'id'            => '1507',
                'name'          => 'Parang',
                'province_id'   => '97'
            ],

            [
                'id'            => '1508',
                'name'          => 'Pata',
                'province_id'   => '97'
            ],

            [
                'id'            => '1509',
                'name'          => 'Patikul',
                'province_id'   => '97'
            ],

            [
                'id'            => '1510',
                'name'          => 'Siasi',
                'province_id'   => '97'
            ],

            [
                'id'            => '1511',
                'name'          => 'Talipao',
                'province_id'   => '97'
            ],

            [
                'id'            => '1512',
                'name'          => 'Tapul',
                'province_id'   => '97'
            ],



            //TAWI-TAWI
            [
                'id'            => '1513',
                'name'          => 'Bongao',
                'province_id'   => '98'
            ],

            [
                'id'            => '1514',
                'name'          => 'Languyan',
                'province_id'   => '98'
            ],

            [
                'id'            => '1515',
                'name'          => 'Mapun',
                'province_id'   => '98'
            ],

            [
                'id'            => '1516',
                'name'          => 'Panglima Sugala',
                'province_id'   => '98'
            ],

            [
                'id'            => '1517',
                'name'          => 'Sapa-Sapa',
                'province_id'   => '98'
            ],

            [
                'id'            => '1518',
                'name'          => 'Sibutu',
                'province_id'   => '98'
            ],

            [
                'id'            => '1519',
                'name'          => 'Simunul',
                'province_id'   => '98'
            ],

            [
                'id'            => '1520',
                'name'          => 'Sitangkai',
                'province_id'   => '98'
            ],

            [
                'id'            => '1521',
                'name'          => 'South Ubian',
                'province_id'   => '98'
            ],

            [
                'id'            => '1522',
                'name'          => 'Tandubas',
                'province_id'   => '98'
            ],

            [
                'id'            => '1523',
                'name'          => 'Turtle Islands',
                'province_id'   => '98'
            ],


            //AGUSAN DEL NORTE
            [
                'id'            => '1524',
                'name'          => 'Buenavista',
                'province_id'   => '99'
            ],

            [
                'id'            => '1525',
                'name'          => 'Cabadbaran',
                'province_id'   => '99'
            ],

            [
                'id'            => '1526',
                'name'          => 'Carmen',
                'province_id'   => '99'
            ],

            [
                'id'            => '1527',
                'name'          => 'Jabonga',
                'province_id'   => '99'
            ],

            [
                'id'            => '1528',
                'name'          => 'Kitcharao',
                'province_id'   => '99'
            ],

            [
                'id'            => '1529',
                'name'          => 'Las Nieves',
                'province_id'   => '99'
            ],

            [
                'id'            => '1530',
                'name'          => 'Magallanes',
                'province_id'   => '99'
            ],

            [
                'id'            => '1531',
                'name'          => 'Nasipit',
                'province_id'   => '99'
            ],

            [
                'id'            => '1532',
                'name'          => 'Remedios T. Romualdez',
                'province_id'   => '99'
            ],

            [
                'id'            => '1533',
                'name'          => 'Santiago (Agusan Del Norte)',
                'province_id'   => '99'
            ],

            [
                'id'            => '1534',
                'name'          => 'Tubay',
                'province_id'   => '99'
            ],



            //AGUSAN DEL SUR
            [
                'id'            => '1535',
                'name'          => 'Bayugan',
                'province_id'   => '100'
            ],

            [
                'id'            => '1536',
                'name'          => 'Bunawan',
                'province_id'   => '100'
            ],

            [
                'id'            => '1537',
                'name'          => 'Esperanza',
                'province_id'   => '100'
            ],

            [
                'id'            => '1538',
                'name'          => 'La Paz (Agusan Del Sur)',
                'province_id'   => '100'
            ],

            [
                'id'            => '1539',
                'name'          => 'Loreto',
                'province_id'   => '100'
            ],

            [
                'id'            => '1540',
                'name'          => 'Prosperidad',
                'province_id'   => '100'
            ],

            [
                'id'            => '1541',
                'name'          => 'Rosario',
                'province_id'   => '100'
            ],

            [
                'id'            => '1542',
                'name'          => 'San Francisco',
                'province_id'   => '100'
            ],

            [
                'id'            => '1543',
                'name'          => 'San Luis',
                'province_id'   => '100'
            ],

            [
                'id'            => '1544',
                'name'          => 'Santa Josefa',
                'province_id'   => '100'
            ],

            [
                'id'            => '1545',
                'name'          => 'Sibagat',
                'province_id'   => '100'
            ],

            [
                'id'            => '1546',
                'name'          => 'Talacogon',
                'province_id'   => '100'
            ],

            [
                'id'            => '1547',
                'name'          => 'Trento',
                'province_id'   => '100'
            ],

            [
                'id'            => '1548',
                'name'          => 'Veruela',
                'province_id'   => '100'
            ],


            //BUTUAN
            [
                'id'            => '1549',
                'name'          => 'Butuan',
                'province_id'   => '101'
            ],


            //DINAGAT ISLANDS
            [
                'id'            => '1550',
                'name'          => 'Basilisa',
                'province_id'   => '102'
            ],

            [
                'id'            => '1551',
                'name'          => 'Cagdianao',
                'province_id'   => '102'
            ],

            [
                'id'            => '1552',
                'name'          => 'Dinagat',
                'province_id'   => '102'
            ],

            [
                'id'            => '1553',
                'name'          => 'Libjo',
                'province_id'   => '102'
            ],

            [
                'id'            => '1554',
                'name'          => 'Loreto',
                'province_id'   => '102'
            ],

            [
                'id'            => '1555',
                'name'          => 'San Jose (Dinagat Islands)',
                'province_id'   => '102'
            ],

            [
                'id'            => '1556',
                'name'          => 'Tubajon',
                'province_id'   => '102'
            ],



            //SURIGAO DEL NORTE
            [
                'id'            => '1557',
                'name'          => 'Alegria',
                'province_id'   => '103'
            ],

            [
                'id'            => '1558',
                'name'          => 'Bacuag',
                'province_id'   => '103'
            ],

            [
                'id'            => '1559',
                'name'          => 'Burgos (Surigao del Norte)',
                'province_id'   => '103'
            ],

            [
                'id'            => '1560',
                'name'          => 'Claver',
                'province_id'   => '103'
            ],

            [
                'id'            => '1561',
                'name'          => 'Dapa',
                'province_id'   => '103'
            ],

            [
                'id'            => '1562',
                'name'          => 'Del Carmen',
                'province_id'   => '103'
            ],

            [
                'id'            => '1563',
                'name'          => 'General Luna',
                'province_id'   => '103'
            ],

            [
                'id'            => '1564',
                'name'          => 'Gigaquit',
                'province_id'   => '103'
            ],

            [
                'id'            => '1565',
                'name'          => 'Mainit',
                'province_id'   => '103'
            ],

            [
                'id'            => '1566',
                'name'          => 'Malimono',
                'province_id'   => '103'
            ],

            [
                'id'            => '1567',
                'name'          => 'Pilar',
                'province_id'   => '103'
            ],

            [
                'id'            => '1568',
                'name'          => 'Placer',
                'province_id'   => '103'
            ],

            [
                'id'            => '1569',
                'name'          => 'San Benito',
                'province_id'   => '103'
            ],

            [
                'id'            => '1570',
                'name'          => 'San Francisco',
                'province_id'   => '103'
            ],

            [
                'id'            => '1571',
                'name'          => 'San Isidro',
                'province_id'   => '103'
            ],

            [
                'id'            => '1572',
                'name'          => 'Santa Monica',
                'province_id'   => '103'
            ],

            [
                'id'            => '1573',
                'name'          => 'Sison',
                'province_id'   => '103'
            ],

            [
                'id'            => '1574',
                'name'          => 'Socorro',
                'province_id'   => '103'
            ],

            [
                'id'            => '1575',
                'name'          => 'Surigao City',
                'province_id'   => '103'
            ],

            [
                'id'            => '1576',
                'name'          => 'Tagana-an',
                'province_id'   => '103'
            ],

            [
                'id'            => '1577',
                'name'          => 'Tubod',
                'province_id'   => '103'
            ],



            //SURIGAO DEL SUR
            [
                'id'            => '1578',
                'name'          => 'Barobo',
                'province_id'   => '104'
            ],

            [
                'id'            => '1579',
                'name'          => 'Bayabas',
                'province_id'   => '104'
            ],

            [
                'id'            => '1580',
                'name'          => 'Bislig',
                'province_id'   => '104'
            ],

            [
                'id'            => '1581',
                'name'          => 'Cagwait',
                'province_id'   => '104'
            ],

            [
                'id'            => '1582',
                'name'          => 'Cantilan',
                'province_id'   => '104'
            ],

            [
                'id'            => '1583',
                'name'          => 'Carmen',
                'province_id'   => '104'
            ],

            [
                'id'            => '1584',
                'name'          => 'Carrascal',
                'province_id'   => '104'
            ],

            [
                'id'            => '1585',
                'name'          => 'Cortes',
                'province_id'   => '104'
            ],

            [
                'id'            => '1586',
                'name'          => 'Hinatuan',
                'province_id'   => '104'
            ],

            [
                'id'            => '1587',
                'name'          => 'Lanuza',
                'province_id'   => '104'
            ],

            [
                'id'            => '1588',
                'name'          => 'Lianga',
                'province_id'   => '104'
            ],

            [
                'id'            => '1589',
                'name'          => 'Lingig',
                'province_id'   => '104'
            ],

            [
                'id'            => '1590',
                'name'          => 'Madrid',
                'province_id'   => '104'
            ],

            [
                'id'            => '1591',
                'name'          => 'Marihatag',
                'province_id'   => '104'
            ],

            [
                'id'            => '1592',
                'name'          => 'San Agustin',
                'province_id'   => '104'
            ],

            [
                'id'            => '1593',
                'name'          => 'San Miguel (Surigao del Sur)',
                'province_id'   => '104'
            ],

            [
                'id'            => '1594',
                'name'          => 'Tagbina',
                'province_id'   => '104'
            ],

            [
                'id'            => '1595',
                'name'          => 'Tago',
                'province_id'   => '104'
            ],

            [
                'id'            => '1596',
                'name'          => 'Tandag',
                'province_id'   => '104'
            ],


            //MARINDUQUE
            [
                'id'            => '1597',
                'name'          => 'Boac',
                'province_id'   => '105'
            ],

            [
                'id'            => '1598',
                'name'          => 'Buenavista',
                'province_id'   => '105'
            ],

            [
                'id'            => '1599',
                'name'          => 'Gasan',
                'province_id'   => '105'
            ],

            [
                'id'            => '1600',
                'name'          => 'Mogpog',
                'province_id'   => '105'
            ],

            [
                'id'            => '1601',
                'name'          => 'Santa Cruz',
                'province_id'   => '105'
            ],

            [
                'id'            => '1602',
                'name'          => 'Torrijos',
                'province_id'   => '105'
            ],



            //OCCIDENTAL MINDORO
            [
                'id'            => '1603',
                'name'          => 'Abra de Ilog',
                'province_id'   => '106'
            ],

            [
                'id'            => '1604',
                'name'          => 'Calintaan',
                'province_id'   => '106'
            ],

            [
                'id'            => '1605',
                'name'          => 'Looc',
                'province_id'   => '106'
            ],

            [
                'id'            => '1606',
                'name'          => 'Lubang',
                'province_id'   => '106'
            ],

            [
                'id'            => '1607',
                'name'          => 'Magsaysay (Occidental Mindoro)',
                'province_id'   => '106'
            ],

            [
                'id'            => '1608',
                'name'          => 'Mamburao',
                'province_id'   => '106'
            ],

            [
                'id'            => '1609',
                'name'          => 'Paluan',
                'province_id'   => '106'
            ],

            [
                'id'            => '1610',
                'name'          => 'Rizal (Occidental Mindoro)',
                'province_id'   => '106'
            ],

            [
                'id'            => '1611',
                'name'          => 'Sablayan',
                'province_id'   => '106'
            ],

            [
                'id'            => '1612',
                'name'          => 'San Jose (Occidental Mindoro)',
                'province_id'   => '106'
            ],

            [
                'id'            => '1613',
                'name'          => 'Santa Cruz (Occidental Mindoro)',
                'province_id'   => '106'
            ],


            //ORRIENTAL MINDORO
            [
                'id'            => '1614',
                'name'          => 'Baco',
                'province_id'   => '107'
            ],

            [
                'id'            => '1615',
                'name'          => 'Bansud',
                'province_id'   => '107'
            ],

            [
                'id'            => '1616',
                'name'          => 'Bongabong',
                'province_id'   => '107'
            ],

            [
                'id'            => '1617',
                'name'          => 'Bulalacao',
                'province_id'   => '107'
            ],

            [
                'id'            => '1618',
                'name'          => 'Calapan',
                'province_id'   => '107'
            ],

            [
                'id'            => '1619',
                'name'          => 'Gloria',
                'province_id'   => '107'
            ],

            [
                'id'            => '1620',
                'name'          => 'Mansalay',
                'province_id'   => '107'
            ],

            [
                'id'            => '1621',
                'name'          => 'Naujan',
                'province_id'   => '107'
            ],

            [
                'id'            => '1622',
                'name'          => 'Pinamalayan',
                'province_id'   => '107'
            ],

            [
                'id'            => '1623',
                'name'          => 'Pola',
                'province_id'   => '107'
            ],

            [
                'id'            => '1624',
                'name'          => 'Puerto Galera',
                'province_id'   => '107'
            ],

            [
                'id'            => '1625',
                'name'          => 'Roxas (Oriental Mindoro)',
                'province_id'   => '107'
            ],

            [
                'id'            => '1626',
                'name'          => 'San Teodoro',
                'province_id'   => '107'
            ],

            [
                'id'            => '1627',
                'name'          => 'Socorro (Oriental Mindoro)',
                'province_id'   => '107'
            ],

            [
                'id'            => '1628',
                'name'          => 'Victoria (Oriental Mindoro)',
                'province_id'   => '107'
            ],



            //PALAWAN
            [
                'id'            => '1629',
                'name'          => 'Aborlan',
                'province_id'   => '108'
            ],

            [
                'id'            => '1630',
                'name'          => 'Agutaya',
                'province_id'   => '108'
            ],

            [
                'id'            => '1631',
                'name'          => 'Araceli',
                'province_id'   => '108'
            ],

            [
                'id'            => '1632',
                'name'          => 'Balabac',
                'province_id'   => '108'
            ],

            [
                'id'            => '1633',
                'name'          => 'Bataraza',
                'province_id'   => '108'
            ],

            [
                'id'            => '1634',
                'name'          => "Brooke's Point",
                'province_id'   => '108'
            ],

            [
                'id'            => '1635',
                'name'          => 'Busuanga',
                'province_id'   => '108'
            ],

            [
                'id'            => '1636',
                'name'          => 'Cagayancillo',
                'province_id'   => '108'
            ],

            [
                'id'            => '1637',
                'name'          => 'Coron',
                'province_id'   => '108'
            ],

            [
                'id'            => '1638',
                'name'          => 'Culion',
                'province_id'   => '108'
            ],

            [
                'id'            => '1639',
                'name'          => 'Cuyo',
                'province_id'   => '108'
            ],

            [
                'id'            => '1640',
                'name'          => 'Dumaran',
                'province_id'   => '108'
            ],

            [
                'id'            => '1641',
                'name'          => 'El Nido',
                'province_id'   => '108'
            ],

            [
                'id'            => '1642',
                'name'          => 'Kalayaan (Palawan)',
                'province_id'   => '108'
            ],

            [
                'id'            => '1643',
                'name'          => 'Linapacan',
                'province_id'   => '108'
            ],

            [
                'id'            => '1644',
                'name'          => 'Magsaysay (Palawan)',
                'province_id'   => '108'
            ],

            [
                'id'            => '1645',
                'name'          => 'Narra',
                'province_id'   => '108'
            ],

            [
                'id'            => '1646',
                'name'          => 'Quezon (Palawan)',
                'province_id'   => '108'
            ],

            [
                'id'            => '1647',
                'name'          => 'Rizal (Palawan)',
                'province_id'   => '108'
            ],

            [
                'id'            => '1648',
                'name'          => 'Roxas (Palawan)',
                'province_id'   => '108'
            ],

            [
                'id'            => '1649',
                'name'          => 'San Vicente (Palawan)',
                'province_id'   => '108'
            ],

            [
                'id'            => '1650',
                'name'          => 'Sofronio Española',
                'province_id'   => '108'
            ],

            [
                'id'            => '1651',
                'name'          => 'Taytay (Palawan)',
                'province_id'   => '108'
            ],


            //PUERTO PRINCESA
            [
                'id'            => '1652',
                'name'          => 'Puerto Princesa',
                'province_id'   => '109'
            ],



            //ROMBLON
            [
                'id'            => '1653',
                'name'          => 'Alcantara (Romblon)',
                'province_id'   => '110'
            ],

            [
                'id'            => '1654',
                'name'          => 'Banton',
                'province_id'   => '110'
            ],

            [
                'id'            => '1655',
                'name'          => 'Cajidiocan',
                'province_id'   => '110'
            ],

            [
                'id'            => '1656',
                'name'          => 'Calatrava',
                'province_id'   => '110'
            ],

            [
                'id'            => '1657',
                'name'          => 'Concepcion (Romblon)',
                'province_id'   => '110'
            ],

            [
                'id'            => '1658',
                'name'          => 'Corcuera',
                'province_id'   => '110'
            ],

            [
                'id'            => '1659',
                'name'          => 'Ferrol',
                'province_id'   => '110'
            ],

            [
                'id'            => '1660',
                'name'          => 'Looc (Romblon)',
                'province_id'   => '110'
            ],

            [
                'id'            => '1661',
                'name'          => 'Magdiwang',
                'province_id'   => '110'
            ],

            [
                'id'            => '1662',
                'name'          => 'Odiongan',
                'province_id'   => '110'
            ],

            [
                'id'            => '1663',
                'name'          => 'Romblon',
                'province_id'   => '110'
            ],

            [
                'id'            => '1664',
                'name'          => 'San Agustin (Romblon)',
                'province_id'   => '110'
            ],

            [
                'id'            => '1665',
                'name'          => 'San Andres (Romblon)',
                'province_id'   => '110'
            ],

            [
                'id'            => '1666',
                'name'          => 'San Fernando (Romblon)',
                'province_id'   => '110'
            ],

            [
                'id'            => '1667',
                'name'          => 'San Jose (Romblon)',
                'province_id'   => '110'
            ],

            [
                'id'            => '1668',
                'name'          => 'Santa Fe (Romblon)',
                'province_id'   => '110'
            ],

            [
                'id'            => '1669',
                'name'          => 'Santa Maria (Romblon)',
                'province_id'   => '110'
            ],


        ]);


    }
}

