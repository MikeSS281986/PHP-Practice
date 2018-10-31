<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fizzbuzz</title>
</head>
<body>
  <?php
  $x = 32;
  $y = 15;
  $txt = "Mike Smith is awesome! My age is $x.";
  echo $txt;
  echo "<br>";
  function test(){
    global $x, $y;
    echo $x + $y;
  }
  test();
  echo "<br>";
  echo $x + $y;
  echo "<br>";
  echo "<br>";
  function myTest(){
    //to save a variable for future use, you must use the static keyword.
    static $v = "a";
    echo $v;
    $v++;
  }
  myTest();
  echo "<br>";
  myTest();
  echo "<br>";
  myTest();
  echo "<br>";
  echo "<br>";
  function fizzBuzz($num){
    $total = 0;
    for($i = 0; $i < $num; $i++){
      $total += 1;
      if($total % 3 === 0 && $total % 5 == 0) {
        echo "Fizzbuzz";
        echo "<br>";
      } else if ($total % 5 === 0){
        echo "Buzz";
        echo "<br>";
      } else if ($total % 3 === 0){
        echo "Fizz";
        echo "<br>";
      }else {
        echo $total;
        echo "<br>";
      }
    }
  }
  fizzBuzz(100);
  ?>
</body>
</html>