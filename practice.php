<?php
ob_start();
require_once 'bootstrap.php';
 ?>

 <?php $sql = "
   SELECT id, start_date
   FROM weeks
 ";
 $stmt = $dbh->prepare($sql);
 $stmt->execute();

 $weeks = $stmt->fetchAll(PDO::FETCH_ASSOC);

 $output = '';
 ?>

<?php
    if (isset($_POST['assigned_id'])) {
      $assigned_id = $_POST['assigned_id'];


      $sql = "
        SELECT *
        FROM students
        Where assigned_id = :assigned_id
      ";

      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':assigned_id', $assigned_id);
      $stmt->execute();

      $results = $stmt->fetch(PDO::FETCH_ASSOC);

      //check if results is empty. If so redirect to index
      if ( ! $results) {
        header('location: index.php');
        $msg = "Incorrect Student ID";

      }
}

  ?>

  <?php
    if (isset($_POST['submit'])) {

      $day1_notes = $_POST['day1_notes'];
      $day1_duration = $_POST['day1_duration'];
      $day2_notes = $_POST['day2_notes'];
      $day2_duration = $_POST['day2_duration'];
      $day3_notes = $_POST['day3_notes'];
      $day3_duration = $_POST['day3_duration'];
      $day4_notes = $_POST['day4_notes'];
      $day4_duration = $_POST['day4_duration'];
      $day5_notes = $_POST['day5_notes'];
      $day5_duration = $_POST['day5_duration'];
      $day6_notes = $_POST['day6_notes'];
      $day6_duration = $_POST['day6_duration'];
      $day7_notes = $_POST['day7_notes'];
      $day7_duration = $_POST['day7_duration'];
      $assigned_id = $_POST['assigned_id'];
      $week_id = $_POST['week_id'];


      $sql = "
        INSERT INTO records (day1_notes, day1_duration, day2_notes, day2_duration, day3_notes, day3_duration, day4_notes, day4_duration, day5_notes, day5_duration, day6_notes, day6_duration, day7_notes, day7_duration, assigned_id, week_id) VALUES (:day1_notes, :day1_duration, :day2_notes, :day2_duration, :day3_notes, :day3_notes, :day4_notes, :day4_duration, :day5_notes, :day5_duration, :day6_notes, :day6_duration, :day7_notes, :day7_duration, :assigned_id, :week_id)
      ";


        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':day1_notes', $day1_notes);
        $stmt->bindParam(':day1_duration', $day1_duration);
        $stmt->bindParam(':day2_notes', $day2_notes);
        $stmt->bindParam(':day2_duration', $day2_duration);
        $stmt->bindParam(':day3_notes', $day3_notes);
        $stmt->bindParam(':day3_duration', $day3_duration);
        $stmt->bindParam(':day4_notes', $day4_notes);
        $stmt->bindParam(':day4_duration', $day4_duration);
        $stmt->bindParam(':day5_notes', $day5_notes);
        $stmt->bindParam(':day5_duration', $day5_duration);
        $stmt->bindParam(':day6_notes', $day6_notes);
        $stmt->bindParam(':day6_duration', $day6_duration);
        $stmt->bindParam(':day7_notes', $day7_notes);
        $stmt->bindParam(':day7_duration', $day7_duration);
        $stmt->bindParam(':assigned_id', $assigned_id);
        $stmt->bindParam(':week_id', $week_id);

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

       <h3>Hello,  <?php echo $results['first_name'] . " " . $results['last_name']?></h3>
      <div class="welcome">
       <h1>Welcome to Online Practice Record !</h1>


       <div>
         <p class="select">
           Select week for practice
         </p>
         <form name="save_record" action="practice.php" method="post">
         <select name="week_id">
           <option value="">- Select a week</option>

            <?php foreach ($weeks as $week): ?>
              <option value="<?php echo $week['id'] ?>"><?php echo $week['start_date'] ?></option>

            <?php endforeach ?>
         </select>
     </div>
   </div>


     <h3 class="day">Monday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select name="day1_duration" class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="15">15 Minutes</option>
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
  <select name="day2_duration"  class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="15">15 Minutes</option>
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
<textarea name="day2_notes" class="textarea" rows="2" cols="21"></textarea>
</p>


<h3 class="day">Wednesday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select name="day3_duration"  class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="15">15 Minutes</option>
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
<textarea name="day3_notes" class="textarea" rows="2" cols="21"></textarea>
</p>

</select>


<h3 class="day">Thursday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select name="day4_duration"  class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="15">15 Minutes</option>
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
<textarea name="day4_notes" class="textarea" rows="2" cols="21"></textarea>
</p>



<h3 class="day">Friday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select name="day5_duration" class="select">
    <option  selected="selected" value="0">Did not practice</option>
    <option value="15">15 Minutes</option>
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
<textarea name="day5_notes" class="textarea" rows="2" cols="21"></textarea>
</p>


<h3 class="day">Saturday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select name="day6_duration" class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="15">15 Minutes</option>
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
<textarea name="day6_notes" class="textarea" rows="2" cols="21"></textarea>
</p>



<h3 class="day">Sunday</h3>
<div>
  <p class="time">
    Time Practiced:
  </p>
  <select name="day7_duration" class="select">
    <option selected="selected" value="0">Did not practice</option>
    <option value="15">15 Minutes</option>
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
<textarea name="day7_notes" class="textarea" rows="2" cols="21"></textarea>
</p>
<input type="hidden" name="assigned_id" value="<?php echo $_POST['assigned_id'] ?>">

<input name="submit" type="submit" value="submit" />
</form>



  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <script src="js/style.js" type="text/javascript"></script>
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </script>
  </body>
</html>
