<?php

namespace App\Http\Requests;

use App\Base\IDTO;
use App\Http\Requests\Base\IHasDTO;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest implements IHasDTO
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function toDTO(): IDTO
    {
        // TODO: Implement toDTO() method.
    }
}
