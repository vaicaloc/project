<?php 
namespace App\lesson\lesson1;

use Exception;
use App\lesson\lesson1\Operator;

class Division implements Operator
{
	public function run($number1, $number2)
	{
		if($number2 == 0)
		{
			throw new Exception('Division by zero.');
		}
		return $number1 / $number2;
	}
}