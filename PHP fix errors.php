<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo "PHP assignment by: "Ewout Eggens" (fix PHP syntax errors)" ?></title>
  </head>

  <body>
      <?php
        $ages = array(10,50,39,40,67,99,7,2,10,88);
        $sum = 0;

        function getAverageAge($input) {
          for($i=0; $i<count($input); $i++) {
              global $sum;
            $sum += $input[$i];
          }

          return $sum / count($input);
        }

        echo getAverageAge($ages);
        ?>
  </body>
</html>
