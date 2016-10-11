<?php
require_once 'bootstrap.php';
 ?>

<!-- <?php
$sql =
"SELECT * FROM students";

$stmt = $dbh->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
format_print_r($results);
 ?> -->

  <?php
    if (isset($_POST['day1_notes'])) {
      $day1_notes = $_POST['day1_notes'];

      $sql = "
        INSERT INTO records (day1_notes) VALUES (:day1_notes)
      ";

      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':day1_notes', $day1_notes);
      $stmt->execute();
    }
  ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practice Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">




  </head>
  <body>

      <?php
        include './name.php'
       ?>

       <!-- <h3>Hello <?php echo $_POST["firstName"] ?>
       <?php echo $_POST["lastName"] ?> , welcome to practice records online</h3> -->
      <div class="welcome">
       <h1>Welcome to Online Practice Record !</h1>


       <div>
         <p class="select">
           Select week for practice
         </p>
         <select class="select">
           <option value="week1">Week 1 (Sept. 5-11)</option>
           <option value="week1">Week 2 (Sept. 12-18)</option>
           <option value="week1">Week 3 (Sept. 19-25)</option>
           <option value="week1">Week 4 (Sept. 26-Oct. 2)</option>
           <option value="week1">Week 5 (Oct. 3-9)</option>
           <option value="week1">Week 6 (Oct. 10-16)</option>
         </select>
     </div>
   </div>


     <div class="total">
       <h4>Total time practiced this week: </h4>
     </div>



     <form name="save_record" method="post">
     <h3 class="day">Monday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="25">15 Minutes</option>
    <option value="30">30 Minutes</option>
    <option value="45">45 Minutes</option>
    <option value="60">1 Hour</option>
    <option value="75">1 Hour and 15 Minutes</option>
    <option value="90">1 Hour and 30 Minutes</option>
    <option value="105">1 Hour and 45 Minutes</option>
    <option value="120">2 Hours</option>
  </select>
</div>
<p class="what">
  <label for="textarea">What practiced:</label>
<textarea name="day1_notes" class="textarea" rows="2" cols="21"></textarea>
</p>


  <h3 class="day">Tuesday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="25">15 Minutes</option>
    <option value="30">30 Minutes</option>
    <option value="45">45 Minutes</option>
    <option value="60">1 Hour</option>
    <option value="75">1 Hour and 15 Minutes</option>
    <option value="90">1 Hour and 30 Minutes</option>
    <option value="105">1 Hour and 45 Minutes</option>
    <option value="120">2 Hours</option>
  </select>
</div>
<p class="what">
  <label for="textarea">What practiced:</label>
<textarea class="textarea" rows="2" cols="21"></textarea>
</p>


<h3 class="day">Wednesday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="25">15 Minutes</option>
    <option value="30">30 Minutes</option>
    <option value="45">45 Minutes</option>
    <option value="60">1 Hour</option>
    <option value="75">1 Hour and 15 Minutes</option>
    <option value="90">1 Hour and 30 Minutes</option>
    <option value="105">1 Hour and 45 Minutes</option>
    <option value="120">2 Hours</option>
  </select>
</div>
<p class="what">
  <label for="textarea">What practiced:</label>
<textarea class="textarea" rows="2" cols="21"></textarea>
</p>

</select>


<h3 class="day">Thursday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="25">15 Minutes</option>
    <option value="30">30 Minutes</option>
    <option value="45">45 Minutes</option>
    <option value="60">1 Hour</option>
    <option value="75">1 Hour and 15 Minutes</option>
    <option value="90">1 Hour and 30 Minutes</option>
    <option value="105">1 Hour and 45 Minutes</option>
    <option value="120">2 Hours</option>
  </select>
</div>
<p class="what">
  <label for="textarea">What practiced:</label>
<textarea class="textarea" rows="2" cols="21"></textarea>
</p>



<h3 class="day">Friday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="25">15 Minutes</option>
    <option value="30">30 Minutes</option>
    <option value="45">45 Minutes</option>
    <option value="60">1 Hour</option>
    <option value="75">1 Hour and 15 Minutes</option>
    <option value="90">1 Hour and 30 Minutes</option>
    <option value="105">1 Hour and 45 Minutes</option>
    <option value="120">2 Hours</option>
  </select>
</div>
<p class="what">
  <label for="textarea">What practiced:</label>
<textarea class="textarea" rows="2" cols="21"></textarea>
</p>


<h3 class="day">Saturday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="25">15 Minutes</option>
    <option value="30">30 Minutes</option>
    <option value="45">45 Minutes</option>
    <option value="60">1 Hour</option>
    <option value="75">1 Hour and 15 Minutes</option>
    <option value="90">1 Hour and 30 Minutes</option>
    <option value="105">1 Hour and 45 Minutes</option>
    <option value="120">2 Hours</option>
  </select>
</div>
<p class="what">
  <label for="textarea">What practiced:</label>
<textarea class="textarea" rows="2" cols="21"></textarea>
</p>



<h3 class="day">Sunday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="25">15 Minutes</option>
    <option value="30">30 Minutes</option>
    <option value="45">45 Minutes</option>
    <option value="60">1 Hour</option>
    <option value="75">1 Hour and 15 Minutes</option>
    <option value="90">1 Hour and 30 Minutes</option>
    <option value="105">1 Hour and 45 Minutes</option>
    <option value="120">2 Hours</option>
  </select>
</div>
<p class="what">
  <label for="textarea">What practiced:</label>
<textarea class="textarea" rows="2" cols="21"></textarea>
</p>
<input name="submit" type="submit" value="submit" />
</form>



  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <script src="js/style.js" type="text/javascript"></script>
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </script>
  </body>
</html>
