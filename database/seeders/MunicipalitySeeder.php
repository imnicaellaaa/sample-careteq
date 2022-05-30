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
            [
                'id'            => '1',
                'name'          => 'Adams',
                'province_id'   => '0'
            ],

            [
                'id'            => '2',
                'name'          => 'Bacarra',
                'province_id'   => '0'
            ],

            [
                'id'            => '3',
                'name'          => 'Badoc',
                'province_id'   => '0'
            ],

            [
                'id'            => '4',
                'name'          => 'Bangui',
                'province_id'   => '0'
            ],

            [
                'id'            => '5',
                'name'          => 'City of Batac',
                'province_id'   => '0'
            ],

            [
                'id'            => '6',
                'name'          => 'Burgos',
                'province_id'   => '0'
            ],

            [
                'id'            => '7',
                'name'          => 'Carasi',
                'province_id'   => '0'
            ],

            [
                'id'            => '8',
                'name'          => 'Currimao',
                'province_id'   => '0'
            ],

            [
                'id'            => '9',
                'name'          => 'Dingras',
                'region_id'   => '0'
            ],

            [
                'id'            => '10',
                'name'          => 'Dumalneg',
                'province_id'   => '0'
            ],

            [
                'id'            => '11',
                'name'          => 'Laoag City (Capital)',
                'province_id'   => '0'
            ],

            [
                'id'            => '12',
                'name'          => 'Marcos',
                'province_id'   => '0'
            ],

            [
                'id'            => '13',
                'name'          => 'Nueva Era',
                'province_id'   => '0'
            ],

            [
                'id'            => '14',
                'name'          => 'Pagudpud',
                'province_id'   => '0'
            ],

            [
                'id'            => '15',
                'name'          => 'Paoay',
                'province_id'   => '0'
            ],

            [
                'id'            => '16',
                'name'          => 'Pasuquin',
                'province_id'   => '0'
            ],

            [
                'id'            => '17',
                'name'          => 'Piddig',
                'province_id'   => '0'
            ],

            [
                'id'            => '18',
                'name'          => 'Pinili',
                'province_id'   => '0'
            ],

            [
                'id'            => '19',
                'name'          => 'San Nicolas',
                'province_id'   => '0'
            ],

            [
                'id'            => '20',
                'name'          => 'Sarrat',
                'province_id'   => '0'
            ],

            [
                'id'            => '21',
                'name'          => 'Solsona',
                'province_id'   => '0'
            ],

            [
                'id'            => '22',
                'name'          => 'Vintar',
                'province_id'   => '0'
            ],

            [
                'id'            => '23',
                'name'          => 'Alilem',
                'province_id'   => '1'
            ],

            [
                'id'            => '24',
                'name'          => 'Banayoyo',
                'province_id'   => '1'
            ],

            [
                'id'            => '25',
                'name'          => 'Bantay',
                'province_id'   => '1'
            ],

            [
                'id'            => '26',
                'name'          => 'Burgos',
                'province_id'   => '1'
            ],

            [
                'id'            => '27',
                'name'          => 'Cabugao',
                'province_id'   => '1'
            ],

            [
                'id'            => '28',
                'name'          => 'Candon',
                'province_id'   => '1'
            ],

            [
                'id'            => '29',
                'name'          => 'Caoayan',
                'province_id'   => '1'
            ],

            [
                'id'            => '30',
                'name'          => 'Cervantes',
                'province_id'   => '1'
            ],

            [
                'id'            => '31',
                'name'          => 'Galimuyod',
                'province_id'   => '1'
            ],

            [
                'id'            => '32',
                'name'          => 'Gregorio Del Pilar',
                'province_id'   => '1'
            ],

            [
                'id'            => '33',
                'name'          => 'Lidlidda',
                'province_id'   => '1'
            ],

            [
                'id'            => '34',
                'name'          => 'Magsingal',
                'province_id'   => '1'
            ],

            [
                'id'            => '35',
                'name'          => 'Nagbukel',
                'province_id'   => '1'
            ],

            [
                'id'            => '36',
                'name'          => 'Narvacan',
                'province_id'   => '1'
            ],

            [
                'id'            => '37',
                'name'          => 'Quirino',
                'province_id'   => '1'
            ],

            [
                'id'            => '38',
                'name'          => 'Salcedo',
                'province_id'   => '1'
            ],

            [
                'id'            => '39',
                'name'          => 'San Emilio',
                'province_id'   => '1'
            ],

            [
                'id'            => '40',
                'name'          => 'Sa  Esteban',
                'province_id'   => '1'
            ],


            [
                'id'            => '41',
                'name'          => 'San Ildefonso',
                'province_id'   => '1'
            ],

            [
                'id'            => '42',
                'name'          => 'San Juan',
                'province_id'   => '1'
            ],

            [
                'id'            => '43',
                'name'          => 'San Vicente',
                'province_id'   => '1'
            ],

            [
                'id'            => '44',
                'name'          => 'Santa',
                'province_id'   => '1'
            ],

            [
                'id'            => '45',
                'name'          => 'Santa Catalina',
                'province_id'   => '1'
            ],

            [
                'id'            => '46',
                'name'          => 'Santa Cruz',
                'province_id'   => '1'
            ],

            [
                'id'            => '47',
                'name'          => 'Santa Maria',
                'province_id'   => '1'
            ],

            [
                'id'            => '48',
                'name'          => 'Santiago',
                'province_id'   => '1'
            ],

            [
                'id'            => '49',
                'name'          => 'Santo Domingo',
                'province_id'   => '1'
            ],

            [
                'id'            => '50',
                'name'          => 'Sigay',
                'province_id'   => '1'
            ],

            [
                'id'            => '51',
                'name'          => 'Sinait',
                'province_id'   => '1'
            ],

            [
                'id'            => '52',
                'name'          => 'Sugpon',
                'province_id'   => '1'
            ],

            [
                'id'            => '53',
                'name'          => 'Suyo',
                'province_id'   => '1'
            ],

            [
                'id'            => '54',
                'name'          => 'Tagudin',
                'province_id'   => '1'
            ],

            [
                'id'            => '55',
                'name'          => 'Vigan',
                'province_id'   => '1'
            ],

            [
                'id'            => '56',
                'name'          => 'Agoo',
                'province_id'   => '2'
            ],

            [
                'id'            => '57',
                'name'          => 'Aringay',
                'province_id'   => '2'
            ],

            [
                'id'            => '58',
                'name'          => 'Bacnotan',
                'province_id'   => '2'
            ],

            [
                'id'            => '59',
                'name'          => 'Bagulin',
                'province_id'   => '2'
            ],

            [
                'id'            => '60',
                'name'          => 'Balaoan',
                'province_id'   => '2'
            ],

            [
                'id'            => '61',
                'name'          => 'Bangar',
                'province_id'   => '2'
            ],
            [
                'id'            => '62',
                'name'          => 'Bauang',
                'province_id'   => '2'
            ],

            [
                'id'            => '63',
                'name'          => 'Burgos',
                'province_id'   => '2'
            ],

            [
                'id'            => '64',
                'name'          => 'Caba',
                'province_id'   => '2'
            ],

            [
                'id'            => '65',
                'name'          => 'Luna',
                'province_id'   => '2'
            ],

            [
                'id'            => '66',
                'name'          => 'Naguilian',
                'province_id'   => '2'
            ],

            [
                'id'            => '67',
                'name'          => 'Pugo',
                'province_id'   => '2'
            ],

            [
                'id'            => '68',
                'name'          => 'Rosario',
                'province_id'   => '2'
            ],

            [
                'id'            => '69',
                'name'          => 'San Fernando',
                'province_id'   => '2'
            ],

            [
                'id'            => '70',
                'name'          => 'San Gabriel',
                'province_id'   => '2'
            ],

            [
                'id'            => '71',
                'name'          => 'San Juan',
                'province_id'   => '2'
            ],

            [
                'id'            => '72',
                'name'          => 'Santo Tomas',
                'province_id'   => '2'
            ],

            [
                'id'            => '73',
                'name'          => 'Santol',
                'province_id'   => '2'
            ],

            [
                'id'            => '74',
                'name'          => 'Sudipen',
                'province_id'   => '2'
            ],

            [
                'id'            => '75',
                'name'          => 'Tubao',
                'province_id'   => '2'
            ],

            [
                'id'            => '76',
                'name'          => 'Agno',
                'province_id'   => '3'
            ],

            [
                'id'            => '77',
                'name'          => 'Aguilar',
                'province_id'   => '3'
            ],

            [
                'id'            => '78',
                'name'          => 'Alaminos',
                'province_id'   => '3'
            ],

            [
                'id'            => '79',
                'name'          => 'Alcala',
                'province_id'   => '3'
            ],

            [
                'id'            => '80',
                'name'          => 'Anda',
                'province_id'   => '3'
            ],

            [
                'id'            => '81',
                'name'          => 'Asingan',
                'province_id'   => '3'
            ],

            [
                'id'            => '82',
                'name'          => 'Bulangao',
                'province_id'   => '3'
            ],

            [
                'id'            => '83',
                'name'          => 'Bani',
                'province_id'   => '3'
            ],

            [
                'id'            => '84',
                'name'          => 'Basista',
                'province_id'   => '3'
            ],

            [
                'id'            => '85',
                'name'          => 'Bautista',
                'province_id'   => '3'
            ],

            [
                'id'            => '86',
                'name'          => 'Bayambang',
                'province_id'   => '3'
            ],

            [
                'id'            => '87',
                'name'          => 'Binalonan',
                'province_id'   => '3'
            ],

            [
                'id'            => '88',
                'name'          => 'Binmaley',
                'province_id'   => '3'
            ],

            [
                'id'            => '89',
                'name'          => 'Bolinao',
                'province_id'   => '3'
            ],

            [
                'id'            => '90',
                'name'          => 'Bugallon',
                'province_id'   => '3'
            ],

            [
                'id'            => '91',
                'name'          => 'Burgos',
                'province_id'   => '3'
            ],

            [
                'id'            => '92',
                'name'          => 'Calasiao',
                'province_id'   => '3'
            ],

            [
                'id'            => '93',
                'name'          => 'Dagupan',
                'province_id'   => '3'
            ],

            [
                'id'            => '94',
                'name'          => 'Dasol',
                'province_id'   => '3'
            ],

            [
                'id'            => '95',
                'name'          => 'Infanta',
                'province_id'   => '3'
            ],

            [
                'id'            => '96',
                'name'          => 'Labrador',
                'province_id'   => '3'
            ],

            [
                'id'            => '97',
                'name'          => 'Laoac',
                'province_id'   => '3'
            ],

            [
                'id'            => '98',
                'name'          => 'Lingayen',
                'province_id'   => '3'
            ],

            [
                'id'            => '99',
                'name'          => 'Mabini',
                'province_id'   => '3'
            ],

            [
                'id'            => '100',
                'name'          => 'Malasiqui',
                'province_id'   => '3'
            ],

            [
                'id'            => '101',
                'name'          => 'Manaoag',
                'province_id'   => '3'
            ],

            [
                'id'            => '102',
                'name'          => 'Mangaldan',
                'province_id'   => '3'
            ],

            [
                'id'            => '103',
                'name'          => 'Mangatarem',
                'province_id'   => '3'
            ],

            [
                'id'            => '104',
                'name'          => 'Mapandan',
                'province_id'   => '3'
            ],

            [
                'id'            => '105',
                'name'          => 'Natividad',
                'province_id'   => '3'
            ],

            [
                'id'            => '106',
                'name'          => 'Pozorrubio',
                'province_id'   => '3'
            ],

            [
                'id'            => '107',
                'name'          => 'Rosales',
                'province_id'   => '3'
            ],

            [
                'id'            => '108',
                'name'          => 'San Carlos',
                'province_id'   => '3'
            ],

            [
                'id'            => '109',
                'name'          => 'San Fabian',
                'province_id'   => '3'
            ],

            [
                'id'            => '110',
                'name'          => 'San Jacinto',
                'province_id'   => '3'
            ],

            [
                'id'            => '111',
                'name'          => 'San Manuel',
                'province_id'   => '3'
            ],

            [
                'id'            => '112',
                'name'          => 'San Nicolas',
                'province_id'   => '3'
            ],

            [
                'id'            => '113',
                'name'          => 'SAN QUINTIN',
                'province_id'   => '3'
            ],

            [
                'id'            => '114',
                'name'          => 'SANTA BARBARA',
                'province_id'   => '3'
            ],

            [
                'id'            => '115',
                'name'          => 'SANTA MARIA',
                'province_id'   => '3'
            ],

            [
                'id'            => '116',
                'name'          => 'SISON',
                'province_id'   => '3'
            ],

            [
                'id'            => '117',
                'name'          => 'SUAL',
                'province_id'   => '3'
            ],

            [
                'id'            => '118',
                'name'          => 'TAYUG',
                'province_id'   => '3'
            ],

            [
                'id'            => '119',
                'name'          => 'UMINGAN',
                'province_id'   => '3'
            ],

            [
                'id'            => '120',
                'name'          => 'URDANETA',
                'province_id'   => '3'
            ],

            [
                'id'            => '121',
                'name'          => 'VILLASIS',
                'province_id'   => '3'
            ],

            [
                'id'            => '122',
                'name'          => 'BASCO',
                'province_id'   => '4'
            ],

            [
                'id'            => '123',
                'name'          => 'Itbayat',
                'province_id'   => '4'
            ],

            [
                'id'            => '124',
                'name'          => 'Mahatao',
                'province_id'   => '4'
            ],

            [
                'id'            => '125',
                'name'          => 'Sabtang',
                'province_id'   => '4'
            ],

            [
                'id'            => '126',
                'name'          => 'Uyugan',
                'province_id'   => '4'
            ],

            [
                'id'            => '127',
                'name'          => 'Abulug',
                'province_id'   => '5'
            ],

            [
                'id'            => '128',
                'name'          => 'Alcala',
                'province_id'   => '5'
            ],

            [
                'id'            => '129',
                'name'          => 'Allacapan',
                'province_id'   => '5'
            ],

            [
                'id'            => '130',
                'name'          => 'Amulung',
                'province_id'   => '5'
            ],

            [
                'id'            => '131',
                'name'          => 'Aparri',
                'province_id'   => '5'
            ],

            [
                'id'            => '132',
                'name'          => 'Baggao',
                'province_id'   => '5'
            ],

            [
                'id'            => '133',
                'name'          => 'Ballesteros',
                'province_id'   => '5'
            ],

            [
                'id'            => '134',
                'name'          => 'Buguey',
                'province_id'   => '5'
            ],

            [
                'id'            => '135',
                'name'          => 'Calayan',
                'province_id'   => '5'
            ],

            [
                'id'            => '136',
                'name'          => 'Camalaniugan',
                'province_id'   => '5'
            ],

            [
                'id'            => '137',
                'name'          => 'Claveria',
                'province_id'   => '5'
            ],

            [
                'id'            => '138',
                'name'          => 'Enrile',
                'province_id'   => '5'
            ],

            [
                'id'            => '139',
                'name'          => 'Gattaran',
                'province_id'   => '5'
            ],

            [
                'id'            => '140',
                'name'          => 'Gonzaga',
                'province_id'   => '5'
            ],

            [
                'id'            => '141',
                'name'          => 'Iguig',
                'province_id'   => '5'
            ],

            [
                'id'            => '142',
                'name'          => 'Lal-lo',
                'province_id'   => '5'
            ],

            [
                'id'            => '143',
                'name'          => 'Lasam',
                'province_id'   => '5'
            ],

            [
                'id'            => '144',
                'name'          => 'Pamplona',
                'province_id'   => '5'
            ],

            [
                'id'            => '145',
                'name'          => 'Peñablanca',
                'province_id'   => '5'
            ],

            [
                'id'            => '146',
                'name'          => 'Piat',
                'province_id'   => '5'
            ],

            [
                'id'            => '147',
                'name'          => 'Rizal',
                'province_id'   => '5'
            ],

            [
                'id'            => '148',
                'name'          => 'Sanchez-Mira',
                'province_id'   => '5'
            ],

            [
                'id'            => '149',
                'name'          => 'Santa Ana',
                'province_id'   => '5'
            ],

            [
                'id'            => '150',
                'name'          => 'Santa Praxedes',
                'province_id'   => '5'
            ],

            [
                'id'            => '151',
                'name'          => 'Santa Teresita',
                'province_id'   => '5'
            ],

            [
                'id'            => '152',
                'name'          => 'Santo Niño (Faire)',
                'province_id'   => '5'
            ],

            [
                'id'            => '153',
                'name'          => 'Solana',
                'province_id'   => '5'
            ],

            [
                'id'            => '154',
                'name'          => 'Tuao',
                'province_id'   => '5'
            ],

            [
                'id'            => '155',
                'name'          => 'Alicia',
                'province_id'   => '6'
            ],

            [
                'id'            => '156',
                'name'          => 'Angadanan',
                'province_id'   => '6'
            ],

            [
                'id'            => '157',
                'name'          => 'Aurora',
                'province_id'   => '6'
            ],

            [
                'id'            => '158',
                'name'          => 'Benito Soliven',
                'province_id'   => '6'
            ],

            [
                'id'            => '159',
                'name'          => 'Burgos',
                'province_id'   => '6'
            ],

            [
                'id'            => '160',
                'name'          => 'Cabagan',
                'province_id'   => '6'
            ],

            [
                'id'            => '161',
                'name'          => 'Cabatuan',
                'province_id'   => '6'
            ],

            [
                'id'            => '162',
                'name'          => 'Cauayan',
                'province_id'   => '6'
            ],

            [
                'id'            => '163',
                'name'          => 'Cordon',
                'province_id'   => '6'
            ],

            [
                'id'            => '164',
                'name'          => 'Delfin Albano',
                'province_id'   => '6'
            ],

            [
                'id'            => '165',
                'name'          => 'Dinapigue',
                'province_id'   => '6'
            ],

            [
                'id'            => '166',
                'name'          => 'Divilacan',
                'province_id'   => '6'
            ],

            [
                'id'            => '167',
                'name'          => 'Echague',
                'province_id'   => '6'
            ],

            [
                'id'            => '168',
                'name'          => 'Gamu',
                'province_id'   => '6'
            ],

            [
                'id'            => '169',
                'name'          => 'Ilagan',
                'province_id'   => '6'
            ],

            [
                'id'            => '170',
                'name'          => 'Jones',
                'province_id'   => '6'
            ],

            [
                'id'            => '171',
                'name'          => 'Luna',
                'province_id'   => '6'
            ],

            [
                'id'            => '172',
                'name'          => 'Maconacon',
                'province_id'   => '6'
            ],

            [
                'id'            => '173',
                'name'          => 'Mallig',
                'province_id'   => '6'
            ],

            [
                'id'            => '174',
                'name'          => 'Naguilian',
                'province_id'   => '6'
            ],

            [
                'id'            => '175',
                'name'          => 'Palanan',
                'province_id'   => '6'
            ],

            [
                'id'            => '176',
                'name'          => 'Quezon',
                'province_id'   => '6'
            ],

            [
                'id'            => '177',
                'name'          => 'Quirino',
                'province_id'   => '6'
            ],

            [
                'id'            => '178',
                'name'          => 'Ramon',
                'province_id'   => '6'
            ],

            [
                'id'            => '179',
                'name'          => 'Reina Mercedes',
                'province_id'   => '6'
            ],

            [
                'id'            => '180',
                'name'          => 'Roxas',
                'province_id'   => '6'
            ],

            [
                'id'            => '181',
                'name'          => 'San Agustin',
                'province_id'   => '6'
            ],

            [
                'id'            => '182',
                'name'          => 'San Guillermo',
                'province_id'   => '6'
            ],

            [
                'id'            => '183',
                'name'          => 'San Isidro',
                'province_id'   => '6'
            ],

            [
                'id'            => '184',
                'name'          => 'San Manuel',
                'province_id'   => '6'
            ],

            [
                'id'            => '185',
                'name'          => 'San Mariano',
                'province_id'   => '6'
            ],

            [
                'id'            => '186',
                'name'          => 'San Mateo',
                'province_id'   => '6'
            ],

            [
                'id'            => '187',
                'name'          => 'San Pablo',
                'province_id'   => '6'
            ],

            [
                'id'            => '188',
                'name'          => 'Santa Maria',
                'province_id'   => '6'
            ],

            [
                'id'            => '189',
                'name'          => 'Santiago',
                'province_id'   => '6'
            ],

            [
                'id'            => '190',
                'name'          => 'Santo Tomas',
                'province_id'   => '6'
            ],

            [
                'id'            => '191',
                'name'          => 'Tumauini',
                'province_id'   => '6'
            ],

            [
                'id'            => '192',
                'name'          => 'Alfonso Castañeda',
                'province_id'   => '7'
            ],

            [
                'id'            => '193',
                'name'          => 'Ambaguio',
                'province_id'   => '7'
            ],

            [
                'id'            => '194',
                'name'          => 'Aritao',
                'province_id'   => '7'
            ],

            [
                'id'            => '195',
                'name'          => 'Bagabag',
                'province_id'   => '7'
            ],

            [
                'id'            => '196',
                'name'          => 'Bambang',
                'province_id'   => '7'
            ],
            [
                'id'            => '197',
                'name'          => 'Bayombong',
                'province_id'   => '7'
            ],

            [
                'id'            => '198',
                'name'          => 'Diadi',
                'province_id'   => '7'
            ],

            [
                'id'            => '199',
                'name'          => 'Dupax del Norte',
                'province_id'   => '7'
            ],

            [
                'id'            => '200',
                'name'          => 'Dupax del Sur',
                'province_id'   => '7'
            ],

            [
                'id'            => '201',
                'name'          => 'Kasibu',
                'province_id'   => '7'
            ],

            [
                'id'            => '202',
                'name'          => 'Kayapa',
                'province_id'   => '7'
            ],

            [
                'id'            => '203',
                'name'          => 'Quezon',
                'province_id'   => '7'
            ],

            [
                'id'            => '204',
                'name'          => 'Santa Fe',
                'province_id'   => '7'
            ],

            [
                'id'            => '205',
                'name'          => 'Solano',
                'province_id'   => '7'
            ],

            [
                'id'            => '206',
                'name'          => 'Villaverde',
                'province_id'   => '7'
            ],

            [
                'id'            => '207',
                'name'          => 'Aglipay',
                'province_id'   => '8'
            ],

            [
                'id'            => '208',
                'name'          => 'Cabarroguis',
                'province_id'   => '8'
            ],

            [
                'id'            => '209',
                'name'          => 'Diffun',
                'province_id'   => '8'
            ],

            [
                'id'            => '210',
                'name'          => 'Maddela',
                'province_id'   => '8'
            ],

            [
                'id'            => '211',
                'name'          => 'Nagtipunan',
                'province_id'   => '8'
            ],

            [
                'id'            => '212',
                'name'          => 'Saguday',
                'province_id'   => '8'
            ],

            [
                'id'            => '213',
                'name'          => 'Saguday',
                'province_id'   => '9'
            ],

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
                'name'          => 'San Ildefonso',
                'province_id'   => '11'
            ],

            [
                'id'            => '255',
                'name'          => 'San Jose del Monte',
                'province_id'   => '11'
            ],

            [
                'id'            => '256',
                'name'          => 'San Miguel',
                'province_id'   => '11'
            ],

            [
                'id'            => '257',
                'name'          => 'San Rafael',
                'province_id'   => '11'
            ],

            [
                'id'            => '258',
                'name'          => 'Santa Maria',
                'province_id'   => '11'
            ],

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
                'name'          => 'Quezon',
                'province_id'   => '12'
            ],

            [
                'id'            => '281',
                'name'          => 'Rizal',
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
                'name'          => 'San Jose',
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
                'name'          => 'Santo Domingo',
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
                'name'          => 'San Jose',
                'province_id'   => '14'
            ],

            [
                'id'            => '325',
                'name'          => 'San Manuel',
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
                'name'          => 'Santa Cruz',
                'province_id'   => '15'
            ],

            [
                'id'            => '341',
                'name'          => 'Subic',
                'province_id'   => '15'
            ],

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
                'name'          => 'San Jose',
                'province_id'   => '17'
            ],

            [
                'id'            => '364',
                'name'          => 'San Juan',
                'province_id'   => '17'
            ],

            [
                'id'            => '365',
                'name'          => 'San Luis',
                'province_id'   => '17'
            ],

            [
                'id'            => '366',
                'name'          => 'San Nicolas',
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
                'name'          => 'Rizal',
                'province_id'   => '19'
            ],

            [
                'id'            => '423',
                'name'          => 'San Pablo',
                'province_id'   => '19'
            ],

            [
                'id'            => '424',
                'name'          => 'San Pedro',
                'province_id'   => '19'
            ],

            [
                'id'            => '425',
                'name'          => 'Santa Cruz',
                'province_id'   => '19'
            ],

            [
                'id'            => '426',
                'name'          => 'Santa Maria',
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
                'name'          => 'Quezon',
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
                'name'          => 'San Mateo',
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
                'name'          => 'Santo Domingo',
                'province_id'   => '22'
            ],

            [
                'id'            => '500',
                'name'          => 'Tabaco',
                'province_id'   => '22'
            ],

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
                'name'          => 'San Vicente',
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
                'name'          => 'San Jose',
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
                'name'          => 'San Miguel',
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

            [
                'id'            => '634',
                'name'          => 'Bacolod',
                'province_id'   => '30'
            ],

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
                'name'          => 'San Miguel',
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
                'name'          => 'San Miguel',
                'province_id'   => '34'
            ],

            [
                'id'            => '765',
                'name'          => 'San Miguel',
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

            [
                'id'            => '825',
                'name'          => 'Mandaue',
                'province_id'   => '36'
            ],

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
                'name'          => 'San Jose',
                'province_id'   => '37'
            ],

            [
                'id'            => '843',
                'name'          => 'Santa Catalina',
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
                'name'          => 'San Juan',
                'province_id'   => '38'
            ],

            [
                'id'            => '856',
                'name'          => 'Siquijor',
                'province_id'   => '38'
            ],

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
                'name'          => 'Salcedo',
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
                'name'          => 'San Miguel',
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
                'name'          => 'San Jose',
                'province_id'   => '42'
            ],

            [
                'id'            => '950',
                'name'          => 'San Roque',
                'province_id'   => '42'
            ],

            [
                'id'            => '951',
                'name'          => 'San Vicente',
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
                'name'          => 'San Juan',
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

            [
                'id'            => '999',
                'name'          => 'Tacloban',
                'province_id'   => '45'
            ],



        ]);


    }
}

