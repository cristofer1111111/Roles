<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'name'=>'Manzana lb',
            'description'=>'Manzana Verde',
            'value'=>'2500'
        ]);
        Product::create([

            'name'=>'Pera lb',
            'description'=>'Pera Americana',
            'value'=>'3500'
        ]);
        Product::create([

            'name'=>'Uvas paquete',
            'description'=>'Uvas Chilenas',
            'value'=>'2000'
        ]);
        Product::create([

            'name'=>'Naranja lb',
            'description'=>'Naranjas Verdes',
            'value'=>'2000'
        ]);
        Product::create([

            'name'=>'kiwi lb',
            'description'=>'Kiwi Importado',
            'value'=>'3500'
        ]);
    }
}
