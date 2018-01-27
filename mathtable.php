<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>
      <?php 
        echo "PHP assignment by: Ewout Eggens (mathtable)"; 
      ?>
    </title>
  </head>

  <body>
      <?php
      function makeTable($maxNumber) {
      echo "<table border=1>";
        for ($number = 1; $number <= $maxNumber; $number++) {

            $squaredNumber = pow($number, 2);
            $cubedNumber = pow($number, 3);

            echo "<tr>";
            echo "<td>" . $number . "</td>";
            echo "<td>" . $squaredNumber . "</td>";
            echo "<td>" . $cubedNumber . "</td>";
            echo "</tr>";
          }
        echo "</table>";
      }
      makeTable(10);
      ?>
  </body>
</html>
