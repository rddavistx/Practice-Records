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



$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$dbh = new mysqli($server, $username, $password, $db);





// $dbh = new PDO('mysql:host=' . $_ENV['DATABASE_HOST'] . ';dbname=' . $_ENV['DATABASE_NAME'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);


 ?>
