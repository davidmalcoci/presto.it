<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
            'title'=>'required|max:100',
            'description'=>'required|min:5|max:120',
            'price'=>'required'
            
        ];

    }

    public function messages()
    {
    return [
        'title.required' => 'Il titolo è obbligatorio!',
        'title.max' => 'Il titolo è troppo lungo',
        'description.required' => 'La descrizione è obbligatoria!',
        'description.min' => 'La descrizione è troppo corta',
        'description.max' => 'La descrizione è troppo lunga',
        'price.required' => 'Il prezzo è obbligatorio!'
        
    ];
    }

}
