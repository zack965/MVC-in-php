<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;
    protected $fillable = [
        "user_first_name",
        "user_last_name",
        "user_email",
        "user_password",
    ];
    public $timestamps = false;
}