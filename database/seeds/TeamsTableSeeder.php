<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();
        DB::table('team_translations')->delete();
        for ($i = 1; $i <= 4; $i++) {
            $faker = Faker\Factory::create();
            $name = $faker->name;
            factory(\App\Models\Team::class, 1)->create([
                'name:ru'  =>  "$name",
                'slug:ru'  =>  Str::slug($name),
                'position:ru' => $faker->jobTitle,
                'bio:ru' => $faker->realText($maxNbChars = 100, $indexSize = 1),
                'days:ru' => $faker->realText($maxNbChars = 100, $indexSize = 1),
                'activity:ru' => $faker->realText($maxNbChars = 200, $indexSize = 1),

                'name:uz'  =>  "$name",
                'slug:uz'  =>   Str::slug($name),
                'position:uz' => $faker->jobTitle,
                'bio:uz' => $faker->realText($maxNbChars = 100, $indexSize = 1),
                'days:uz' => $faker->realText($maxNbChars = 100, $indexSize = 1),
                'activity:uz' => $faker->realText($maxNbChars = 200, $indexSize = 1),

                'name:oz'  =>  "$name",
                'slug:oz'  =>   Str::slug($name),
                'position:oz' => $faker->jobTitle,
                'bio:oz' => $faker->realText($maxNbChars = 100, $indexSize = 1),
                'days:oz' => $faker->realText($maxNbChars = 100, $indexSize = 1),
                'activity:oz' => $faker->realText($maxNbChars = 200, $indexSize = 1),

                'name:en'  =>  "$name",
                'slug:en'  =>   Str::slug($name),
                'position:en' => $faker->jobTitle,
                'bio:en' => $faker->realText($maxNbChars = 100, $indexSize = 1),
                'days:en' => $faker->realText($maxNbChars = 100, $indexSize = 1),
                'activity:en' => $faker->realText($maxNbChars = 200, $indexSize = 1),
            ]);
        }
    }
}
