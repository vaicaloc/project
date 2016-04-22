<?php
namespace App\lesson\lesson2;

use App\lesson\lesson2\Converter;

class UppercaseService implements Converter 
{
    public function convert($username)
    {
        return ucfirst($username);      
    }
}