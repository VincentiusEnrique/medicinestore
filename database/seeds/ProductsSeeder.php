<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.

     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Panadol',
            'product_price' => 50000,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'product_name' => 'Siladex',
            'product_price' => 18000,
            'category_id' => 1,
        ]);
    }
}
