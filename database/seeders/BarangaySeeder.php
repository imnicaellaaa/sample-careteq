<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangays')->insert([

            //ILOCOS NORTE - ADAMS
            [
                'id'            => '1',
                'name'          => 'Adams (Pob.)',
                'municipality_code'   => '1'
            ],


            //ILOCOS NORTE - BACARRA
            [
                'id'            => '2',
                'name'          => 'Bani',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '3',
                'name'          => 'Buyon',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '4',
                'name'          => 'Cabaruan',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '5',
                'name'          => 'Cabulalaan',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '6',
                'name'          => 'Cabusligan - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '7',
                'name'          => 'Cadaratan',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '8',
                'name'          => 'Calioet-Libong',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '9',
                'name'          => 'Casilian',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '10',
                'name'          => 'Corocor',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '11',
                'name'          => 'Duripes',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '12',
                'name'          => 'Ganagan',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '13',
                'name'          => 'Libtong',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '14',
                'name'          => 'Macupit',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '15',
                'name'          => 'Nambaran',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '16',
                'name'          => 'Natba',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '17',
                'name'          => 'Paninaan',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '18',
                'name'          => 'Pasiocan',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '19',
                'name'          => 'Pasngal',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '20',
                'name'          => 'Pipias',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '21',
                'name'          => 'Pulangi',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '22',
                'name'          => 'Pungto',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '23',
                'name'          => 'San Agustin I (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '24',
                'name'          => 'San Agustin II (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '25',
                'name'          => 'San Andres I (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '26',
                'name'          => 'San Andres II (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '27',
                'name'          => 'San Gabriel I (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '28',
                'name'          => 'San Gabriel II (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '29',
                'name'          => 'San Pedro I (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '30',
                'name'          => 'San Pedro II (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '31',
                'name'          => 'San Roque I (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '32',
                'name'          => 'San Roque II (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '33',
                'name'          => 'San Simon I (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '34',
                'name'          => 'San Simon II (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '35',
                'name'          => 'San Vicente (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '36',
                'name'          => 'Sangil',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '37',
                'name'          => 'Santa Filomena I (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '38',
                'name'          => 'Santa Filomena II (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '39',
                'name'          => 'Santa Rita (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '40',
                'name'          => 'Santo Cristo I (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '41',
                'name'          => 'Santo Cristo II (Pob.) - Bacarra',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '42',
                'name'          => 'Tambidao',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '43',
                'name'          => 'Teppang',
                'municipality_code'   => '2'
            ],

            [
                'id'            => '44',
                'name'          => 'Tubburan',
                'municipality_code'   => '2'
            ],



            //ILOCOS NORTE-BADOC
            [
                'id'            => '45',
                'name'          => 'Alay-Nangbabaan',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '46',
                'name'          => 'Alogoog',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '47',
                'name'          => 'Ar-arusip',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '48',
                'name'          => 'Aring',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '49',
                'name'          => 'Balbaldez',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '50',
                'name'          => 'Bato',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '51',
                'name'          => 'Camanga',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '52',
                'name'          => 'Canaan (Pob.)',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '53',
                'name'          => 'Caraitan',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '54',
                'name'          => 'Gabut Norte',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '55',
                'name'          => 'Gabut Sur',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '56',
                'name'          => 'Garreta (Pob.)',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '57',
                'name'          => 'Labut',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '58',
                'name'          => 'Lacuben',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '59',
                'name'          => 'Lubigan',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '60',
                'name'          => 'Mabusag Norte',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '61',
                'name'          => 'Mabusag Sur',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '62',
                'name'          => 'Madupayas',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '63',
                'name'          => 'Morong',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '64',
                'name'          => 'Nagrebcan',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '65',
                'name'          => 'Napu',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '66',
                'name'          => 'La Virgen Milagrosa',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '67',
                'name'          => 'Pagsanahan Norte',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '68',
                'name'          => 'Pagsanahan Sur',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '69',
                'name'          => 'Paltit',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '70',
                'name'          => 'Parang',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '71',
                'name'          => 'Pasuc',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '72',
                'name'          => 'Santa Cruz Norte',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '73',
                'name'          => 'Santa Cruz Sur',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '74',
                'name'          => 'Saud - Badoc',
                'municipality_code'   => '3'
            ],

            [
                'id'            => '75',
                'name'          => 'Turod - Badoc',
                'municipality_code'   => '3'
            ],


            //ILOCOS NORTE - BANGUI
            [
                'id'            => '76',
                'name'          => 'Abaca',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '77',
                'name'          => 'Bacsil - Bangui',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '78',
                'name'          => 'Banban',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '79',
                'name'          => 'Baruyen',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '80',
                'name'          => 'Dadaor',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '81',
                'name'          => 'Lanao',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '82',
                'name'          => 'Malasin',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '83',
                'name'          => 'Manayon',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '84',
                'name'          => 'Masikil',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '85',
                'name'          => 'Nagbalagan',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '86',
                'name'          => 'Payac',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '87',
                'name'          => 'San Lorenzo (Pob.) - Bangui',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '88',
                'name'          => 'Taguiporo - Bangui',
                'municipality_code'   => '4'
            ],

            [
                'id'            => '89',
                'name'          => 'Utol',
                'municipality_code'   => '4'
            ],

            //ILOCOS NORTE - CITY OF BATAC
            [
                'id'            => '90',
                'name'          => 'Aglipay (Pob.) - City Of Batac',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '91',
                'name'          => 'Baay',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '92',
                'name'          => 'Baligat',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '93',
                'name'          => 'Bungon',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '94',
                'name'          => 'Baoa East',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '95',
                'name'          => 'Baoa West',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '96',
                'name'          => 'Barani (Pob.)',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '97',
                'name'          => 'Ben-agan (Pob.)',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '98',
                'name'          => 'Bil-loca',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '99',
                'name'          => 'Biningan',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '100',
                'name'          => 'Callaguip (Pob.)  - City Of Batac',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '101',
                'name'          => 'Camandingan',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '102',
                'name'          => 'Camguidan',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '103',
                'name'          => 'Cangrunaan (Pob.)',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '104',
                'name'          => 'Capacuan',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '105',
                'name'          => 'Caunayan (Pob.) - City Of Batac',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '106',
                'name'          => 'Valdez Pob.',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '107',
                'name'          => 'Colo',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '108',
                'name'          => 'Pimentel',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '109',
                'name'          => 'Dariwdiw',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '110',
                'name'          => 'Acosta Pob.',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '111',
                'name'          => 'Ablan Pob.',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '112',
                'name'          => 'Lacub (Pob.)',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '113',
                'name'          => 'Mabaleng',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '114',
                'name'          => 'Magnuang',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '115',
                'name'          => 'Maipalig',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '116',
                'name'          => 'Nagbacalan - City Of Batac',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '117',
                'name'          => 'Naguirangan',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '118',
                'name'          => 'Ricarte Pob.',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '119',
                'name'          => 'Palongpong',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '120',
                'name'          => 'Palpalicong (Pob.)',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '121',
                'name'          => 'Parangopong',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '122',
                'name'          => 'Payao',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '123',
                'name'          => 'Quiling Norte',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '124',
                'name'          => 'Quiling Sur',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '125',
                'name'          => 'Quiom',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '126',
                'name'          => 'Rayuray',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '127',
                'name'          => 'San Julian (Pob.)',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '128',
                'name'          => 'San Mateo',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '129',
                'name'          => 'San Pedro',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '130',
                'name'          => 'Suabit (Pob.)',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '131',
                'name'          => 'Sumader',
                'municipality_code'   => '5'
            ],

            [
                'id'            => '132',
                'name'          => 'Tabug',
                'municipality_code'   => '5'
            ],

            //ILOCOS NORTE - BURGOS
            [
                'id'            => '133',
                'name'          => 'Ablan Sarat',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '134',
                'name'          => 'Agaga',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '135',
                'name'          => 'Bayog',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '136',
                'name'          => 'Bobon',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '137',
                'name'          => 'Buduan',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '138',
                'name'          => 'Nagsurot',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '139',
                'name'          => 'Paayas',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '140',
                'name'          => 'Pagali',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '141',
                'name'          => 'Poblacion',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '142',
                'name'          => 'Saoit',
                'municipality_code'   => '6'
            ],

            [
                'id'            => '143',
                'name'          => 'Tanap',
                'municipality_code'   => '6'
            ],

            //ILOCOS NORTE - CARASI
            [
                'id'            => '144',
                'name'          => 'Angset',
                'municipality_code'   => '7'
            ],

            [
                'id'            => '145',
                'name'          => 'Barbaqueso (Pob.)',
                'municipality_code'   => '7'
            ],

            [
                'id'            => '146',
                'name'          => 'Virbira',
                'municipality_code'   => '7'
            ],

            //ILOCOS NORTE - CURRIMAO
            [
                'id'            => '147',
                'name'          => 'Anggapang Norte',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '148',
                'name'          => 'Anggapang Sur',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '149',
                'name'          => 'Bimmanga',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '150',
                'name'          => 'Cabuusan',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '151',
                'name'          => 'Comcomloong',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '152',
                'name'          => 'Gaang',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '153',
                'name'          => 'Lang-ayan-Baramban',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '154',
                'name'          => 'Lioes',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '155',
                'name'          => 'Maglaoi Centro',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '156',
                'name'          => 'Maglaoi Norte',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '157',
                'name'          => 'Maglaoi Sur',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '158',
                'name'          => 'Paguludan-Salindeg',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '159',
                'name'          => 'Pangil - Currimao',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '160',
                'name'          => 'Pias Norte',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '161',
                'name'          => 'Pias Sur',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '162',
                'name'          => 'Poblacion I -   Currimao',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '163',
                'name'          => 'Poblacion II -   Currimao',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '164',
                'name'          => 'Salugan',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '165',
                'name'          => 'San Simeon - Currimao',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '166',
                'name'          => 'Santa Cruz - Currimao',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '167',
                'name'          => 'Tapao-Tigue',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '168',
                'name'          => 'Torre',
                'municipality_code'   => '8'
            ],

            [
                'id'            => '169',
                'name'          => 'Victoria',
                'municipality_code'   => '8'
            ],

            //ILOCOS NORTE - DINGRAS
            [
                'id'            => '170',
                'name'          => 'Albano (Pob.)',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '171',
                'name'          => 'Bacsil - Dingras',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '172',
                'name'          => 'Bagut',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '173',
                'name'          => 'Parado',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '174',
                'name'          => 'Baresbes',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '175',
                'name'          => 'Barong',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '176',
                'name'          => 'Bungcag',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '177',
                'name'          => 'Cali',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '178',
                'name'          => 'Capasan',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '179',
                'name'          => 'Dancel (Pob.)',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '180',
                'name'          => 'Foz',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '181',
                'name'          => 'Guerrero (Pob.)',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '182',
                'name'          => 'Lanas',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '183',
                'name'          => 'Lumbad',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '184',
                'name'          => 'Madamba (Pob.)',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '185',
                'name'          => 'Mandaloque',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '186',
                'name'          => 'Medina',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '187',
                'name'          => 'Ver',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '188',
                'name'          => 'San Marcelino',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '189',
                'name'          => 'Puruganan (Pob.)',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '190',
                'name'          => 'Peralta (Pob.)',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '191',
                'name'          => 'Root',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '192',
                'name'          => 'Sagpatan',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '193',
                'name'          => 'Saludares',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '194',
                'name'          => 'San Esteban - Dingras',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '195',
                'name'          => 'Espiritu',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '196',
                'name'          => 'Sulquiano',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '197',
                'name'          => 'San Francisco - Dingras',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '198',
                'name'          => 'Suyo',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '199',
                'name'          => 'San Marcos',
                'municipality_code'   => '9'
            ],

            [
                'id'            => '200',
                'name'          => 'Elizabeth',
                'municipality_code'   => '9'
            ],

            //ILOCOS NORTE - DUMALNEG
            [
                'id'            => '201',
                'name'          => 'Cabaritan',
                'municipality_code'   => '10'
            ],

            [
                'id'            => '202',
                'name'          => 'San Isidro - Dumalneg',
                'municipality_code'   => '10'
            ],

            [
                'id'            => '203',
                'name'          => 'Kalaw',
                'municipality_code'   => '10'
            ],

            [
                'id'            => '204',
                'name'          => 'Quibel',
                'municipality_code'   => '10'
            ],


            //ILOCOS NORTE - CITY OF LAOAG
            [
                'id'            => '205',
                'name'          => 'Bgy. No. 42, Apaya',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '206',
                'name'          => 'Bgy. No. 36, Araniw',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '207',
                'name'          => 'Bgy. No. 56-A, Bacsil North',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '208',
                'name'          => 'Bgy. No. 56-B, Bacsil South',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '209',
                'name'          => 'Bgy. No. 41, Balacad',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '210',
                'name'          => 'Bgy. No. 40, Balatong',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '211',
                'name'          => 'Bgy. No. 55-A, Barit-Pandan',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '212',
                'name'          => 'Bgy. No. 47, Bengcag',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '213',
                'name'          => 'Bgy. No. 50, Buttong',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '214',
                'name'          => 'Bgy. No. 60-A, Caaoacan',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '215',
                'name'          => 'Bry. No. 48-A, Cabungaan North',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '216',
                'name'          => 'Bgy. No. 48-B, Cabungaan South',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '217',
                'name'          => 'Bgy. No. 37, Calayab',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '218',
                'name'          => 'Bgy. No. 37, Calayab',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '219',
                'name'          => 'Bgy. No. 54-B, Camangaan',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '220',
                'name'          => 'Bgy. No. 58, Casili',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '221',
                'name'          => 'Bgy. No. 61, Cataban',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '222',
                'name'          => 'Bgy. No. 43, Cavit',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '223',
                'name'          => 'Bgy. No. 49-A, Darayday',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '224',
                'name'          => 'Bgy. No. 59-B, Dibua North',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '225',
                'name'          => 'Bgy. No. 59-A, Dibua South',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '226',
                'name'          => 'Bgy. No. 34-B, Gabu Norte East',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '227',
                'name'          => 'Bgy. No. 34-A, Gabu Norte West',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '228',
                'name'          => 'Bgy. No. 35, Gabu Sur',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '229',
                'name'          => 'Bgy. No. 32-C La Paz East',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '230',
                'name'          => 'Bgy. No. 33-B, La Paz Proper',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '231',
                'name'          => 'Bgy. No. 32-B, La Paz West',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '232',
                'name'          => 'Bgy. No. 54-A, Lagui-Sail',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '233',
                'name'          => 'Bgy. No. 32-A, La Paz East',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '234',
                'name'          => 'Bgy. No. 33-A, La Paz Proper',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '235',
                'name'          => 'Bgy. No. 52-B, Lataag',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '236',
                'name'          => 'Bgy. No. 60-B, Madiladig',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '237',
                'name'          => 'Bgy. No. 38-A, Mangato East',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '238',
                'name'          => 'Bgy. No. 38-B, Mangato West',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '239',
                'name'          => 'Bgy. No. 62-A, Navotas North',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '240',
                'name'          => 'Bgy. No. 62-B, Navotas South',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '241',
                'name'          => 'Bgy. No. 46, Nalbo',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '242',
                'name'          => 'Bgy. No. 51-A, Nangalisan East',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '243',
                'name'          => 'Bgy. No. 51-B, Nangalisan West',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '244',
                'name'          => 'Bgy. No. 24, Nstra. Sra. De Consolacion (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '245',
                'name'          => 'Bgy. No. 7-A, Nstra. Sra. De Natividad (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '246',
                'name'          => 'Bgy. No. 7-B, Nstra. Sra. De Natividad (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '247',
                'name'          => 'Bgy. No. 27, Nstra. Sra. De Soledad (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '248',
                'name'          => 'Bgy. No. 13, Nstra. Sra. De Visitacion (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '249',
                'name'          => 'Bgy. No. 3, Nstra. Sra. Del Rosario (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '250',
                'name'          => 'Bgy. No. 57, Pila',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '251',
                'name'          => 'Bgy. No. 49-B, Raraburan',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '252',
                'name'          => 'Bgy. No. 53, Rioeng',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '253',
                'name'          => 'Bgy. No. 55-B, Salet-Bulangon',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '254',
                'name'          => 'Bgy. No. 6, San Agustin (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '255',
                'name'          => 'Bgy. No. 22, San Andres (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '256',
                'name'          => 'Bgy. No. 28, San Bernardo (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '257',
                'name'          => 'Bgy. No. 17, San Francisco (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '258',
                'name'          => 'Bgy. No. 4, San Guillermo (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '259',
                'name'          => 'Bgy. No. 15, San Guillermo (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '260',
                'name'          => 'Bgy. No. 12, San Isidro (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '261',
                'name'          => 'Bgy. No. 16, San Jacinto (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '262',
                'name'          => 'Bgy. No. 10, San Jose (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '263',
                'name'          => 'Bgy. No. 1, San Lorenzo (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '264',
                'name'          => 'Bgy. No. 26, San Marcelino (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '265',
                'name'          => 'Bgy. No. 52-A, San Mateo',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '266',
                'name'          => 'Bgy. No. 23, San Matias (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '267',
                'name'          => 'Bgy. No. 20, San Miguel (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '268',
                'name'          => 'Bgy. No. 21, San Pedro (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '269',
                'name'          => 'Bgy. No. 5, San Pedro (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '270',
                'name'          => 'Bry. No. 18, San Quirino (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '271',
                'name'          => 'Bgy. No. 8, San Vicente (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '272',
                'name'          => 'Bgy. No. 9, Santa Angela (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '273',
                'name'          => 'Bgy. No. 11, Santa Balbina (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '274',
                'name'          => 'Bgy. No. 25, Santa Cayetana (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '275',
                'name'          => 'Bgy. No. 2, Santa Joaquina (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '276',
                'name'          => 'Bgy. No. 19, Santa Marcela (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '277',
                'name'          => 'Bgy. No. 30-B, Santa Maria',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '278',
                'name'          => 'Bgy. No. 39, Santa Rosa',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '279',
                'name'          => 'Bgy. No. 14, Santo Tomas (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '280',
                'name'          => 'Bgy. No. 29, Santo Tomas (Pob.)',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '281',
                'name'          => 'Bgy. No. 30-A, Suyo',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '282',
                'name'          => 'Bgy. No. 31, Talingaan',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '283',
                'name'          => 'Bgy. No. 45, Tangid',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '284',
                'name'          => 'Bgy. No. 55-C, Vira',
                'municipality_code'   => '11'
            ],

            [
                'id'            => '285',
                'name'          => 'Bgy. No. 44, Zamboanga',
                'municipality_code'   => '11'
            ],

            //ILOCOS NORTE - MARCOS
            [
                'id'            => '286',
                'name'          => 'Pacifico',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '287',
                'name'          => 'Imelda',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '288',
                'name'          => 'Elizabeth',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '289',
                'name'          => 'Daquioag',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '290',
                'name'          => 'Escoda',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '291',
                'name'          => 'Ferdinand',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '292',
                'name'          => 'Fortuna',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '293',
                'name'          => 'Lydia (Pob.)',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '294',
                'name'          => 'Mabuti',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '295',
                'name'          => 'Valdez',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '296',
                'name'          => 'Tabucbuc',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '297',
                'name'          => 'Santiago - Marcos',
                'municipality_code'   => '12'
            ],

            [
                'id'            => '298',
                'name'          => 'Cacafean',
                'municipality_code'   => '12'
            ],

            //ILOCOS NORTE - NUEVA ERA
            [
                'id'            => '299',
                'name'          => 'Acnam',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '300',
                'name'          => 'Barangobong',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '301',
                'name'          => 'Barikir',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '302',
                'name'          => 'Bugayong',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '303',
                'name'          => 'Cabittauran',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '304',
                'name'          => 'Caray',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '305',
                'name'          => 'Garnaden',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '306',
                'name'          => 'Naguillan',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '307',
                'name'          => 'Poblacion',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '308',
                'name'          => 'Santo Niño - Nueva Era',
                'municipality_code'   => '13'
            ],

            [
                'id'            => '309',
                'name'          => 'Uguis',
                'municipality_code'   => '13'
            ],

            //ILOCOS NORTE - PAGUDPUD
            [
                'id'            => '310',
                'name'          => 'Aggasi',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '311',
                'name'          => 'Baduang',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '312',
                'name'          => 'Balaoi',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '313',
                'name'          => 'Burayoc',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '314',
                'name'          => 'Caunayan - Pagudpud',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '315',
                'name'          => 'Dampig',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '316',
                'name'          => 'Ligaya',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '317',
                'name'          => 'Pancian',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '318',
                'name'          => 'Pasaleng',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '319',
                'name'          => 'Poblacion 1 - Pagudpud',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '320',
                'name'          => 'Poblacion 2 - Pagudpud',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '321',
                'name'          => 'Saguigui',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '322',
                'name'          => 'Saud - Pagudpud',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '323',
                'name'          => 'Subec',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '324',
                'name'          => 'Tarrag',
                'municipality_code'   => '14'
            ],

            [
                'id'            => '325',
                'name'          => 'Caparispisan',
                'municipality_code'   => '14'
            ],

            //ILOCOS NORTE - PAOAY
            [
                'id'            => '326',
                'name'          => 'Bacsil - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '327',
                'name'          => 'Cabagoan',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '328',
                'name'          => 'Cabangaran - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '329',
                'name'          => 'Callaguip - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '330',
                'name'          => 'Cayubog',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '331',
                'name'          => 'Dolores',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '332',
                'name'          => 'Laoa',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '333',
                'name'          => 'Masintoc',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '334',
                'name'          => 'Monte',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '335',
                'name'          => 'Mumulaan',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '336',
                'name'          => 'Nagbacalan - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '337',
                'name'          => 'Nalasin',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '338',
                'name'          => 'Nanguyudan',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '339',
                'name'          => 'Oaig-Upay-Abulao',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '340',
                'name'          => 'Pambaran',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '341',
                'name'          => 'Pannaratan (Pob.)',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '342',
                'name'          => 'Paratong - Paoay ',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '343',
                'name'          => 'Pasil',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '344',
                'name'          => 'Salbang (Pob.)',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '345',
                'name'          => 'San Agustin - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '346',
                'name'          => 'San Blas (Pob.) - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '347',
                'name'          => 'San Juan - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '348',
                'name'          => 'San Pedro - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '349',
                'name'          => 'San Roque (Pob.) - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '350',
                'name'          => 'Sangladan Pob.',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '351',
                'name'          => 'Santa Rita (Pob.) - Paoay',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '352',
                'name'          => 'Sideg',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '353',
                'name'          => 'Suba',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '354',
                'name'          => 'Sungadan',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '355',
                'name'          => 'Surgui',
                'municipality_code'   => '15'
            ],

            [
                'id'            => '356',
                'name'          => 'Veronica',
                'municipality_code'   => '15'
            ],

            //ILOCOS NORTE - PASUQUIN
            [
                'id'            => '357',
                'name'          => 'Batuli',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '358',
                'name'          => 'Binsang',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '359',
                'name'          => 'Nalvo',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '360',
                'name'          => 'Caruan',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '361',
                'name'          => 'Carusikis',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '362',
                'name'          => 'Carusipan - Pasuquin',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '363',
                'name'          => 'Dadaeman',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '364',
                'name'          => 'Darupidip',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '365',
                'name'          => 'Davila',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '366',
                'name'          => 'Dilanis',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '367',
                'name'          => 'Dilavo',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '368',
                'name'          => 'Estancia - Pasuquin',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '369',
                'name'          => 'Naglicuan',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '370',
                'name'          => 'Nagsanga',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '371',
                'name'          => 'Ngabangab',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '372',
                'name'          => 'Pangil - Pasuquin',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '373',
                'name'          => 'Poblacion 1 - Pasuquin',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '374',
                'name'          => 'Poblacion 2 - Pasuquin',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '375',
                'name'          => 'Poblacion 3 - Pasuquin',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '376',
                'name'          => 'Poblacion 4 - Pasuquin',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '377',
                'name'          => 'Pragata',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '378',
                'name'          => 'Puyupuyan',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '379',
                'name'          => 'Sulongan',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '380',
                'name'          => 'Salpad',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '381',
                'name'          => 'San Juan - Pasuquin',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '382',
                'name'          => 'Santa Catalina - Pasuquin',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '383',
                'name'          => 'Santa Matilde',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '384',
                'name'          => 'Sapat',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '385',
                'name'          => 'Sulbec',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '386',
                'name'          => 'Surong',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '387',
                'name'          => 'Susugaen',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '388',
                'name'          => 'Tabungao',
                'municipality_code'   => '16'
            ],

            [
                'id'            => '389',
                'name'          => 'Tadao',
                'municipality_code'   => '16'
            ],

            //ILOCOS NORTE - PIDDIG
            [
                'id'            => '390',
                'name'          => 'Ab-abut',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '391',
                'name'          => 'Abucay',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '392',
                'name'          => 'Anao (Pob.)',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '393',
                'name'          => 'Arua-ay',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '394',
                'name'          => 'Bimmanga',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '395',
                'name'          => 'Boyboy',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '396',
                'name'          => 'Cabaroan (Pob.) - Piddig',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '397',
                'name'          => 'Calambeg',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '398',
                'name'          => 'Callusa',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '399',
                'name'          => 'Dupitac',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '400',
                'name'          => 'Estancia - Piddig',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '401',
                'name'          => 'Gayamat',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '402',
                'name'          => 'Lagandit',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '403',
                'name'          => 'Libnaoan',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '404',
                'name'          => 'Loing (Pob.)',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '405',
                'name'          => 'Maab-abaca',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '406',
                'name'          => 'Mangitayag',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '407',
                'name'          => 'Maruaya',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '408',
                'name'          => 'San Antonio - Piddig',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '409',
                'name'          => 'Santa Maria - Piddig',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '410',
                'name'          => 'Sucsuquen',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '411',
                'name'          => 'Tangaoan',
                'municipality_code'   => '17'
            ],

            [
                'id'            => '412',
                'name'          => 'Tonoton',
                'municipality_code'   => '17'
            ],

            //ILOCOS NORTE - PINILI
            [
                'id'            => '413',
                'name'          => 'Aglipay - Pinili',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '414',
                'name'          => 'Apatut-Lubong',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '415',
                'name'          => 'Badio',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '416',
                'name'          => 'Barbar - Pinili',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '417',
                'name'          => 'Buanga',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '418',
                'name'          => 'Bulbulala - Pinili',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '419',
                'name'          => 'Bungro - Pinili',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '420',
                'name'          => 'Cabaroan - Pinili',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '421',
                'name'          => 'Capangdanan - Pinili',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '422',
                'name'          => 'Dalayap',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '423',
                'name'          => 'Darat',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '424',
                'name'          => 'Gulpeng',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '425',
                'name'          => 'Liliputen',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '426',
                'name'          => 'Lumbaan-Bicbica',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '427',
                'name'          => 'Nagtrigoan',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '428',
                'name'          => 'Pagdilao (Pob.)',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '429',
                'name'          => 'Pugaoan',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '430',
                'name'          => 'Puritac',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '431',
                'name'          => 'Sacritan',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '432',
                'name'          => 'Salanap',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '433',
                'name'          => 'Santo Tomas - Pinili',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '434',
                'name'          => 'Tartarabang',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '435',
                'name'          => 'Puzol',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '436',
                'name'          => 'Upon',
                'municipality_code'   => '18'
            ],

            [
                'id'            => '437',
                'name'          => 'Valbuena (Pob.)',
                'municipality_code'   => '18'
            ],

            //ILOCOS NORTE - SAN NICOLAS
            [
                'id'            => '438',
                'name'          => 'San Francisco (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '439',
                'name'          => 'San Ildefonso (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '440',
                'name'          => 'San Agustin - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '441',
                'name'          => 'San Baltazar (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '442',
                'name'          => 'San Bartolome (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '443',
                'name'          => 'San Cayetano (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '444',
                'name'          => 'San Eugenio (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '445',
                'name'          => 'San Fernando (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '446',
                'name'          => 'San Gregorio (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '447',
                'name'          => 'San Guillermo - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '448',
                'name'          => 'San Jose (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '449',
                'name'          => 'San Juan Bautista (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '450',
                'name'          => 'San Lorenzo - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '451',
                'name'          => 'San Lucas (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '452',
                'name'          => 'San Marcos - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '453',
                'name'          => 'San Miguel (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '454',
                'name'          => 'San Pablo - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '455',
                'name'          => 'San Paulo (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '456',
                'name'          => 'San Pedro - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '457',
                'name'          => 'San Rufino (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '458',
                'name'          => 'San Silvestre (Pob.) - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '459',
                'name'          => 'Santa Asuncion - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '460',
                'name'          => 'Santa Cecilia - San Nicolas',
                'municipality_code'   => '19'
            ],

            [
                'id'            => '461',
                'name'          => 'Santa Monica - San Nicolas',
                'municipality_code'   => '19'
            ],


            //ILOCOS NORTE - SARRAT
            [
                'id'            => '462',
                'name'          => 'San Agustin (Pob.) - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '463',
                'name'          => 'San Andres - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '464',
                'name'          => 'San Antonio - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '465',
                'name'          => 'San Bernabe - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '466',
                'name'          => 'San Cristobal - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '467',
                'name'          => 'San Felipe - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '468',
                'name'          => 'San Francisco (Pob.) - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '469',
                'name'          => 'San Isidro - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '470',
                'name'          => 'San Joaquin (Pob.) - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '471',
                'name'          => 'San Jose - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '472',
                'name'          => 'San Juan - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '473',
                'name'          => 'San Leandro (Pob.) - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '474',
                'name'          => 'San Lorenzo - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '475',
                'name'          => 'San Manuel - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '476',
                'name'          => 'San Marcos - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '477',
                'name'          => 'San Nicolas - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '478',
                'name'          => 'San Pedro - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '479',
                'name'          => 'San Roque - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '480',
                'name'          => 'San Vicente (Pob.) - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '481',
                'name'          => 'Santa Barbara (Pob.) - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '482',
                'name'          => 'Santa Magdalena - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '483',
                'name'          => 'Santa Rosa - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '484',
                'name'          => 'Santo Santiago - Sarrat',
                'municipality_code'   => '20'
            ],

            [
                'id'            => '485',
                'name'          => 'Santo Tomas - Sarrat',
                'municipality_code'   => '20'
            ],


            //ILOCOS NORTE - SOLSONA
            [
                'id'            => '486',
                'name'          => 'Aguitap',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '487',
                'name'          => 'Bagbag',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '488',
                'name'          => 'Bagbago',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '489',
                'name'          => 'Barcelona',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '490',
                'name'          => 'Bubuos',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '491',
                'name'          => 'Capurictan',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '492',
                'name'          => 'Catangraran',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '493',
                'name'          => 'Darasdas',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '494',
                'name'          => 'Juan (Pob.)',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '495',
                'name'          => 'Laureta (Pob.)',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '496',
                'name'          => 'Lipay',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '497',
                'name'          => 'Maananteng',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '498',
                'name'          => 'Manalpac',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '499',
                'name'          => 'Mariquet',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '500',
                'name'          => 'Nagpatpatan',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '501',
                'name'          => 'Nalasin',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '502',
                'name'          => 'Puttao',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '503',
                'name'          => 'San Juan - Solsona',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '504',
                'name'          => 'San Julian - Solsona',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '505',
                'name'          => 'Santa Ana - Solsona',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '506',
                'name'          => 'Santiago - Solsona',
                'municipality_code'   => '21'
            ],

            [
                'id'            => '507',
                'name'          => 'Talugtog',
                'municipality_code'   => '21'
            ],

            //ILOCOS NORTE - VINTAR
            [
                'id'            => '508',
                'name'          => 'Abkir',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '509',
                'name'          => 'Alsem',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '510',
                'name'          => 'Bago',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '511',
                'name'          => 'Bulbulala - Vintar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '512',
                'name'          => 'Cabangaran - Vintar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '513',
                'name'          => 'Cabayo',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '514',
                'name'          => 'Cabisocolan',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '515',
                'name'          => 'Canaam',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '516',
                'name'          => 'Columbia',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '517',
                'name'          => 'Dagupan',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '518',
                'name'          => 'Pedro F. Alviar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '519',
                'name'          => 'Dipilat',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '520',
                'name'          => 'Esperanza',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '521',
                'name'          => 'Ester',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '522',
                'name'          => 'Isic Isic',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '523',
                'name'          => 'Lubnac',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '524',
                'name'          => 'Mabanbanag',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '525',
                'name'          => 'Alejo Malasig',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '526',
                'name'          => 'Manarang',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '527',
                'name'          => 'Margaay - Vintar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '528',
                'name'          => 'Namoroc',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '529',
                'name'          => 'Malampa',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '530',
                'name'          => 'Parparoroc',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '531',
                'name'          => 'Parut',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '532',
                'name'          => 'Salsalamagui',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '533',
                'name'          => 'San Jose - Vintar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '534',
                'name'          => 'San Nicolas (Pob.) - Vintar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '535',
                'name'          => 'San Pedro (Pob.) - Vintar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '536',
                'name'          => 'San Ramon (Pob.) - Vintar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '537',
                'name'          => 'San Roque (Pob.) - Vintar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '538',
                'name'          => 'Santa Maria (Pob.) - Vintar',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '539',
                'name'          => 'Tamdagan',
                'municipality_code'   => '22'
            ],

            [
                'id'            => '540',
                'name'          => 'Visaya',
                'municipality_code'   => '22'
            ],


            //ILOCOS SUR - ALILEM
            [
                'id'            => '541',
                'name'          => 'Alilem Daya (Pob.)',
                'municipality_code'   => '23'
            ],

            [
                'id'            => '542',
                'name'          => 'Amilongan',
                'municipality_code'   => '23'
            ],

            [
                'id'            => '543',
                'name'          => 'Anaao',
                'municipality_code'   => '23'
            ],

            [
                'id'            => '544',
                'name'          => 'Apang',
                'municipality_code'   => '23'
            ],

            [
                'id'            => '545',
                'name'          => 'Apaya',
                'municipality_code'   => '23'
            ],

            [
                'id'            => '546',
                'name'          => 'Batbato',
                'municipality_code'   => '23'
            ],

            [
                'id'            => '547',
                'name'          => 'Daddaay',
                'municipality_code'   => '23'
            ],

            [
                'id'            => '548',
                'name'          => 'Dalawa',
                'municipality_code'   => '23'
            ],

            [
                'id'            => '549',
                'name'          => 'Kiat',
                'municipality_code'   => '23'
            ],


            //ILOCOS SUR - BANAYOYO
            [
                'id'            => '550',
                'name'          => 'Bagbagotot',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '551',
                'name'          => 'Banbanaal',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '552',
                'name'          => 'Bisangol',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '553',
                'name'          => 'Cadanglaan - Banayoyo',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '554',
                'name'          => 'Casilagan Norte',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '555',
                'name'          => 'Casilagan Sur',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '556',
                'name'          => 'Elefante',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '557',
                'name'          => 'Guardia',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '558',
                'name'          => 'Lintic',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '559',
                'name'          => 'Lopez',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '560',
                'name'          => 'Montero',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '561',
                'name'          => 'Naguimba',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '562',
                'name'          => 'Pila - Banayoyo',
                'municipality_code'   => '24'
            ],

            [
                'id'            => '563',
                'name'          => 'Poblacion - Banayoyo',
                'municipality_code'   => '24'
            ],

            //ILOCOS SUR - BANTAY
            [
                'id'            => '564',
                'name'          => 'Aggay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '565',
                'name'          => 'An-annam',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '566',
                'name'          => 'Balaleng',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '567',
                'name'          => 'Banaoang',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '568',
                'name'          => 'Bulag',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '569',
                'name'          => 'Buquig',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '570',
                'name'          => 'Cabalanggan',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '571',
                'name'          => 'Cabaroan - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '572',
                'name'          => 'Cabusligan - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '573',
                'name'          => 'Capangdanan - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '574',
                'name'          => 'Guimod',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '575',
                'name'          => 'Lingsat',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '576',
                'name'          => 'Malingeb',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '577',
                'name'          => 'Mira',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '578',
                'name'          => 'Naguiddayan',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '579',
                'name'          => 'Ora',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '580',
                'name'          => 'Paing',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '581',
                'name'          => 'Puspus',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '582',
                'name'          => 'Quimmarayan',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '583',
                'name'          => 'Sagneb - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '584',
                'name'          => 'Sagpat',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '585',
                'name'          => 'San Mariano',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '586',
                'name'          => 'San Isidro - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '587',
                'name'          => 'San Julian - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '588',
                'name'          => 'Sinabaan',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '589',
                'name'          => 'Taguiporo - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '590',
                'name'          => 'Taleb',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '591',
                'name'          => 'Tay-ac - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '592',
                'name'          => 'Barangay 1 (Pob.) - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '593',
                'name'          => 'Barangay 2 (Pob.) - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '594',
                'name'          => 'Barangay 3 (Pob.) - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '595',
                'name'          => 'Barangay 4 (Pob.) - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '596',
                'name'          => 'Barangay 5 (Pob.) - Bantay',
                'municipality_code'   => '25'
            ],

            [
                'id'            => '597',
                'name'          => 'Barangay 6 (Pob.) - Bantay',
                'municipality_code'   => '25'
            ],


            //ILOCOS SUR - BURGOS
            [
                'id'            => '598',
                'name'          => 'Ambugat',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '599',
                'name'          => 'Balugang',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '600',
                'name'          => 'Bangbangar',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '601',
                'name'          => 'Bessang',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '602',
                'name'          => 'Cabcaburao',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '603',
                'name'          => 'Cadacad - Burgos',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '604',
                'name'          => 'Callitong',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '605',
                'name'          => 'Dayanki',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '606',
                'name'          => 'Lesseb',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '607',
                'name'          => 'Lubing',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '608',
                'name'          => 'Lucaban',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '609',
                'name'          => 'Luna',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '610',
                'name'          => 'Macaoayan',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '611',
                'name'          => 'Mambug',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '612',
                'name'          => 'Manaboc',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '613',
                'name'          => 'Mapanit',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '614',
                'name'          => 'Poblacion Sur - Burgos',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '615',
                'name'          => 'Nagpanaoan',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '616',
                'name'          => 'Dirdirig',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '617',
                'name'          => 'Paduros',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '618',
                'name'          => 'Patac - Burgos',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '619',
                'name'          => 'Poblacion Norte - Burgos ',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '620',
                'name'          => 'Sabangan Pinggan',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '621',
                'name'          => 'Subadi Norte',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '622',
                'name'          => 'Subadi Sur',
                'municipality_code'   => '26'
            ],

            [
                'id'            => '623',
                'name'          => 'Taliao',
                'municipality_code'   => '26'
            ],


            //ILOCOS SUR - CABUGAO
            [
                'id'            => '624',
                'name'          => 'Alinaay',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '625',
                'name'          => 'Aragan',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '626',
                'name'          => 'Arnap - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '627',
                'name'          => 'Baclig (Pob.)',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '628',
                'name'          => 'Bato',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '629',
                'name'          => 'Bonifacio (Pob.)',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '630',
                'name'          => 'Bungro - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '631',
                'name'          => 'Cacadiran',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '632',
                'name'          => 'Caellayan',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '633',
                'name'          => 'Carusipan - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '634',
                'name'          => 'Catucdaan',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '635',
                'name'          => 'Cuancabal',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '636',
                'name'          => 'Cuantacla',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '637',
                'name'          => 'Daclapan',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '638',
                'name'          => 'Dardarat - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '639',
                'name'          => 'Lipit',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '640',
                'name'          => 'Maradodon',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '641',
                'name'          => 'Margaay - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '642',
                'name'          => 'Nagsantaan',
                'municipality_code'   => '27'
            ],


            [
                'id'            => '643',
                'name'          => 'Nagsincaoan',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '644',
                'name'          => 'Namruangan',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '645',
                'name'          => 'Pila - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '646',
                'name'          => 'Pug-os',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '647',
                'name'          => 'Quezon (Pob.) - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '648',
                'name'          => 'Reppaac',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '649',
                'name'          => 'Rizal (Pob.) - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '650',
                'name'          => 'Sabang - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '651',
                'name'          => 'Sagayaden',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '652',
                'name'          => 'Salapasap',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '653',
                'name'          => 'Salomague',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '654',
                'name'          => 'Sisim',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '655',
                'name'          => 'Turod - Cabugao',
                'municipality_code'   => '27'
            ],

            [
                'id'            => '656',
                'name'          => 'Turod-Patac',
                'municipality_code'   => '27'
            ],

            //ILOCOS SUR - CANDON
            [
                'id'            => '657',
                'name'          => 'Allangigan Primero',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '658',
                'name'          => 'Allangigan Segundo',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '659',
                'name'          => 'Amguid',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '660',
                'name'          => 'Ayudante',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '661',
                'name'          => 'Bagani Camposanto',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '662',
                'name'          => 'Bagani Gabor',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '663',
                'name'          => 'Bagani Tocgo',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '664',
                'name'          => 'Bagani Ubbog',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '665',
                'name'          => 'Bagar',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '666',
                'name'          => 'Balingaoan',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '667',
                'name'          => 'Bugnay',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '668',
                'name'          => 'Calaoaan',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '669',
                'name'          => 'Calongbuyan - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '670',
                'name'          => 'Caterman',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '671',
                'name'          => 'Cubcubboot',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '672',
                'name'          => 'Darapidap',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '673',
                'name'          => 'Langlangca Primero',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '674',
                'name'          => 'Langlangca Segundo',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '675',
                'name'          => 'Oaig-Daya - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '676',
                'name'          => 'Palacapac',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '677',
                'name'          => 'Paras',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '678',
                'name'          => 'Parioc Primero',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '679',
                'name'          => 'Parioc Segundo',
                'municipality_code'   => '28'
            ],


            [
                'id'            => '680',
                'name'          => 'Patpata Primero',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '681',
                'name'          => 'Patpata Segundo',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '682',
                'name'          => 'Paypayad',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '683',
                'name'          => 'Salvador Primero',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '684',
                'name'          => 'Salvador Segundo',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '685',
                'name'          => 'San Agustin - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '686',
                'name'          => 'San Andres - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '687',
                'name'          => 'San Antonio (Pob.) - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '688',
                'name'          => 'San Isidro (Pob.) - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '689',
                'name'          => 'San Jose (Pob.) - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '690',
                'name'          => 'San Juan (Pob.) - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '691',
                'name'          => 'San Nicolas - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '692',
                'name'          => 'San Pedro - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '693',
                'name'          => 'Santo Tomas - Candon',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '694',
                'name'          => 'Tablac',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '695',
                'name'          => 'Talogtog',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '696',
                'name'          => 'Tamurong Primero',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '697',
                'name'          => 'Tamurong Segundo',
                'municipality_code'   => '28'
            ],

            [
                'id'            => '698',
                'name'          => 'Villarica',
                'municipality_code'   => '28'
            ],

            //ILOCOS SUR - CAOAYAN
            [
                'id'            => '699',
                'name'          => 'Anonang Mayor',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '700',
                'name'          => 'Anonang Menor',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '701',
                'name'          => 'Baggoc',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '702',
                'name'          => 'Callaguip - Caoayan',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '703',
                'name'          => 'Caparacadan',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '704',
                'name'          => 'Fuerte',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '705',
                'name'          => 'Manangat',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '706',
                'name'          => 'Naguilian',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '707',
                'name'          => 'Nansuagao',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '708',
                'name'          => 'Pandan',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '709',
                'name'          => 'Pantay-Quitiquit',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '710',
                'name'          => 'Don Dimas Querubin (Pob.)',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '711',
                'name'          => 'Puro',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '712',
                'name'          => 'Pantay Tamurong',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '713',
                'name'          => 'Villamar',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '714',
                'name'          => 'Don Alejandro Quirolgico (Pob.)',
                'municipality_code'   => '29'
            ],

            [
                'id'            => '715',
                'name'          => 'Don Lorenzo Querubin (Pob.)',
                'municipality_code'   => '29'
            ],

            //ILOCOS SUR - CERVANTES
            [
                'id'            => '716',
                'name'          => 'Aluling',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '717',
                'name'          => 'Comillas North',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '718',
                'name'          => 'Comillas South',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '719',
                'name'          => 'Concepcion (Pob.) - Cervantes',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '720',
                'name'          => 'Dinwede East',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '721',
                'name'          => 'Dinwede West',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '722',
                'name'          => 'Libang',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '723',
                'name'          => 'Pilipil',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '724',
                'name'          => 'Remedios',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '725',
                'name'          => 'Rosario (Pob.) - Cervantes',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '726',
                'name'          => 'San Juan - Cervantes',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '727',
                'name'          => 'San Luis - Cervantes',
                'municipality_code'   => '30'
            ],

            [
                'id'            => '728',
                'name'          => 'Malaya - Cervantes',
                'municipality_code'   => '30'
            ],


            //ILOCOS SUR - GALIMUYOD
            [
                'id'            => '729',
                'name'          => 'Abaya',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '730',
                'name'          => 'Baracbac',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '731',
                'name'          => 'Bidbiday',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '732',
                'name'          => 'Bitong',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '733',
                'name'          => 'Borobor',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '734',
                'name'          => 'Calimugtong',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '735',
                'name'          => 'Calongbuyan - Galimuyod',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '736',
                'name'          => 'Calumbaya',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '737',
                'name'          => 'Daldagan',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '738',
                'name'          => 'Kilang',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '739',
                'name'          => 'Legaspi',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '740',
                'name'          => 'Mabayag',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '741',
                'name'          => 'Matanubong',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '742',
                'name'          => 'Mckinley',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '743',
                'name'          => 'Nagsingcaoan',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '744',
                'name'          => 'Oaig-Daya - Galimuyod',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '745',
                'name'          => 'Pagangpang',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '746',
                'name'          => 'Patac - Galimuyod',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '747',
                'name'          => 'Poblacion - Galimuyod',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '748',
                'name'          => 'Rubio',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '749',
                'name'          => 'Sabangan-Bato',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '750',
                'name'          => 'Sacaang',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '751',
                'name'          => 'San Vicente - Galimuyod',
                'municipality_code'   => '31'
            ],

            [
                'id'            => '752',
                'name'          => 'Sapang',
                'municipality_code'   => '31'
            ],

            //ILOCOS SUR - GREGORIO DEL PILAR
            [
                'id'            => '753',
                'name'          => 'Alfonso - Gregorio Del Pilar',
                'municipality_code'   => '32'
            ],

            [
                'id'            => '754',
                'name'          => 'Bussot',
                'municipality_code'   => '32'
            ],

            [
                'id'            => '755',
                'name'          => 'Concepcion - Gregorio Del Pilar',
                'municipality_code'   => '32'
            ],

            [
                'id'            => '756',
                'name'          => 'Dapdappig',
                'municipality_code'   => '32'
            ],

            [
                'id'            => '757',
                'name'          => 'Matue-Butarag',
                'municipality_code'   => '32'
            ],

            [
                'id'            => '758',
                'name'          => 'Poblacion Norte - Gregorio Del Pilar',
                'municipality_code'   => '32'
            ],

            [
                'id'            => '759',
                'name'          => 'Poblacion Sur - Gregorio Del Pilar',
                'municipality_code'   => '32'
            ],

            //ILOCOS SUR - LIDLIDDA
            [
                'id'            => '760',
                'name'          => 'Banucal',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '761',
                'name'          => 'Bequi-Walin',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '762',
                'name'          => 'Bugui',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '763',
                'name'          => 'Calungbuyan',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '764',
                'name'          => 'Carcarabasa',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '765',
                'name'          => 'Labut',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '766',
                'name'          => 'Poblacion Norte - Lidlidda',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '767',
                'name'          => 'Poblacion Sur - Lidlidda',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '768',
                'name'          => 'San Vicente - Lidlidda',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '769',
                'name'          => 'Suysuyan',
                'municipality_code'   => '33'
            ],

            [
                'id'            => '770',
                'name'          => 'Tay-ac - Lidlidda',
                'municipality_code'   => '33'
            ],

            //ILOCOS SUR - MAGSINGAL
            [
                'id'            => '771',
                'name'          => 'Alangan',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '772',
                'name'          => 'Bacar',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '773',
                'name'          => 'Barbarit',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '774',
                'name'          => 'Bungro - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '775',
                'name'          => 'Cabaroan - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '776',
                'name'          => 'Cadanglaan - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '777',
                'name'          => 'Caraisan',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '778',
                'name'          => 'Dacutan',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '779',
                'name'          => 'Labut',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '780',
                'name'          => 'Maas-asin',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '781',
                'name'          => 'Macatcatud',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '782',
                'name'          => 'Namalpalan',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '783',
                'name'          => 'Manzante',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '784',
                'name'          => 'Maratudo',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '785',
                'name'          => 'Miramar',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '786',
                'name'          => 'Napo',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '787',
                'name'          => 'Pagsanaan Norte',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '788',
                'name'          => 'Pagsanaan Sur',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '789',
                'name'          => 'Panay Norte',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '790',
                'name'          => 'Panay Sur',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '791',
                'name'          => 'Patong',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '792',
                'name'          => 'Puro',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '793',
                'name'          => 'San Basilio (Pob.) - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '794',
                'name'          => 'San Clemente (Pob.) - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '795',
                'name'          => 'San Julian (Pob.) - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '796',
                'name'          => 'San Lucas (Pob.) - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '797',
                'name'          => 'San Ramon (Pob.) - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '798',
                'name'          => 'San Vicente (Pob.) - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '799',
                'name'          => 'Santa Monica - Magsingal',
                'municipality_code'   => '34'
            ],

            [
                'id'            => '800',
                'name'          => 'Sarsaracat',
                'municipality_code'   => '34'
            ],


            //ILOCOS SUR - NAGBUKEL
            [
                'id'            => '801',
                'name'          => 'Balaweg',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '802',
                'name'          => 'Bandril',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '803',
                'name'          => 'Bantugo',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '804',
                'name'          => 'Cadacad - Nagbukel',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '805',
                'name'          => 'Casilagan',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '806',
                'name'          => 'Casocos',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '807',
                'name'          => 'Lapting - Nagbukel',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '808',
                'name'          => 'Mapisi',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '809',
                'name'          => 'Mission',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '810',
                'name'          => 'Poblacion East - Nagbukel',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '811',
                'name'          => 'Poblacion West - Nagbukel',
                'municipality_code'   => '35'
            ],

            [
                'id'            => '812',
                'name'          => 'Taleb',
                'municipality_code'   => '35'
            ],


            //ILOCOS SUR - NARVACAN
            [
                'id'            => '813',
                'name'          => 'Abuor',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '814',
                'name'          => 'Ambulogan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '815',
                'name'          => 'Aquib',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '816',
                'name'          => 'Banglayan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '817',
                'name'          => 'Bulanos',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '818',
                'name'          => 'Cadacad - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '819',
                'name'          => 'Cagayungan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '820',
                'name'          => 'Camarao',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '821',
                'name'          => 'Casilagan - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '822',
                'name'          => 'Codoog',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '823',
                'name'          => 'Dasay',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '824',
                'name'          => 'Dinalaoan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '825',
                'name'          => 'Estancia - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '826',
                'name'          => 'Lanipao',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '827',
                'name'          => 'Lungog',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '828',
                'name'          => 'Margaay - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '829',
                'name'          => 'Marozo',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '830',
                'name'          => 'Naguneg',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '831',
                'name'          => 'Orence',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '832',
                'name'          => 'Pantoc',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '833',
                'name'          => 'Paratong - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '834',
                'name'          => 'Parparia',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '835',
                'name'          => 'Quinarayan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '836',
                'name'          => 'Rivadavia',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '837',
                'name'          => 'San Antonio - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '838',
                'name'          => 'San Jose (Pob.) - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '839',
                'name'          => 'San Pablo - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '840',
                'name'          => 'San Pedro - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '841',
                'name'          => 'Santa Lucia (Pob.) - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '842',
                'name'          => 'Sarmingan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '843',
                'name'          => 'Sucoc',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '844',
                'name'          => 'Sulvec',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '845',
                'name'          => 'Turod - Narvacan',
                'municipality_code'   => '36'
            ],

            [
                'id'            => '846',
                'name'          => 'Bantay Abot',
                'municipality_code'   => '36'
            ],


            //ILOCOS SIR - QUIRINO
            [
                'id'            => '847',
                'name'          => 'Banoen',
                'municipality_code'   => '37'
            ],

            [
                'id'            => '848',
                'name'          => 'Cayus',
                'municipality_code'   => '37'
            ],

            [
                'id'            => '849',
                'name'          => 'Patungcaleo',
                'municipality_code'   => '37'
            ],

            [
                'id'            => '850',
                'name'          => 'Malideg',
                'municipality_code'   => '37'
            ],

            [
                'id'            => '851',
                'name'          => 'Namitpit',
                'municipality_code'   => '37'
            ],

            [
                'id'            => '852',
                'name'          => 'Patiacan',
                'municipality_code'   => '37'
            ],

            [
                'id'            => '853',
                'name'          => 'Legleg (Pob.)',
                'municipality_code'   => '37'
            ],

            [
                'id'            => '854',
                'name'          => 'Suagayan',
                'municipality_code'   => '37'
            ],

            [
                'id'            => '855',
                'name'          => 'Lamag',
                'municipality_code'   => '37'
            ],

            //ILOCOS SUR - SALCEDO
            [
                'id'            => '856',
                'name'          => 'Atabay',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '857',
                'name'          => 'Calangcuasan',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '858',
                'name'          => 'Balidbid',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '859',
                'name'          => 'Baluarte',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '860',
                'name'          => 'Baybayading',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '861',
                'name'          => 'Boguibog',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '862',
                'name'          => 'Bulala-Leguey',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '863',
                'name'          => 'Kaliwakiw',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '864',
                'name'          => 'Culiong',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '865',
                'name'          => 'Dinaratan',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '866',
                'name'          => 'Kinmarin',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '867',
                'name'          => 'Lucbuban',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '868',
                'name'          => 'Madarang',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '869',
                'name'          => 'Maligcong',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '870',
                'name'          => 'Pias',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '871',
                'name'          => 'Poblacion Norte - Salcedo',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '872',
                'name'          => 'Poblacion Sur - Salcedo',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '873',
                'name'          => 'San Gaspar - Salcedo',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '874',
                'name'          => 'San Tiburcio - Salcedo',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '875',
                'name'          => 'Sorioan',
                'municipality_code'   => '38'
            ],

            [
                'id'            => '876',
                'name'          => 'Ubbog',
                'municipality_code'   => '38'
            ],

            //ILOCOS SUR - SAN EMILIO
            [
                'id'            => '877',
                'name'          => 'Cabaroan (Pob.) - San Emilio',
                'municipality_code'   => '39'
            ],

            [
                'id'            => '878',
                'name'          => 'Kalumsing',
                'municipality_code'   => '39'
            ],

            [
                'id'            => '879',
                'name'          => 'Lancuas',
                'municipality_code'   => '39'
            ],

            [
                'id'            => '880',
                'name'          => 'Matibuey',
                'municipality_code'   => '39'
            ],

            [
                'id'            => '881',
                'name'          => 'Paltoc',
                'municipality_code'   => '39'
            ],

            [
                'id'            => '882',
                'name'          => 'Sibsibbu',
                'municipality_code'   => '39'
            ],

            [
                'id'            => '883',
                'name'          => 'Tiagan',
                'municipality_code'   => '39'
            ],

            [
                'id'            => '884',
                'name'          => 'San Miliano',
                'municipality_code'   => '39'
            ],

            //ILOCOS SUR - SAN ESTEBAN
            [
                'id'            => '885',
                'name'          => 'Ansad',
                'municipality_code'   => '40'
            ],

            [
                'id'            => '886',
                'name'          => 'Apatot',
                'municipality_code'   => '40'
            ],

            [
                'id'            => '887',
                'name'          => 'Bateria',
                'municipality_code'   => '40'
            ],

            [
                'id'            => '888',
                'name'          => 'Cabaroan - San Esteban',
                'municipality_code'   => '40'
            ],

            [
                'id'            => '889',
                'name'          => 'Cappa-cappa',
                'municipality_code'   => '40'
            ],

            [
                'id'            => '900',
                'name'          => 'Poblacion - San Esteban',
                'municipality_code'   => '40'
            ],

            [
                'id'            => '901',
                'name'          => 'San Nicolas - San Esteban',
                'municipality_code'   => '40'
            ],

            [
                'id'            => '902',
                'name'          => 'San Pablo - San Esteban',
                'municipality_code'   => '40'
            ],

            [
                'id'            => '903',
                'name'          => 'San Rafael - San Esteban',
                'municipality_code'   => '40'
            ],

            [
                'id'            => '904',
                'name'          => 'Villa Quirino',
                'municipality_code'   => '40'
            ],


            //ILOCOS SUR - SAN ILDEFONSO
            [
                'id'            => '905',
                'name'          => 'Arnap - San Ildefonso',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '906',
                'name'          => 'Bahet',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '907',
                'name'          => 'Belen',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '908',
                'name'          => 'Bungro - San Ildefonso',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '909',
                'name'          => 'Busiing Sur',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '910',
                'name'          => 'Busiing Norte',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '911',
                'name'          => 'Dongalo',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '912',
                'name'          => 'Gongogong',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '913',
                'name'          => 'Iboy',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '914',
                'name'          => 'Otol-Patac',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '915',
                'name'          => 'Poblacion East - San Ildefonso',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '916',
                'name'          => 'Poblacion West - San Ildefonso',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '917',
                'name'          => 'Kinamantirisan',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '918',
                'name'          => 'Sagneb - San Ildefonso',
                'municipality_code'   => '41'
            ],

            [
                'id'            => '919',
                'name'          => 'Sagsagat ',
                'municipality_code'   => '41'
            ],


            //ILOCOS SUR - SAN JUAN
            [
                'id'            => '920',
                'name'          => 'Bacsil - San Juan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '921',
                'name'          => 'Baliw',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '922',
                'name'          => 'Bannuar (Pob.)',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '923',
                'name'          => 'Barbar - San Juan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '924',
                'name'          => 'Cabanglotan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '925',
                'name'          => 'Cacandongan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '926',
                'name'          => 'Camanggaan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '927',
                'name'          => 'Camindoroan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '928',
                'name'          => 'Caronoan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '929',
                'name'          => 'Darao',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '930',
                'name'          => 'Dardarat - San Juan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '931',
                'name'          => 'Guimod Norte',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '932',
                'name'          => 'Guimod Sur',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '933',
                'name'          => 'Immayos Norte',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '934',
                'name'          => 'Immayos Sur',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '935',
                'name'          => 'Labnig',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '936',
                'name'          => 'Lapting - San Juan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '937',
                'name'          => 'Lira (Pob.)',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '938',
                'name'          => 'Malamin',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '939',
                'name'          => 'Muraya',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '940',
                'name'          => 'Nagsabaran',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '941',
                'name'          => 'Nagsupotan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '942',
                'name'          => 'Pandayan (Pob.)',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '943',
                'name'          => 'Refaro',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '944',
                'name'          => 'Resurreccion (Pob.)',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '945',
                'name'          => 'Sabangan - San Juan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '946',
                'name'          => 'San Isidro - San Juan',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '947',
                'name'          => 'Saoang',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '948',
                'name'          => 'Solotsolot',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '949',
                'name'          => 'Sunggiam',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '950',
                'name'          => 'Surngit',
                'municipality_code'   => '42'
            ],

            [
                'id'            => '951',
                'name'          => 'Asilang',
                'municipality_code'   => '42'
            ],


            //ILOCOS SUR - SAN VICENTE
            [
                'id'            => '952',
                'name'          => 'Bantaoay',
                'municipality_code'   => '43'
            ],

            [
                'id'            => '953',
                'name'          => 'Bayubay Norte',
                'municipality_code'   => '43'
            ],

            [
                'id'            => '954',
                'name'          => 'Bayubay Sur',
                'municipality_code'   => '43'
            ],

            [
                'id'            => '955',
                'name'          => 'Lubong',
                'municipality_code'   => '43'
            ],

            [
                'id'            => '956',
                'name'          => 'Poblacion - San Vicente',
                'municipality_code'   => '43'
            ],

            [
                'id'            => '957',
                'name'          => 'Pudoc',
                'municipality_code'   => '43'
            ],

            [
                'id'            => '958',
                'name'          => 'San Sebastian - San Vicente',
                'municipality_code'   => '43'
            ],


        ]);
    }
}
