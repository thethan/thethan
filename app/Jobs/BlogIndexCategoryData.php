<?php

namespace App\Jobs;

use App\Post;
use App\Category;
use Carbon\Carbon;
use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class BlogIndexCategoryData extends Job implements SelfHandling
{

    protected $category;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->category){
            return $this->categoryIndexData($this->category);
        }
        return $this->normalizeIndexData();
    }

    protected function normalizeIndexData()
    {

        $posts = Post::with('category')
            ->where('published_at', '<=', Carbon::now())
            ->where('is_draft',0)
            ->orderBy('published_at', 'desc')
            ->simplePaginate(config('blog.posts_per_page'));

        return [
            'title' => config('blog.title'),
            'subtitle' => config('blog.subtitle'),
            'posts' => $posts,
            'page_image' => config('blog.page_image'),
            'meta_description' => config('blog.description'),
            'reverse_direction' => false,
            'tag' => null
        ];
    }

    protected function categoryIndexData($category)
    {
        $category = Category::where('category', $category)->firstOrFail();
        $reverse_direction = (bool)$category->reverse_direction;

        $posts = Post::where('published_at','<=', Carbon::now())
            ->whereHas('category', function($q) use ($category){
                $q->where('category', '=', $category->category);
            })
            ->where('is_draft',0)
            ->orderBy('published_at', $reverse_direction ? 'asc':'desc')
            ->simplePaginate(config('blog.posts_per_page'));
        $posts->addQuery('category', $category->category);
        $page_image = $category->page_image ?: config('blog.page_image');

        return [
            'title' => $category->title,
            'subtitle' => $category->subtitle,
            'posts' => $posts,
            'page_image' => $page_image,
            'category' => $category,
            'reverse_direction' => $reverse_direction,
            'meta_description' => $category->meta_description ?: config('blog.description')
        ];
    }

}
