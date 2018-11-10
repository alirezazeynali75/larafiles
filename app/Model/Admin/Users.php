<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Users extends Model

{
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $table = 'users';

    protected $hidden = [
        'remember_token','password',
    ];

    public function setPasswordAttribute($value)
    {

        $this->attributes['password'] = bcrypt($value);

    }

}
