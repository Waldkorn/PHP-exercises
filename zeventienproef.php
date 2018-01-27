<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>
      <?php 
        echo "PHP assignment by: Ewout Eggens (zeventienproef)"; 
      ?>
    </title>
  </head>

  <body>
    <?php
      function checkNumber($number) {
        $numbers = preg_split('//', (string)$number, -1, PREG_SPLIT_NO_EMPTY);
        $amountOfNumbers = count($numbers);
        if ($amountOfNumbers == 17) {
          $sum = 0;
          for ($i = count($numbers); $i > 0; $i--) {
            $sum += $numbers[$i-1] * (count($numbers) + 1 - $i);
          }
          if ($sum != 0 and $sum % 17 == 0) {
            return true;
          } else {
            return false;
          }
        } else {
          return false;
        }
      }

      if (checkNumber("92651109849427955")) {
        echo "correct";
      } else {
        echo "incorrect";
      }
    ?>
  </body>
</html>
