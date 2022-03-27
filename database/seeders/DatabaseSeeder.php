<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);
        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);
        Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);
        Category::create([
            'name' => 'Supranatural',
            'slug' => 'supranatural'
        ]);
        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);
        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);
    }
}
