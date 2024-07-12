<?php

use Illuminate\Support\Facades\Route;

include(base_path('routes/admin.php'));
include(base_path('routes/website.php'));
include(base_path('routes/command.php'));
include(base_path('routes/payment.php'));
include(base_path('routes/users.php'));

Route::fallback(function () {
    return view('errors.404');
});
