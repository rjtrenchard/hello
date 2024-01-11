<?php
    // my controller

    // turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // includes fatfree
    require_once("vendor/autoload.php");

    // instantiate F3 base class
    $f3 = Base::instance();

    // default route
    $f3->route('GET /', function() {
       echo "<h1>Hello!</h1>";
    });

    // run fat free
    $f3->run();
