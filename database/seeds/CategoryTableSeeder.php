<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     *  Seed the Categories Category
     */
    public function run()
    {
       // Category::truncate();

        factory(Category::class,4)->create();
    }

}