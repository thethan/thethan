<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Carbon\Carbon;

class PageCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'published_date' => 'required',
            'published_time' => 'required',
            'layout' => 'required',
        ];
    }

    public function pageFillData()
    {
        $published_at = new Carbon(
            $this->publish_date.' '.$this->publish_time
        );

        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'category_id' => $this->category_id,
            'content_raw' => $this->get('content'),
            'meta_description' => $this->meta_description,
            'is_draft' => (bool)$this->is_draft,
            'published_at' => $published_at,
            'layout' => $this->layout,
        ];
    }
}
