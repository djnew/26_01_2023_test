<?php

namespace App\Http\Requests;

use App\Http\Requests\Base\IHasCollectionDTO;
use App\Models\DTO\UserSettingDTO;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Collection;

class UserChangeSettingsRequest extends FormRequest implements IHasCollectionDTO
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

    /**
     * @return Collection<UserSettingDTO>
     */
    public function toDTO(): Collection
    {
        // TODO: Implement toDTO() method.
    }
}
