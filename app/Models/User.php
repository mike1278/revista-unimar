<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','lastname', 'email', 'password','role_id'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['is_admin'];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }

    public function getIsAdminAttribute(){
        return $this->role_id==1;
    }
}