<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();

require __DIR__ . '/vendor/autoload.php';

// require_once 'class/SharkIpaParser.php';
use sharkipaparser;

//use SharkIpaParser as Shark;

$shark = new sharkipaparser\SharkIpaParserHelper();

$shark->load_ipa('C:\Users\mario\Desktop\test.ipa');
echo $shark->read_plist()['CFBundleName'];