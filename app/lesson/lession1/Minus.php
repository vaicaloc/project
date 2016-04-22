<?php 
namespace App\lesson\lesson1;

use App\lesson\lesson1\Operator;

class Minus implements Operator
{

	public function run($number1, $number2)
	{
		return $number1 - $number2;
	}
}