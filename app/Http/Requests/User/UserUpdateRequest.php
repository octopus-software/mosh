<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'position_id' => ['required','exists:positions,id'],
            'firstname' => ['required','string'],
            'lastname' => ['required','string'],
            'nickname' => ['required','string'],
            'gender' => ['required','integer'],
            'birthday' => ['required','date'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'staff_code'=> ['required','string'],
            'profile_image_url' => ['nullable','active_url'],
            'password'=> ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'position_id.required' => '役職を選択してください',
            'firstname.required' => '名前を入力してください',
            'firstname.string' => '名前を文字列で入力してください',
            'lastname.required' => '苗字を入力してください',
            'lastname.string' => '苗字を文字列で入力してください',
            'nickname.required' => 'ニックネームを入力してください',
            'nickname.string' => 'ニックネームは文字列で入力してください',
            'gender.required' => '性別を選択してください',
            'birthday.required' => '生年月日を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'staff_code.required' => 'メールアドレスを入力してください',
            'password.required' => 'パスワードを入力してください'
        ];
    }
}
