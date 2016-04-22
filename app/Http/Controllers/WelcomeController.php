<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
// use App\UppercaseService;
// use App\AllUppercaseService;
// use App\Converter;
use App\lesson\lesson2\Greeter;
// use App\Translator;

class WelcomeController extends Controller
{
    private $greeter;
    
    public function __construct(Greeter $greeter)
    {
        $this->greeter = $greeter;
    }
    
    public function index($username)
    {
        return $this->greeter->greet($username);
    }
} 