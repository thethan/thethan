<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['category', 'title', 'subtitle', 'page_image', 'meta_description', 'reverse_direction'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public static function addNeededTag(array $categories)
    {
        if(count($categories) === 0){
            return;
        }

        $found = static::whereIn('category',$categories)->lists('category')->all();

        foreach(array_diff($categories, $found) as $category){
            static::create([
                'category' => $category,
                'title' => $category,
                'subtitle' => 'Subtitle for '.$category,
                'page_image' => '',
                'meta_description' => '',
                'reverse_direction' => false
            ]);
        }
    }

    /**
     * Return the index layout to use for a category
     * @param $tag
     * @param string $default
     */
    public static function layout($category, $default = 'blog.layouts.index')
    {
        $layout = static::whereCategory($category)->pluck('layout');
        return $layout ?: $default;
    }
}
