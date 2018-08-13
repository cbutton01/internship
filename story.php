<?php
    $place1 = $_GET["place1"];
    $place2 = $_GET["place2"];
    $person1 = $_GET["person1"];
    $person2 = $_GET["person2"];
    $activity = $_GET["activity"];
    $food = $_GET["food"];


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP practice</title>
  </head>
  <body>
    <h3>Click <a href="index.html">Here!</a> to fill out the form!</h3>
    <p>
      A long time ago in a land called <?php echo $place1; ?> ruled a King named <?php echo $person1 ?>.  <?php echo $person1; ?> was a decent king who enjoyed <?php echo $activity ?> and eating <?php echo $food ?>.
    </p>
    <br>
    <p>
      <?php echo $place1 ?> shared a border with <?php echo $place2 ?>.  <?php echo $place2 ?> was ruled by a not so decent King named <?php echo $person2 ?>.  King <?php echo $person2 ?> looked on the Kingdom of <?php echo $place1 ?> with great envy, for <?php echo $place1 ?> was a place of peace and plenty.
    </p>
  </body>
</html>
