<?php

namespace App\Http\Requests;

class ProductUpdateRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Gate::allows('update-product', Auth::user())) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'unique:products,name',
            'description' => 'between:50,1000',
            'price' => 'bail|between:1,10000|numeric',
            'sale_price' => 'bail|between:1,10000|numeric',
            'img_name' => 'image'
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
