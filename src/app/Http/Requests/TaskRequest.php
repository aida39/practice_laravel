<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'name'=>'required',
            'detail'=>'required',
            'deadline'=>'date',
            'remark'=>'nullable'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => '登録者名を入力してください',
            'detail.required'=>'内容を入力してください',
            'deadline.date'=>'期限を指定してください',
            'remark.required'=>'備考を入力してください',
        ];
    }
}
