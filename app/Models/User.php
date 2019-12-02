<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'cpf', 'phone',
    ];

    public function rules()
    {
        return [
            'name' => 'required',
            'cpf' => 'bail|required|max:11|min:11|unique:users',
            'phone' => 'required||max:11|min:11|unique:users',
        ];
    }


}
