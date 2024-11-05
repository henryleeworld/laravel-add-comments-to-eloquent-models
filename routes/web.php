<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('video/comment/', [VideoController::class, 'comment']);
