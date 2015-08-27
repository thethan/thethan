<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Work extends Model
{
    protected $dates = ['date'];

    protected $fillable = ['title', 'content_raw','is_draft', 'date'];



    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
    }



    public function setContentRawAttribute($value)
    {
        $markdown = new Markdowner();
        $this->attributes['content_raw'] = $value;
        $this->attributes['content_html'] = $markdown->toHTML($value);
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


    public function showWorks(){
        $query = static::where('is_draft', 0)
            ->orderBy('date', 'desc');

        return $query->get();
    }



}
