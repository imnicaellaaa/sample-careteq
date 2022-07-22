<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationSeeder extends Seeder
{

    public function run()
    {
        //
        DB::table('specializations')->insert([
            [
                'id'            => '1',
                'code'          => '100',
                'description'   => 'General Surgery'
            ],

            [
                'id'            => '2',
                'code'          => '101',
                'description'   => 'Urology'
            ],

            [
                'id'            => '3',
                'code'          => '107',
                'description'   => 'Vascular Surgery'
            ],

            [
                'id'            => '4',
                'code'          => '110',
                'description'   => 'Trauma and Orthopaedics'
            ],

            [
                'id'            => '5',
                'code'          => '120',
                'description'   => 'Ear Nose and Throat'
            ],

            [
                'id'            => '6',
                'code'          => '130',
                'description'   => 'Ophthalmology'
            ],

            [
                'id'            => '7',
                'code'          => '140',
                'description'   => 'Oral Surgery'
            ],

            [
                'id'            => '8',
                'code'          => '141',
                'description'   => 'Restorative Dentistry'
            ],

            [
                'id'            => '9',
                'code'          => '142',
                'description'   => 'Paediatric Dentistry'
            ],

            [
                'id'            => '10',
                'code'          => '143',
                'description'   => 'Orthodontics'
            ],

            [
                'id'            => '11',
                'code'          => '145',
                'description'   => 'Oral and Maxillofacial Surgery'
            ],

            [
                'id'            => '12',
                'code'          => '146',
                'description'   => 'Endodontics'
            ],

            [
                'id'            => '13',
                'code'          => '147',
                'description'   => 'Periodontics'
            ],

            [
                'id'            => '14',
                'code'          => '148',
                'description'   => 'Prosthodontics'
            ],

            [
                'id'            => '15',
                'code'          => '149',
                'description'   => 'Surgical Dentistry'
            ],

            [
                'id'            => '16',
                'code'          => '150',
                'description'   => 'Neurosurgery'
            ],

            [
                'id'            => '17',
                'code'          => '160',
                'description'   => 'Plastic Surgery'
            ],

            [
                'id'            => '18',
                'code'          => '170',
                'description'   => 'Cardiothoracic Surgery'
            ],

            [
                'id'            => '19',
                'code'          => '171',
                'description'   => 'Paediatric Surgery'
            ],

            [
                'id'            => '20',
                'code'          => '180',
                'description'   => 'Emergency Medicine'
            ],

            [
                'id'            => '21',
                'code'          => '190',
                'description'   => 'Anaesthetics'
            ],

            [
                'id'            => '22',
                'code'          => '192',
                'description'   => 'Intensive Care Medicine'
            ],

            [
                'id'            => '23',
                'code'          => '200',
                'description'   => 'Aviation and Space Medicine'
            ],

            [
                'id'            => '24',
                'code'          => '300',
                'description'   => 'General Internal Medicine'
            ],

            [
                'id'            => '25',
                'code'          => '301',
                'description'   => 'Gastroenterology'
            ],

            [
                'id'            => '26',
                'code'          => '302',
                'description'   => 'Endocrinology and Diabetes'
            ],

            [
                'id'            => '27',
                'code'          => '303',
                'description'   => 'Clinical Haematology'
            ],

            [
                'id'            => '28',
                'code'          => '304',
                'description'   => 'Clinical Physiology'
            ],

            [
                'id'            => '29',
                'code'          => '305',
                'description'   => 'Clinical Pharmacology'
            ],

            [
                'id'            => '30',
                'code'          => '310',
                'description'   => 'Audio Vestibular Medicine'
            ],

            [
                'id'            => '31',
                'code'          => '311',
                'description'   => 'Clinical Genetics'
            ],

            [
                'id'            => '32',
                'code'          => '313',
                'description'   => 'Clinical Immunology'
            ],

            [
                'id'            => '33',
                'code'          => '314',
                'description'   => 'Rehabilitation Medicine'
            ],

            [
                'id'            => '34',
                'code'          => '315',
                'description'   => 'Palliative Medicine'
            ],

            [
                'id'            => '35',
                'code'          => '317',
                'description'   => 'Allergy'
            ],

            [
                'id'            => '36',
                'code'          => '320',
                'description'   => 'Cardiology'
            ],

            [
                'id'            => '37',
                'code'          => '321',
                'description'   => 'Paediatric Cardiology'
            ],

            [
                'id'            => '38',
                'code'          => '325',
                'description'   => 'Sport and Exercise Medicine'
            ],

            [
                'id'            => '39',
                'code'          => '326',
                'description'   => 'Acute Internal Medicine'
            ],

            [
                'id'            => '40',
                'code'          => '330',
                'description'   => 'Dermatology'
            ],

            [
                'id'            => '41',
                'code'          => '340',
                'description'   => 'Respiratory Medicine'
            ],

            [
                'id'            => '42',
                'code'          => '350',
                'description'   => 'Infectious Diseases'
            ],

            [
                'id'            => '43',
                'code'          => '352',
                'description'   => 'Tropical Medicine'
            ],

            [
                'id'            => '44',
                'code'          => '360',
                'description'   => 'Genitourinary Medicine'
            ],

            [
                'id'            => '45',
                'code'          => '361',
                'description'   => 'Renal Medicine'
            ],

            [
                'id'            => '46',
                'code'          => '370',
                'description'   => 'Medical Oncology'
            ],

            [
                'id'            => '47',
                'code'          => '371',
                'description'   => 'Nuclear Medicine'
            ],

            [
                'id'            => '48',
                'code'          => '400',
                'description'   => 'Neurology'
            ],

            [
                'id'            => '49',
                'code'          => '401',
                'description'   => 'Clinical Neurophysiology'
            ],

            [
                'id'            => '50',
                'code'          => '410',
                'description'   => 'Rheumatology'
            ],

            [
                'id'            => '51',
                'code'          => '420',
                'description'   => 'Paediatrics'
            ],

            [
                'id'            => '52',
                'code'          => '421',
                'description'   => 'Paediatric Neurology'
            ],

            [
                'id'            => '53',
                'code'          => '430',
                'description'   => 'Geriatric Medicine'
            ],

            [
                'id'            => '54',
                'code'          => '450',
                'description'   => 'Dental Medicine'
            ],

            [
                'id'            => '55',
                'code'          => '451',
                'description'   => 'Special Care Dentistry'
            ],

            [
                'id'            => '56',
                'code'          => '460',
                'description'   => 'Medical Ophthalmology'
            ],

            [
                'id'            => '57',
                'code'          => '501',
                'description'   => 'Obstetrics'
            ],

            [
                'id'            => '58',
                'code'          => '502',
                'description'   => 'Gynaecology'
            ],

            [
                'id'            => '59',
                'code'          => '504',
                'description'   => 'Community Sexual and Reproductive Health'
            ],

            [
                'id'            => '60',
                'code'          => '560',
                'description'   => 'Midwifery'
            ],

            [
                'id'            => '61',
                'code'          => '600',
                'description'   => 'General Medical Practice'
            ],

            [
                'id'            => '62',
                'code'          => '601',
                'description'   => 'General Dental Practice'
            ],

            [
                'id'            => '63',
                'code'          => '700',
                'description'   => 'Learning Disability'
            ],

            [
                'id'            => '64',
                'code'          => '710',
                'description'   => 'Adult Mental Illness'
            ],

            [
                'id'            => '65',
                'code'          => '711',
                'description'   => 'Child and Adolescent Psychiatry'
            ],

            [
                'id'            => '66',
                'code'          => '712',
                'description'   => 'Forensic Psychiatry'
            ],

            [
                'id'            => '67',
                'code'          => '713',
                'description'   => 'Medical Psychotherapy'
            ],

            [
                'id'            => '68',
                'code'          => '715',
                'description'   => 'Old Age Psychiatry'
            ],

            [
                'id'            => '69',
                'code'          => '800',
                'description'   => 'Clinical Oncology'
            ],

            [
                'id'            => '70',
                'code'          => '810',
                'description'   => 'Radiology'
            ],

            [
                'id'            => '71',
                'code'          => '820',
                'description'   => 'General Pathology'
            ],

            [
                'id'            => '72',
                'code'          => '821',
                'description'   => 'Blood Transfusion'
            ],

            [
                'id'            => '73',
                'code'          => '822',
                'description'   => 'Chemical Pathology'
            ],

            [
                'id'            => '74',
                'code'          => '823',
                'description'   => 'Haematology'
            ],

            [
                'id'            => '75',
                'code'          => '824',
                'description'   => 'Histopathology'
            ],

            [
                'id'            => '76',
                'code'          => '830',
                'description'   => 'Immunopathology'
            ],

            [
                'id'            => '77',
                'code'          => '831',
                'description'   => 'Medical Microbiology and Virology'
            ],

            [
                'id'            => '78',
                'code'          => '833',
                'description'   => 'Medical Microbiology'
            ],

            [
                'id'            => '79',
                'code'          => '834',
                'description'   => 'Medical Virology'
            ],

            [
                'id'            => '80',
                'code'          => '900',
                'description'   => 'Community Medicine'
            ],

            [
                'id'            => '81',
                'code'          => '901',
                'description'   => 'Occupational Medicine'
            ],

            [
                'id'            => '82',
                'code'          => '902',
                'description'   => 'Community Health Services Dental'
            ],

            [
                'id'            => '83',
                'code'          => '903',
                'description'   => 'Public Health Medicine'
            ],

            [
                'id'            => '84',
                'code'          => '904',
                'description'   => 'Public Health Dental'
            ],

            [
                'id'            => '85',
                'code'          => '960',
                'description'   => 'Allied Health Professional'
            ],
        ]);
    }
}
