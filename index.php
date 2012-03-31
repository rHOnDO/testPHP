<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
  <title>TODO supply a title</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
  <?php
    echo "<h1>Hello World!</h2>";
  ?>

  <?php
    $a = 5;
    $b = 10;

    function myTest() {
      global $a, $b;
      $b = $a + $b;
    }

    myTest();
    echo $b . "<br />";

    $x=array("red" => "one", "green" => "two", "blue" => "three", "black" => array("Joe", "Sam", "Fred"));
    foreach ($x as $value) {
      echo $x . " : " . $value . "<br />";
    }
    echo $x["green"] . "<br />" . $x["black"][1];
    ?>
</body>
</html>
