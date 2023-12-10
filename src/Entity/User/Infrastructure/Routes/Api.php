
<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', UserFindAllController::class);

Route::get('/{id}', UserFindByIdController::class);