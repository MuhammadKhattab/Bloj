<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdatePasswordRequest extends Request
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
          'oldPassword' => ['required'],
          'newPassword'   => ['required','min:6','confirmed',
          'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/']
          // Contain at least one uppercase/lowercase letters and one number
        ];
    }
}
