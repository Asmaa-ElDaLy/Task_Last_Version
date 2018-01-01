<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
            'type' => 'Normal'
        ]);
        $category->save();

        $category = new \App\Category([
            'type' => 'Sale'
        ]);
        $category->save();
    }
}
