<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\lesson\lesson1\Operator;

class OperatorController extends Controller
{
	private $operator;

	public function __construct(Operator $operator)
    {
        $this->operator = $operator;
    }

    public function caculate()
    {
 		 return 'result = ' . $this->operator->run(8, 2);
    }
}
