<?php

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
        $product = new \App\Product([
            'imagePath' => '/images/IMG-20160926-WA0015.jpg',
            'title' => 'White Dress',
            'description' => 'mmmmm mmmmmmm mmmmmmmm mmmmmm mmmm',
            'price' => 130,
            'cat_type' => 'Sale'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/IMG-20160926-WA0010.jpg',
            'title' => 'Swaree Dress',
            'description' => 'mmmmm mmmmmmm mmmmmmmm mmmmmm mmmm',
            'price' => 300,
            'cat_type' => 'Normal'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/IMG-20160926-WA0012.jpg',
            'title' => 'Pinky jeeb',
            'description' => 'mmmmm mmmmmmm mmmmmmmm mmmmmm mmmm',
            'price' => 100,
            'cat_type' => 'Sale'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/IMG-20160926-WA0016.jpg',
            'title' => 'black Abaya',
            'description' => 'mmmmm mmmmmmm mmmmmmmm mmmmmm mmmm',
            'price' => 700,
            'cat_type' => 'Normal'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/IMG-20160926-WA0013.jpg',
            'title' => 'new style dress',
            'description' => 'mmmmm mmmmmmm mmmmmmmm mmmmmm mmmm',
            'price' => 250,
            'cat_type' => 'Sale'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/IMG-20160926-WA0014.jpg',
            'title' => 'swaree black dress',
            'description' => 'mmmmm mmmmmmm mmmmmmmm mmmmmm mmmm',
            'price' => 400,
            'cat_type' => 'Normal'
        ]);
        $product->save();
    }

}
