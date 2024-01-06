<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $continents = [
            ['id' => 1, 'name'=>'Africa'],
            ['id' => 2, 'name'=>'Europe'],
            ['id' => 3, 'name'=>'America'],
            ['id' => 4, 'name'=>'Asia'],
        ];

        foreach($continents as $continent){
            Continent::factory()->create($continent)->each(function ($c){
                $c->countries()->saveMany(Country::factory(10)->make());
            });
        }

        Product::factory(50)->create();


    }
}
