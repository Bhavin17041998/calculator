<?php

use Illuminate\Support\Facades\Route;

Route::get('calculator', function() {
    echo "Hello Bhavin";
});

Route::get('add/{a}/{b}', [BH\Calculator\CalculatorController::class, 'add']);
Route::get('substract/{a}/{b}', [BH\Calculator\CalculatorController::class, 'substract']);
