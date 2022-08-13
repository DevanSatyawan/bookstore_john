<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use App\Models\listbook;
use Faker\Factory as Faker;

class listbookseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
            foreach (range(1,2000)as $value){
            DB::table('listbook')->insert([
                'bookname'=> $faker->word,
                'category_name'=>$faker->word,
                'author_name'=>$faker->name,
                'average_rating'=>null,
                'voter'=>$faker->numberBetween(1, 50000),
    
            ]);
        
        }

        
    }
}
