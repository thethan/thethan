<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        $tags = Tag::lists('tag')->all();
        //Post::Truncate();

        DB::table('post_tag_pivot')->truncate();

        factory(Post::class, 60)->create()->each(function ($post) use ($tags) {
            if(mt_rand(1,100) <= 10){
                return;
            }
            shuffle($tags);
            $postTags = [$tags[0]];

            if(mt_rand(1,100) <= 18){
               $postTags[]  = $tags[1];
            }
            $post->syncTags($postTags);
        });
    }

}