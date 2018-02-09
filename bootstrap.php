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




// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//
// $server = $_ENV["DATABASE_HOST"];
// $username = $_ENV["DATABASE_USER"];
// $password = $_ENV["DATABASE_PASSWORD"];
// $db = substr($_ENV["DATABASE_NAME"], 1);






$dbh = new PDO('mysqli:host=' . $_ENV['DATABASE_HOST'] . ';dbname=' . $_ENV['DATABASE_NAME'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);

// $con=mysqli_connect("localhost","root","Davis1988")
// or die("<p>Error connecting to database: " .
// mysqli_error() . "</p>");



mysqli_select_db($con,"practice_records")
or die("<p>Error selecting the database php_db: " . mysqli_error() . "</p>");




 ?>
