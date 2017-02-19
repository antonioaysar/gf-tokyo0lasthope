<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
	public function boot()
    {
    	/*The custom validator receives four arguments:
    	 * the name of the $attribute being validated
    	 * the $value of the attribute
    	 * an array of $parameters passed to the rule
    	 * and the Validator instance
    	 */

        $this->app['validator']->extend('sommachars', function ($attribute, $value, $parameters, $validator)
        {
        	$formData = $validator->getData();

        	$car0 = $formData['car0'];
        	$car1 = $formData['car1'];
        	$car2 = $formData['car2'];
        	$car3 = $formData['car3'];
        	$car4 = $formData['car4'];
        	$car5 = $formData['car5'];

        	$stats_sum = $car0 + $car1 + $car2 + $car3 + $car4 + $car5;

        	if($stats_sum == 40){
        		return true;
        	} else {
        		return false;
        	}

        	return true;

        });
    }

    public function register()
    {
        //
    }
}
