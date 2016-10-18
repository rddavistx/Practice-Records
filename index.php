<?php
require_once 'bootstrap.php'
 ?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practice Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

     <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="border">
    <div class="welcome">
    <h1>Welcome to Online Practice Record !</h1>
    </div>
    <div class="signIn">
        <h2>Please sign in</h2>
    </div>
      <form action="practice.php" method="get">

        Student ID:<input type="text" name="assigned_id">
        <input type="submit">
      </form>
      <div class="bottom">
        <h3 id="instructions">An online tool for students and directors to track an individual's practice times and material practiced.</h3>
    </div>

    </div>

  </body>
</html>
