<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag', 'title', 'subtitle', 'page_image', 'meta_description', 'reverse_direction'];

    public function posts()
    {
        return $this->belongsToMany('App\Post', 'post_tag_pivot');
    }

    public static function addNeededTag(array $tags)
    {
        if(count($tags) === 0){
            return;
        }

        $found = static::whereIn('tag',$tags)->lists('tag')->all();

        foreach(array_diff($tags, $found) as $tag){
            static::create([
                'tag' => $tag,
                'title' => $tag,
                'subtitle' => 'Subtitle for '.$tag,
                'page_image' => '',
                'meta_description' => '',
                'reverse_direction' => false
            ]);
        }
    }

    /**
     * Return the index layout to use for a tag
     * @param $tag
     * @param string $default
     */
    public static function layout($tag, $default = 'blog.layouts.index')
    {
        $layout = static::whereTag($tag)->pluck('layout');
        return $layout ?: $default;
    }
}