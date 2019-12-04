<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PaymentSlip extends Model
{
    protected $fillable = [
        'dueDate', 'value', 'user_id',
    ];

    public function rules()
    {
        return [
            'dueDate' => 'required',
            'value' => 'required',
            'user_id' => 'required',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
