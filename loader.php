<?php



//cache constants
define("CACHE_ENABLED",1);
define("CACHE_DIR",__DIR__ . "/cache");


// Authorization Constants
define("JWT_KEY","7LearnIranKey78dfndfj*d7*dHH");
define("JWT_ALG","HS256");




include_once __DIR__ . "/vendor/autoload.php";
include_once __DIR__ . "/App/iran.php";

spl_autoload_register(function ($class) {
    $class_file = __DIR__ . "/" . $class . ".php";
    if (!(file_exists($class_file) and is_readable($class_file)))
        die("$class not found");
    include_once $class_file;
});

// use \App\Services\CityService;
// use \App\Utilities\Response;


// new ProvinceService;
// Response::respond([1, 2, 33], 200);

