<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                'title' => 'tashkent',
            ], [
                'title' => 'andijan',
            ], [
                'title' => 'bukhara',
            ], [
                'title' => 'fergana',
            ], [
                'title' => 'jizzakh',
            ], [
                'title' => 'namangan',
            ], [
                'title' => 'navoiy',
            ], [
                'title' => 'qashqadaryo',
            ], [
                'title' => 'samarkand',
            ], [
                'title' => 'sirdaryo',
            ],[
                'title' => 'surhandaryo',
            ], [
                'title' => 'tashkent_region',
            ], [
                'title' => 'xorazm',
            ], [
                'title' => 'qaraqalpakstan',
            ]
        ];

        foreach ($regions as $region) {
            \App\Models\Region::create($region);
        }
    }
}
