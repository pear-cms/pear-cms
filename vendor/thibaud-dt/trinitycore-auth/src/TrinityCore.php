<?php

namespace ThibaudDT\TrinityCoreAuth;

use Illuminate\Support\Facades\Route;

class TrinityCore{

    public function routes(){
        Route::group([], function ($router) {
            require __DIR__.'/Http/routes.php';
        });
    }

}