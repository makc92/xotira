<?php

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievements')->delete();
        DB::table('achievement_translations')->delete();
        for ($i = 1; $i <= 20; $i++) {
            $faker = Faker\Factory::create();
            $title = $faker->sentence(6, true);
            factory(Achievement::class, 1)->create([
                'title:uz'  =>  "$title UZ",
                'slug:uz'  =>   Str::slug($title . "UZ"),
                'content:uz' => $faker->realText($maxNbChars = 10000, $indexSize = 2)  ,

                'title:oz'  =>  "$title OZ",
                'slug:oz'  =>   Str::slug($title . "OZ"),
                'content:oz' => $faker->realText($maxNbChars = 10000, $indexSize = 2)  ,

                'title:ru'  =>  "$title RU",
                'slug:ru'  =>  Str::slug($title . "RU"),
                'content:ru' => $faker->realText($maxNbChars = 10000, $indexSize = 1)  ,

                'title:en'  =>  "$title EN",
                'slug:en'  =>   Str::slug($title . "EN"),
                'content:en' => $faker->realText($maxNbChars = 10000, $indexSize = 3)   ,
            ]);
        }
    }
}
