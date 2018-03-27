<?php

// Configure output

\Sandbox\Response::instance()->cancel_standard_output();

// Start routes

Route::get('/', function() {
    include('index.html');
});
