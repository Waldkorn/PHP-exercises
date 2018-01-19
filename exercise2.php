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
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        for ($i = 0; $i < count($numbers); $i++) {

        global $numbers;

        $number = $numbers[$i];
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
      ?>
  </body>
</html>
