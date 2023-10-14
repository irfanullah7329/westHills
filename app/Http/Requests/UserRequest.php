<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            
            'email' => 'email|unique:tblusers,email,'.request('email').',UserId',
            'FirstName' => 'required|min:3|max:30',
            'password' => ['required','min:3','max:40']           
        ];
    }
    
    protected function getUpdateRules()
    {
        return [
            'email' => ['email', 'nullable', 'unique:tblusers,UserId,'.$this->route('id').',UserId'],
            'FirstName' => 'required|min:3|max:30',
            'password' => ['min:3','max:40','nullable']
        ];
    }
}
