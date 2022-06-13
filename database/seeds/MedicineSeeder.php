<?php

use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5 amp/kasus.',
            'description' => 'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10,
            'image' => '',
            'price'=>30000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'hidromorfon',
            'form' => 'tab lepas lambat 8 mg',
            'restriction_formula' => '30 tab/bulan',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10,
            'image' => '',
            'price'=>29000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'kodein',
            'form' => 'tab 10 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10,
            'image' =>'',
            'price'=>28000,
        ]);

        
        DB::table('medicines')->insert([
            'generic_name' => 'risedronat',
            'form' => ' tab sal selaput 35 mg',
            'restriction_formula' => '4 tab/bulan',
            'description' => 'Pasien dengan osteoporosis, hasil 
                                pemeriksaan BMD DXA, T score 
                                < -2,5 (bukan BMD ultrasound) 
                                dengan riwayat fraktur dalam 6 
                                bulan terakhir',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
            'category_id' => 9,
            'image' =>'',
            'price'=>27000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'asam zoledronat*',
            'form' => 'inf 5 mg/100 mL',
            'restriction_formula' => '',
            'description' => 'Pasien dengan osteoporosis, 
            hasil pemeriksaan BMD 
            DXA, T score < -2,5 (bukan 
            BMD ultrasound)',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
            'category_id' => 9,
            'image' =>'',
            'price'=>26000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'alendronat',
            'form' => 'tab 70 mg',
            'restriction_formula' => '4 tab/bulan.',
            'description' => 'Pasien dengan osteoporosis, hasil 
            pemeriksaan BMD DXA, T score 
            < -2,5 (bukan BMD ultrasound) 
            dengan riwayat fraktur dalam 6 
            bulan terakhir',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
            'category_id' => 9,
            'image' =>'',
            'price'=>25000,
        ]);

      
        DB::table('medicines')->insert([
            'generic_name' => 'garam Fe',
            'form' => 'setara dengan Fe elemental 60 
            mg.',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8,
            'image' =>'',
            'price'=>24000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'ergokalsiferol (vitamin D2)',
            'form' => 'kaps 50.000 IU',
            'restriction_formula' => '',
            'description' => 'Hanya untuk penyakit ginjal kronis 
            grade 5 ke atas atau pasien 
            hipoparatiroid pemeriksaan kadar 
            kalsium ion 1,1 - 2,5 mmol.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8,
            'image' =>'',
            'price'=>23000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'asam askorbat (vitamin C)',
            'form' => 'tab 50 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8,
            'image' =>'',
            'price'=>22000,
        ]);

    
        DB::table('medicines')->insert([
            'generic_name' => 'hidrogen peroksida',
            'form' => 'cairan 3%',
            'restriction_formula' => '',
            'description' => 'Disimpan dalam botol kedap 
            udara, terlindung dari cahaya.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7,
            'image' =>'',
            'price'=>21000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'flutikason furoat',
            'form' => 'susp 27,5 mcg/spray',
            'restriction_formula' => '1 btl/bulan.',
            'description' => 'Pemberian hanya pada pagi hari 
            dengan dosis 1 kali sehari.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7,
            'image' =>'',
            'price'=>20000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'asam asetat',
            'form' => 'tts telinga 2%',
            'restriction_formula' => '',
            'description' => 'dibuat baru, recenter 
            paratus (r.p.)',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7,
            'image' =>'',
            'price'=>19000,
        ]);

    
        DB::table('medicines')->insert([
            'generic_name' => 'vaksin hepatitis B rekombinan',
            'form' => 'Prefilled Injection Device (Uniject) 
            (i.m)',
            'restriction_formula' => '',
            'description' => 'Diberikan pada bayi < 24 jam 
            pascalahir dengan didahului 
            suntikan vitamin K1 2-3 jam 
            sebelumnya.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6,
            'image' =>'',
            'price'=>18000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'vaksin DPT-HB-Hib',
            'form' => 'inj (i.m.)',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6,
            'image' =>'',
            'price'=>17000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'vaksin BCG',
            'form' => 'serb inj 0,75 mg/mL + pelarut 
            (i.k.)',
            'restriction_formula' => '',
            'description' => 'Disediakan oleh Program Kemenkes.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6,
            'image' =>'',
            'price'=>16000,
        ]);

 
        DB::table('medicines')->insert([
            'generic_name' => 'deksmedetomidin',
            'form' => 'inj 100 mcg/mL',
            'restriction_formula' => '',
            'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5,
            'image' =>'',
            'price'=>15000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'desfluran',
            'form' => 'ih',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5,
            'image' =>'',
            'price'=>14000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'oksigen',
            'form' => 'ih, gas dalam tabung',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5,
            'image' =>'',
            'price'=>13000,
        ]);

      
        DB::table('medicines')->insert([
            'generic_name' => 'imunoglobulin intravena',
            'form' => 'inj 50 mg/mL',
            'restriction_formula' => '40 amp/kasus.',
            'description' => ' Hanya digunakan apabila syarat 
            untuk plasmaferesis tidak 
            terpenuhi pada terapi:
            - Guillain–Barré syndrome (GBS).
            - Krisis miastenia.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 0,
            'faskes_tk3' => 1,
            'category_id' => 5,
            'image' =>'',
            'price'=>12000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'human tetanus imunoglobulin',
            'form' => 'inj 250 IU (i.m.) ',
            'restriction_formula' => '',
            'description' => 'Luka baru terkontaminasi pada 
            pasien dengan riwayat vaksinasi 
            tetanus yang tidak 
            diketahui/tidak lengkap.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5,
            'image' =>'',
            'price'=>11000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'hepatitis B imunoglobulin (human)',
            'form' => 'inj 150 IU/1,5 mL',
            'restriction_formula' => '1 syringe/kasus.',
            'description' => 'Untuk bayi baru lahir dengan ibu 
            HBsAg positif.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5,
            'image' =>'',
            'price'=>10000,
        ]);

      
        DB::table('medicines')->insert([
            'generic_name' => 'ipratropium bromida',
            'form' => 'aerosol 0,02 mg/dosis*',
            'restriction_formula' => 'aerosol 0,02 mg/dosis*',
            'description' => 'Untuk pasien PPOK dengan 
            eksaserbasi akut. 
            ',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3,
            'image' =>'',
            'price'=>9000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'indakaterol*',
            'form' => 'indakaterol*',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 0,
            'category_id' => 3,
            'image' =>'',
            'price'=>8000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'glikopironium ',
            'form' => 'serb ih 50 mcg',
            'restriction_formula' => '30 kaps 
            inhalasi/bulan',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3,
            'image' =>'',
            'price'=>7000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'mebendazol',
            'form' => 'tab 400 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2,
            'image' =>'',
            'price'=>6000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'albendazol',
            'form' => 'tab 400 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2,
            'image' =>'',
            'price'=>5000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'prazikuantel',
            'form' => 'tab 600 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2,
            'image' =>'',
            'price'=>4000,
        ]);
        
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'enema 5 mg/2,5 mL',
            'restriction_formula' => '2 tube/hari, bila kejang.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1,
            'image' =>'',
            'price'=>3000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'fenitoin',
            'form' => 'kaps 30 mg*',
            'restriction_formula' => '90 kaps/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1,
            'image' =>'',
            'price'=>2000,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'klonazepam',
            'form' => 'tab 2 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1,
            'image' =>'',
            'price'=>1000,
        ]);
             
    }
}
