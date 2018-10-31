<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Classes</title>
</head>
<body>
  <?php
  class Person {
    function Person($age,$name){
      $this->age = $age;
      $this->name = $name;
    }
    // function _construct($name_paramter){
    //   $this->name = $name_paramter;
    // }
  }
  $human = new Person(32,"Mike");
  // Display Name
  echo "Name:&nbsp;".$human->name;
  echo "<br>";
  //Display the amount of characters in name
  echo "The name ".$human->name." is " .strlen($human->name). " characters long.";
  echo "<br>";
  //Reverse the name and display
  echo $human->name." reversed is ".strrev($human->name).".";
  echo "<br>";
  //Display age
  echo "Age:&nbsp;".$human->age;
  ?>
</body>
</html>