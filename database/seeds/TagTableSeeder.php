<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     *  Seed the Tags Tabls
     */
    public function run()
    {
        Tag::truncate();

        factory(Tag::class,5)->create();
    }

}