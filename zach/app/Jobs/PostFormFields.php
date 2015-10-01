<?php

namespace App\Jobs;

use App\Post;
use App\Tag;
use App\Category;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;

class PostFormFields extends Job implements SelfHandling
{
    protected $id;
    /**
     * @var array
     */
    protected $fieldList = [
        'title' => '',
        'subtitle' => '',
        'page_image' => '',
        'category_id' => '',
        'content' => '',
        'meta_description' => '',
        'is_draft' => "0",
        'published_date' => '',
        'published_time' => '',
        'layout' => 'blog.layouts.post',
        'tags' => [],

    ];
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fields = $this->fieldList;

        if($this->id){
            $fields = $this->fieldsFromModel($this->id, $fields);
        } else {
            $when = Carbon::now()->addHour();
            $fields['published_date'] = $when->format('M-j-Y');
            $fields['published_time'] = $when->format('g:i A');
        }

        foreach ($fields as $fieldName => $fieldValue){
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }
        $fields['id'] = $this->id;
        return array_merge($fields, ['allTags' => Tag::lists('tag')->all(), 'categories' => Category::all()]);

    }

    /**
     * Return the field values from the model
     * @param $id
     * @param array $fields
     */
    protected function fieldsFromModel($id, array $fields)
    {
        $post = Post::findOrFail($id);

        $fieldNames = array_keys(array_except($fields, ['tags']));

        $fields = [$id => $id];

        foreach ($fieldNames as $field){
            $fields[$field] = $post->{$field};
        }

        //$fields['category_id'] = $post->category();
        $fields['tags'] = $post->tags()->lists('tag')->all();

        return $fields;
    }
}
