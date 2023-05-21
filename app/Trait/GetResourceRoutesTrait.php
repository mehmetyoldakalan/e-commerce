<?php

namespace App\Trait;

use Illuminate\Support\Facades\Route;

trait GetResourceRoutesTrait
{
    public function routeList(string $class): array
    {
        $classArr = explode('\\', $class);
        $className = $classArr[array_key_last($classArr)];

        preg_match_all('/((?:^|[A-Z])[a-z]+)/',$className,$matches);

        $routeName = strtolower($matches[array_key_first($matches)][array_key_first($matches)]);



        return array(
            'create' => Route::has($routeName.'.create') ? route($routeName.'.create') : null,
            'update' => Route::has($routeName.'.update') ? route($routeName.'.update') : null,
            'store' => Route::has($routeName.'.store') ? route($routeName.'.store') : null,
            'edit' =>  Route::has($routeName.'.edit') ? route($routeName.'.edit') : null,
            'destroy' =>  Route::has($routeName.'.destroy') ? route($routeName.'.destroy') : null,
        );

    }
}
