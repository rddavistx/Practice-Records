<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

// require __DIR__ . '/vendor/autoload.php';

function format_print_r($output) {
  echo '<pre>';
  print_r($output);
  echo '</pre>';
}

// $dotenv = new Dotenv\Dotenv(__DIR__);
// $dotenv->load();

// echo 'ENV database:' . $_ENV['DATABASE_NAME'];


$dbh = new PDO('mysql:host=' . $_ENV['DATABASE_HOST'] . ';dbname=' . $_ENV['DATABASE_NAME'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
//
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"], 1);
//
// $db['default']['hostname'] = $cleardb_server;
// $db['default']['username'] = $cleardb_username;
// $db['default']['password'] = $cleardb_password;
// $db['default']['database'] = $cleardb_db;

 ?>
