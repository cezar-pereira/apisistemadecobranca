<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Sms;
use App\Models\PaymentSlip;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'cpf', 'phone',
    ];

    public function sms()
    {
        return $this->hasMany(Sms::class, 'user_id','id');
    }

    public function paymentSlip()
    {
        return $this->hasMany(PaymentSlip::class, 'user_id','id');
    }

}
