<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffee_details = [
            [
                "name"=>"Caffè Latte",
                "price"=> 48500,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648177502.jpg",
                "category_id"=> 1
            ],
            [
                "name"=>"Cappuccino",
                "price"=> 25000,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648177603.jpg",
                "category_id"=> 1
            ],

            [
                "name"=>"Caffè Mocha",
                "price"=> 27500,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648177734.jpg",
                "category_id"=> 1
            ],
            [
                "name"=>"Caramel Macchiato",
                "price"=> 55000,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648177837.jpg",
                "category_id"=> 1
            ],

            [
                "name"=>"Freshly Brewed Coffee",
                "price"=> 15000,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648178862.jpg",
                "category_id"=> 2
            ],

            [
                "name"=>"Misto",
                "price"=> 27500,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648179252.jpg",
                "category_id"=> 2
            ],
            [
                "name"=>"Cold Brew",
                "price"=> 45000,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648179326.jpg",
                "category_id"=> 2
            ],

            [
                "name"=>"Coffee Frappuccino",
                "price"=> 32500,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648475425.jpg",
                "category_id"=> 3
            ],
            [
                "name"=>"Espresso Frappuccino",
                "price"=> 55000,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648475502.jpg",
                "category_id"=> 3
            ],

            [
                "name"=>"Coffee Frappuccino",
                "price"=> 32500,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648475425.jpg",
                "category_id"=> 3
            ],
            [
                "name"=>"Mocha Frappuccino",
                "price"=> 45000,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648475606.jpg",
                "category_id"=> 3
            ],

            [
                "name"=>"Caramel Frappuccino",
                "price"=> 68200,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648475750.jpg",
                "category_id"=> 3
            ],
            [
                "name"=>"Hazelnut Frappuccino",
                "price"=> 95000,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648475850.jpg",
                "category_id"=> 3
            ],

            [
                "name"=>"Signature Chocolate",
                "price"=> 18200,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648480637.jpg",
                "category_id"=> 4
            ],
            [
                "name"=>"Green Tea Latte",
                "price"=> 32500,
                "source"=>"https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648608894.jpg",
                "category_id"=> 4
            ],
        ];

        foreach($coffee_details as $coffee){
            Coffee::create(
                [
                    "name"=> $coffee['name'],
                    "price"=> $coffee['price'],
                    "source"=> $coffee['source'],
                    "category_id"=>  $coffee['category_id']
                ]
            );
        }
    }
}
