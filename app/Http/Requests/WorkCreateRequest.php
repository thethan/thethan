<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use App\Http\Requests\Request;

class WorkCreateRequest extends Request
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
            'content' => 'required',
            'date' => 'required',
        ];
    }

    public function workFillData()
    {
        $published_at = new Carbon(
            $this->publish_date.' '.$this->publish_time
        );

        return [
            'title' => $this->title,
            'content_raw' => $this->get('content'),
            'is_draft' => (bool)$this->is_draft,
            'date' => $published_at,
        ];
    }
}
