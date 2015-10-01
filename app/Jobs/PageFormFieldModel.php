<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Page;
use App\Category;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;

class PageFormFieldModel extends Job implements SelfHandling
{protected $id;
    /**
     * @var array
     */
    protected $fieldList = [
        'title' => '',
        'subtitle' => '',
        'category_id' => '',
        'content' => '',
        'meta_description' => '',
        'page_image' => '',
        'is_draft' => "0",
        'published_date' => '',
        'published_time' => '',
        'layout' => 'site.layouts.page',
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
     * Execute the job
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
        return array_merge($fields, ['categories' => Category::all()]);

    }

    protected function fieldsFromModel($id, array $fields)
    {
        $page = Page::findOrFail($id);

        $fieldNames = array_keys($fields);

        $fields = [$id => $id];

        foreach ($fieldNames as $field){
            $fields[$field] = $page->{$field};
        }

        return $fields;
    }
}
