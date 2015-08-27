<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Zachs list of pages
         */
        DB::table('pages')->insert([
            'title' => 'Zachary Hallett',
            'slug' => 'index',
        ]);
        DB::table('pages')->insert([
            'title' => 'Clips & Stuff',
            'slug' => 'clips-and-stuff',
        ]);
        DB::table('pages')->insert([
            'title' => 'Recent news',
            'slug' => 'news',
        ]);

        DB::table('pages')->insert([
            'title' => 'resume',
            'slug' => 'resume',
        ]);

        DB::table('pages')->insert([
            'title' => 'Gallery',
            'slug' => 'gallery',
        ]);

        DB::table('pages')->insert([
            'title' => 'Contact',
            'slug' => 'contact',
        ]);

        /**
         * Jenn McHughs
         */
//        DB::table('pages')->insert([
//            'title' => 'Jenn McHugh',
//            'slug' => 'index',
//        ]);
//        DB::table('pages')->insert([
//            'title' => 'Works',
//            'slug' => 'works',
//        ]);
//        DB::table('pages')->insert([
//            'title' => 'About',
//            'slug' => 'about',
//        ]);
//
//        DB::table('pages')->insert([
//            'title' => 'resume',
//            'slug' => 'resume',
//        ]);
//
//        DB::table('pages')->insert([
//            'title' => 'Contact',
//            'slug' => 'contact',
//        ]);
//
    }
}
