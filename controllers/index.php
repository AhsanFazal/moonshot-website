<?php

// Configure output

\Sandbox\Response::instance()->cancel_standard_output();

// Start routes

Route::any('/', function() {
    include('index.html');
});
