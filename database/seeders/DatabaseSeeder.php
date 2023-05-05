<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'=> "Mr. Vico Lomar",
            'loyalty' => "Gold",
            'stars' => 151
        ]);

        User::factory()->create([
            'name'=> "Ms. Fei Fei Li.",
            'loyalty' => "Green",
            'stars' => 27
        ]);

        $this->call([CoffeeCategorySeeder::class, CoffeeSeeder::class, TransactionSeeder::class]);
    }
}
