<?php 
namespace App\lesson\lesson2;
use App\lesson\lesson2\Greeter;


class English implements Translator
{

	public function translate($username)
	{
		return "hello $username";
	}
}