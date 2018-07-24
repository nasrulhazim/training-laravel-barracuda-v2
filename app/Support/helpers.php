<?php 

if (! function_exists('generate_sequence')) {
    function generate_sequence($input = 1)
    {
        return str_pad($input, config('document.sequence_length'), '0', STR_PAD_LEFT);
    }
}

collect(glob(__DIR__ . '/*.php'))
    ->each(function ($path) {
        if(basename($path) !== basename(__FILE__)) {
        	require $path;
        }
    });