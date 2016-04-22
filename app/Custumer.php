<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custumer extends Model
{
    
    protected $table = 'custumer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'email', 'user_level' ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

    public $timestamps = false;
}
