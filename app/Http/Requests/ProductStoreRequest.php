<?php

namespace App\Http\Requests;

class ProductStoreRequest extends BaseFormRequest
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
            'name' => 'bail|unique:products,name|required',
            'description' => 'bail|between:50,1000|required',
            'price' => 'bail|between:1,10000|numeric|required',
            'sale_price' => 'bail|between:1,10000|numeric|required',
            'img_name' => 'bail|image|required'
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'name' => 'trim|escape|strip_tags',
            'description' => 'trim|escape|strip_tags'
        ];
    }
}
