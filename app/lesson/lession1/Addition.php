<?php 
namespace App\lesson\lesson1;

use App\lesson\lesson1\Operator;

class Addition implements Operator
{

	public function run($number1, $number2)
	{
		return $number1 + $number2;
	}
}