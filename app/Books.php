<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';

    protected $fillable = ['id', 'title', 'author', 'content', 'image'];

    public $timestamps = false;
}
