<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('categories')->insert([
            'name' => 'ANTIEPILEPSI - ANTIKONVULSI',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'EKSPEKTORAN',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'OBAT untuk PENYAKIT PARU OBSTRUKSI KRONIS',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'OBAT UNTUK SALURAN KEMIH',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANESTETIK UMUM dan OKSIGEN',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'VAKSIN',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'OBAT untuk TELINGA, HIDUNG, dan TENGGOROK',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'VITAMIN dan MINERAL',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'OBAT yang MEMENGARUHI STRUKTUR dan MINERALISASI TULANG',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTELMINTIK INTESTINAL',
            'description' => ''           
        ]);
    }
}
