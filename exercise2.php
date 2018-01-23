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
      /*
        for ($number = 1; $number < 11; $number++) {

          $squaredNumber = pow($number, 2);
          $cubedNumber = pow($number, 3);

          if (strlen((string)$number) < 2) {
            echo ($number . "&nbsp;&nbsp;&nbsp;&nbsp; || &nbsp;&nbsp;");
          } else {
            echo ($number . "&nbsp;&nbsp; || &nbsp;&nbsp;");
          }

          if (strlen((string)$squaredNumber) < 2) {
            echo ($squaredNumber . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; || &nbsp;&nbsp;");
          } elseif (strlen((string)$squaredNumber) < 3) {
            echo ($squaredNumber . "&nbsp;&nbsp;&nbsp; || &nbsp;&nbsp;");
          } else {
            echo ($squaredNumber . "&nbsp; || &nbsp;&nbsp;");
          }

          echo $cubedNumber;

          echo nl2br ("\n");
          //echo  nl2br ($numbers[$i] . " || " . pow($numbers[$i], 2) . " || " . pow($numbers[$i], 3) . "\n");
      }
      */
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
