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
        DB::table('categories')->insert(['category_name' => 'ANALGESIK NARKOTIK']);
        DB::table('categories')->insert(['category_name' => 'ANALGESIK NON NARKOTIK']);
        DB::table('categories')->insert([
            'category_name' => 'ANESTETIK LOKAL',
            'description' => 'melakukan anestesi pada bagian tubuh tertentu, bukan untuk seluruh tubuh'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'ANESTETIK UMUM dan OKSIGEN',
            'description' => 'melakukan anestesi pada seluruh tubuh dan tabung gas oksigen, untuk operasi'
        ]);    
    }
}
