<?php

// Laporan error
error_reporting(E_ALL);

// Mulai sesi
session_start();

// Url -
define("URL", "http://127.0.0.1:8080/mvc/");
define("AST", URL . "/layouts/assets/");
define("JQR", "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js");

// Path root
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Autoload
require_once ROOT. "vendor/autoload.php";

// Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
