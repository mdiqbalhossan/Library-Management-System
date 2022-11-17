<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContracts;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Student extends model implements AuthenticatableContracts,AuthorizableContract
{
    use HasFactory, Authenticatable,Authorizable;

    protected $guard = 'student';

    protected $guarded = [];

    protected $hidden = ['password'];
}
