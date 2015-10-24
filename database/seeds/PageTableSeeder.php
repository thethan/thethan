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
       // $time = new \Faker\Provider\DateTime();
        /**
         * Zachs list of pages
         */
        DB::table('pages')->insert([
            'title' => 'Zachary Hallett',
            'slug' => 'index',
            'subtitle' => 'acting!!!',
            'page_image' => 'zach_main',
            'is_draft' => '0',
            'meta_description' => '',
            'published_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ]);
        DB::table('pages')->insert([
            'title' => 'Clips & Stuff',
            'slug' => 'clips-and-stuff',
            'subtitle' => 'acting!!!',
            'page_image' => 'zach_main',
            'is_draft' => '0',
            'meta_description' => '',
            'published_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ]);
        DB::table('pages')->insert([
            'title' => 'Recent news',
            'slug' => 'news',
            'subtitle' => 'acting!!!',
            'page_image' => 'zach_main',
            'is_draft' => '0',
            'meta_description' => '',
            'published_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ]);

        DB::table('pages')->insert([
            'title' => 'resume',
            'slug' => 'resume',
            'subtitle' => 'acting!!!',
            'page_image' => 'zach_main',
            'is_draft' => '0',
            'meta_description' => '',
            'published_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ]);

        DB::table('pages')->insert([
            'title' => 'Gallery',
            'slug' => 'gallery',
            'page_image' => 'zach_main',
            'subtitle' => 'acting!!!',
            'is_draft' => '0',
            'meta_description' => '',
            'published_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ]);

        DB::table('pages')->insert([
            'title' => 'Contact',
            'slug' => 'contact',
            'subtitle' => 'acting!!!',
            'page_image' => 'zach_main',
            'is_draft' => '0',
            'meta_description' => '',
            'published_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

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
