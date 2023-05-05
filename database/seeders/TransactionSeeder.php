<?php

namespace Database\Seeders;

use App\Models\Coffee;
use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaction_details = [
                [
                    "user_id"=> 1,
                    "coffee_id" => 2,
                    "created_at" => new \DateTime("2023-03-19"),
                    "updated_at" => new \DateTime("2023-03-19")
                ],
                [
                    "user_id"=> 1,
                    "coffee_id" => 5,
                    "created_at" => new \DateTime("2023-03-20"),
                    "updated_at" => new \DateTime("2023-03-20")
                ],
                [
                    "user_id"=> 1,
                    "coffee_id" => 8,
                    "created_at" => new \DateTime("2023-03-21"),
                    "updated_at" => new \DateTime("2023-03-21")
                ],

                [
                    "user_id"=> 2,
                    "coffee_id" => 3,
                    "created_at" => new \DateTime("2023-03-18"),
                    "updated_at" => new \DateTime("2023-03-18")
                ],
                [
                    "user_id"=> 2,
                    "coffee_id" => 4,
                    "created_at" => new \DateTime("2023-03-19"),
                    "updated_at" => new \DateTime("2023-03-19")
                ],
                [
                    "user_id"=> 2,
                    "coffee_id" => 7,
                    "created_at" => new \DateTime("2023-03-21"),
                    "updated_at" => new \DateTime("2023-03-21")
                ],
            ];

        foreach($transaction_details as $transaction){
            Transaction::create(
                [
                    "user_id"=> $transaction['user_id'],
                    "coffee_id"=> $transaction['coffee_id'],
                    "created_at"=> $transaction['created_at'],
                    "updated_at"=> $transaction['updated_at'],
                ]
            );
        }
    }
}
