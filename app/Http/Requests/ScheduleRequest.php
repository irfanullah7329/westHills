<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
        return $this->getRules();
    }

    protected function getRules()
    {
        switch ($this->method()) {
            case 'PUT':
                return $this->getUpdateRules();
                break;
            default:
                return $this->getAddRules();
                break;
        }
    }

    protected function getAddRules()
    {
        return [
            
            'ScheduleEventName' => 'required|min:2|max:30',
            'ScheduleEventDate' => 'required',
            'ScheduleEventDay' => 'required'           
        ];
    }
    protected function getUpdateRules()
    {
        return [
            'ScheduleEventName' => 'required|min:2|max:30',
            'ScheduleEventDate' => 'required',
            'ScheduleEventDay' => 'required'
        ];
    }
}
