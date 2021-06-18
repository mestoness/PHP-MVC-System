<?php


session_start();
ob_start();
date_default_timezone_set('Europe/Istanbul');


//defines
define("BASE_PROJECT", ltrim(rtrim($_SERVER["PHP_SELF"], "index.php"), "/"));
define("SITE_URL", $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/" . BASE_PROJECT);
define("APP_DIR", "App");



//init file include
require APP_DIR . "/init.php";





/*ROUTES*/

Route::get("/","index@index");




/*ROUTES*/






//error page default
Route::error(function () {
echo "404";
});
