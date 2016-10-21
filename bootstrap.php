<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

require('dotenv').config({silent: true})
require __DIR__ . '/vendor/autoload.php';

function format_print_r($output) {
  echo '<pre>';
  print_r($output);
  echo '</pre>';
}

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// echo 'ENV database:' . $_ENV['DATABASE_NAME'];


$dbh = new PDO('mysql:host=' . $_ENV['DATABASE_HOST'] . ';dbname=' . $_ENV['DATABASE_NAME'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);



 ?>
