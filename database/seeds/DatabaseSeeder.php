<?php

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
         $this->call(UsersTableSeeder::class);
         $this->call(RegionsTableSeeder::class);
         $this->call(VeteransTableSeeder::class);
         $this->call(NewsTableSeeder::class);
         $this->call(BooksTableSeeder::class);
         $this->call(AchievementsTableSeeder::class);
         $this->call(ApplicationsTableSeeder::class);
         $this->call(PhotosTableSeeder::class);
         $this->call(TeamsTableSeeder::class);
         $this->call(AdvertsTableSeeder::class);
    }
}
