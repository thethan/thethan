<?php

namespace App\Http\Controllers;

use App\Jobs\BlogIndexData;
use App\Jobs\BlogIndexCategoryData;
use App\Http\Requests;
use App\Post;
use App\Tag;
use App\Work;
use App\Category;
use App\Page;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    //
    public function index(Request $request)
    {
        var_dump('asdfajshfashf');
        $tag = $request->get('tag');
        $data = $this->dispatch(new BlogIndexData($tag));

        $category = $request->get('category');
        $data = $this->dispatch(new BlogIndexCategoryData($category));


        if($category) {
            $layout = $tag ? Tag::layout($tag) : 'blog.layouts.category_index';
        }
        else {
            $layout = $tag ? Tag::layout($tag) : 'blog.layouts.index';
        }

        return view($layout, $data);
    }

    public function showPost($slug, Request $request)
    {
        $post = Post::with('tags')->whereSlug($slug)->firstOrFail();
        $tag = $request->get('tag');
        if($tag){
            $tag = Tag::whereTag($tag)->firstOrFail();
        }


        return view($post->layout, compact('post', 'tag'));
    }

    public function showPages($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();

        return view($page->layout, compact('page'));
    }

    public function showWorks()
    {
        $page = Page::whereSlug('works')->firstOrFail();
        $work = new Work();
        $works = $work->showWorks();
        $meta_description = 'This is my Meta Description';

        return view('site.layouts.works', compact('works', 'page','meta_description'));
    }

    public function showIndex()
    {
        $page = Page::whereSlug('index')->firstOrFail();

        return view('site.layouts.index')->withPage($page);
    }

    public function showContact()
    {
        $page = Page::whereSlug('contact')->firstOrFail();

        return view('site.layouts.contact')->withPage($page);
    }
}
