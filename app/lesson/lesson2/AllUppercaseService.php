<?php
/**
 * Created by PhpStorm.
 * User: nhu
 * Date: 4/12/16
 * Time: 5:09 PM
 */

namespace App\lesson\lesson2;

use App\lesson\lesson2\Converter;

class AllUppercaseService implements Converter
{
    public function convert($strConvert)
    {
        return strtoupper($strConvert);
    }
}