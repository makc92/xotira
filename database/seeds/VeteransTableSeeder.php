<?php

use Illuminate\Database\Seeder;

class VeteransTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veterans')->delete();
        DB::table('veteran_translations')->delete();

        for ($i = 1; $i <= 5000; $i++) {
            $faker = Faker\Factory::create();
            $name = $faker->name;
            $description = $faker->text;
            factory(\App\Models\Veteran::class, 1)->create([
                'name:uz'  =>  "$name uz",
                'slug:uz'  =>  Str::slug($name. 'uz'),
                'description:uz'  =>  "$description uz",

                'name:oz'  =>  "$name oz",
                'slug:oz'  =>  Str::slug($name. 'oz'),
                'description:oz'  =>  "$description oz",

                'name:ru'  =>  "$name ru",
                'slug:ru'  =>  Str::slug($name. 'ru'),
                'description:ru'  =>  "$description ru",

                'name:en'  =>  "$name en",
                'slug:en'  =>  Str::slug($name. 'en'),
                'description:en'  =>  "$description en",
            ]);
        }
    }
}
