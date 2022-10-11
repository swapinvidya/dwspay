<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Bavix\Wallet\Traits\CanPay;
use Bavix\Wallet\Interfaces\Customer;
use App\Traits\RecordsActivity;
use App\Models\userDetail;



class User extends Authenticatable implements Customer
{
    use HasApiTokens, HasFactory, Notifiable, CanPay;
    use RecordsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsTo(Userrole::class,'role_id');
    }

    public function getUserDetails()
    {
        return $this->hasOne(userDetail::class);
    }

    public function kycDetails(){
        return $this->hasOne(kyc::class);
    }
}
