<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Sms extends Model
{
    protected $fillable = [
        'message', 'user_id',
    ];

    public function rules()
    {
        return [
            'message' => 'required|max:160',
            'user_id' => 'required',
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
