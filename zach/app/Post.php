<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //
    protected $dates = ['published_at'];

    protected $fillable = ['title', 'subtitle', 'content_raw', 'page_image', 'category_id','meta_description', 'layout', 'is_draft', 'published_at'];


    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag_pivot');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (!$this->exists) {
            $this->setUniqueSlug($value, '');
        }
    }

    protected function setUniqueSlug($title, $extra)
    {
        $slug = str_slug($title . '-' . $extra);

        if (static::whereSlug($slug)->exists()) {
            $this->setUniqueSlug($title, $extra + 1);
            return;
        }

        $this->attributes['slug'] = $slug;
    }

    public function setContentRawAttribute($value)
    {
        $markdown = new Markdowner();
        $this->attributes['content_raw'] = $value;
        $this->attributes['content_html'] = $markdown->toHTML($value);
    }

    public function syncTags(array $tags)
    {
        Tag::addNeededTag($tags);

        if (count($tags)) {
            $this->tags()->sync(
                Tag::whereIn('tag', $tags)->lists('id')->all()
            );
            return;
        }

        $this->tags()->detach();
    }

    public function syncCategory($category)
    {
        Category::whereIn('category',$category)->lists()->all();
        $this->category()->attach();
    }
    /**
     * Return the fate portion of published_at
     */
    public function getPublishedDateAttribute($value)
    {
        return $this->published_at->format('M-j-Y');
    }

    /**
     * Return the time portion of published_at
     */
    public function getPublishedTimeAttribute($value)
    {
        return $this->published_at->format('g:i A');
    }

    /**
     * Alias for content raw
     */
    public function getContentAttribute($value){
        return $this->content_raw;
    }

    /**
     * Return URL to post
     *
     */
    public function url(Tag $tag = null)
    {
        $url = url('blog/'.$this->slug);
        if($tag){
            $url .= '?tag='.urlencode($tag->tag);
        }
        return $url;
    }

    public function categoryUrl(Category $category = null){
        $url = url('blog/'.$this->slug);
        if($category){
            $url .= '?category='.urlencode($category->category);
        }
        return $url;
    }

    /**
     * Return the Array of tag links
     */
    public function tagLinks($base = '/blog?tag=%TAG%')
    {
        $tags = $this->tags()->lists('tag');
        $return = [];
        foreach($tags as $tag) {
            $url = str_replace('%TAG%',urlencode($tag),$base);
            $return[] = '<a href="'.$url.'">'.e($tag).'</a>';
        }
        return $return;
    }

    public function newerPost(Tag $tag = null)
    {
        $query = static::where('published_at', '>', $this->published_at)
            ->where('published_at', '<=', Carbon::now())
            ->where('is_draft', 0)
            ->orderBy('published_at', 'asc');
        if($tag) {
            $query = $query->whereHas('tags', function($q) use ($tag){
                $q->where('tag', '=', $tag->tag);
            });
        }
        return $query->first();
    }

    public function olderPost(Tag $tag = null)
    {
        $query =  static::where('published_at', '<', $this->published_at)
            ->where('is_draft',0)
            ->orderBy('published_at', 'desc');
        if($tag) {
            $query = $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('tag', '=', $tag->tag);
            });
        }
//        var_dump($query->first());
//        exit;
        return $query->first();

    }
}
