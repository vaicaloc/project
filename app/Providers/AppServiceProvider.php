<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\lesson\lesson2\UppercaseService;
use App\lesson\lesson2\AllUppercaseService;
use App\lesson\lesson2\Converter;
use App\lesson\lesson2\Operator;
use App\lesson\lesson1\Minus;
use App\lesson\lesson1\Multiply;
use App\lesson\lesson1\Addition;
use App\lesson\lesson1\Division;
use App\lesson\lesson2\English;
use App\lesson\lesson2\Vietnamnese;
use App\lesson\lesson2\Greeter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(Greeter::class, function()
        {
            $translator = config('app.translator');
            $converter = config('app.converter');

            if( $translator == 'en'){
                 $translator = new English();
            }

            if($translator == 'vn'){
                 $translator = new Vietnamnese();
            }

             if($converter){
                 $converter = new UppercaseService();
            }

            if( ! $converter){
                 $converter = new AllUppercaseService();
            }

            return new Greeter($translator, $converter);
        });

        $this->app->bind(Operator::class, function()
        {  
            $operator = $this->app['config']->get('app.operator');

            if($operator == 'division') 
            {
                return new Division();
            }
            if($operator == 'addition') 
            {
                return new Addition();
            }
            if($operator == 'minus') 
            {
                return new Minus();
            }
            return new Multiply();
        });

    }
}
