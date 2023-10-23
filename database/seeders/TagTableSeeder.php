<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = new \App\Tag();
        $tag->name = 'Tutorial';
        $tag->save();

        $tag = new \App\Tag();
        $tag->name = "Industry News";
        $tag->save();
    }
}
