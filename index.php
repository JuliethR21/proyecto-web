<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

define("BASE_URL", "/");

require_once __DIR__ . "/router.php";