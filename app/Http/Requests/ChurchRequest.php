<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChurchRequest extends FormRequest
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
            
            'ChurchName' => 'required|min:3|max:65'          
        ];
    }
    
    protected function getUpdateRules()
    {
        return [
            'ChurchName' => 'required|min:3|max:65'
        ];
    }
}
