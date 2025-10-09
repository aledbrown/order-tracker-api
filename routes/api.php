<?php

use App\Http\Controllers\Api\OrderController;

Route::get('/orders/{id}', [OrderController::class, 'show']);
