<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Work;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;

class WorkFormFieldModel extends Job implements SelfHandling
{protected $id;
    /**
     * @var array
     */
    protected $fieldList = [
        'title' => '',
        'content' => '',
        'is_draft' => '',
        'date' => '',
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
        return $fields;

    }

    protected function fieldsFromModel($id, array $fields)
    {
        $work = Work::findOrFail($id);

        $fieldNames = array_keys($fields);

        $fields = [$id => $id];

        foreach ($fieldNames as $field){
            $fields[$field] = $work->{$field};
        }

        //$fields['category_id'] = $post->category();
        return $fields;
    }
}
