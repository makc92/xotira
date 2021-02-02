<?php

use Illuminate\Database\Seeder;

class AdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adverts')->delete();
        DB::table('advert_translations')->delete();
        for ($i = 1; $i <= 20; $i++) {
            $faker = Faker\Factory::create();
            $title = $faker->sentence(6, true);
            factory(\App\Models\Advert::class, 1)->create([
                'title:ru'  =>  "$title",
                'slug:ru'  =>  Str::slug($title),
                'content:ru' => $faker->realText($maxNbChars = 10000, $indexSize = 1)  ,

                'title:uz'  =>  "$title",
                'slug:uz'  =>   Str::slug($title),
                'content:uz' => $faker->realText($maxNbChars = 10000, $indexSize = 2)  ,

                'title:oz'  =>  "$title",
                'slug:oz'  =>   Str::slug($title),
                'content:oz' => $faker->realText($maxNbChars = 10000, $indexSize = 2)  ,

                'title:en'  =>  "$title",
                'slug:en'  =>   Str::slug($title),
                'content:en' => $faker->realText($maxNbChars = 10000, $indexSize = 3)   ,
            ]);
        }
    }
}
