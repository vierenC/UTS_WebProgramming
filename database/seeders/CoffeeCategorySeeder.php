<?php

namespace Database\Seeders;

use App\Models\Coffee;
use App\Models\CoffeeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoffeeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffe_categories = [
            ['name' => 'Espresso'],
            ['name' => 'Brewed'],
            ['name' => 'Blended'],
            ['name' => 'Others'],
        ];

        foreach($coffe_categories as $cat){
            CoffeeCategory::create(
                [
                    "name"=> $cat['name'],
                ]
            );
        }
    }
}
