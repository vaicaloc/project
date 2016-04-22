<?php 
namespace App\lesson\lesson2;
use App\lesson\lesson2\Greeter;


class Vietnamnese implements Translator
{
	public function translate($username)
	{
		return "xin chao $username";
	}
}