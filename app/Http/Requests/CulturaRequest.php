<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
class CulturaRequest extends Request
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

    public function messages()
    {
        return [
        'nome.unique' => 'Já existe uma Cultura com esse nome!',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'nome' => 'required|min:2|unique:culturas',
        ];
    }
}