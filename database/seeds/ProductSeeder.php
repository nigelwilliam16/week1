<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'fentanil',
            'product_price' => 5000,
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'product_name' => 'kodein',
            'product_price' => 8000,
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'product_name' => 'ibuprofen',
            'product_price' => 4000,
            'category_id' => 2
        ]);
        DB::table('products')->insert([
            'product_name' => 'parasetamol',
            'product_price' => 2000,
            'category_id' => 2
        ]);
        DB::table('products')->insert([
            'product_name' => 'bupivakain',
            'product_price' => 1000000,
            'form' => 'inject 0,5%',
            'formula' => '-',
            'description' => 'anestesi lokal yang digunakan untuk operasi kecil, seperti bedah mulut',
            'faskes_2' => true,
            'faskes_3' => true,
            'category_id' => 3
        ]);
        DB::table('products')->insert([
            'product_name' => 'etil klorida',
            'product_price' => 500000,
            'form' => 'spray 100 mL',
            'formula' => '-',
            'description' => 'anestesi lokal untuk mengontrol rasa nyeri terkait suntikan',
            'faskes_1' => true,
            'faskes_2' => true,
            'faskes_3' => true,
            'category_id' => 3
        ]);
        DB::table('products')->insert([
            'product_name' => 'deksmedetomidin',
            'product_price' => 5000000,
            'form' => 'inject 100 mcg/mL',
            'formula' => '-',
            'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'faskes_2' => true,
            'faskes_3' => true,
            'category_id' => 4
        ]);
        DB::table('products')->insert([
            'product_name' => 'tiopental',
            'product_price' => 700000,
            'form' => 'inject 500 mg',
            'formula' => '-',
            'description' => 'anestesi umum yang digunakan melalui suntikan, tiponental digunakan untuk sebelum operasi, menangani kejang, dan menurunkan tekanan intrakranial',
            'faskes_2' => true,
            'faskes_3' => true,
            'category_id' => 4
        ]);
    }
}
