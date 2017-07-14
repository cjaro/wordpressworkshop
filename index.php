<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Intro</title>
  </head>
  <body>

    <?php
     echo 'hello world';
     $name = 'catherine';
    //  echo $name;
     echo '<br>';
     $fullName = "$name jarocki";
     echo $fullName;

     $fullName = 5;

     echo '<br>';

     $list = ['one', 'two', 'three'];

     function printThings($things) {
      for($i = 0; $i < count($things); $i++) {
        ?>

        <div class="block"><?php echo $things[$i]; ?></div>

        <?php
      // echo $things[$i];
      // echo '<br>';
        }
      }

      printThings($list);

    ?>

  </body>
</html>
