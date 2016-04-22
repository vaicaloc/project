<?php 
namespace App\lesson\lesson2;

use App\lesson\lesson2\Translator;
use App\lesson\lesson2\Converter;

class Greeter
{
	private $translator;

	private $converter;
	
	public function __construct(Translator $translator, Converter $converter)
	{
		$this->translator = $translator;
		$this->converter = $converter;
	}

	public function greet($name)
	{
		$username =$this->converter->convert($name);
		return $this->translator->translate($username);
	}
}