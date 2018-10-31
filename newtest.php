<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>PHP Test</title>
<style>
  body {
    text-align: center;
}
  p {
    color:blue;
}
  h1 {
    margin-bottom:-15px;
}
</style>
</head>
<body>
<div class="container">
  <?php
echo "<h1><b>What up peeps?!</b></h1>";
echo "<br/>";
$txt = "First Php site!";
$num = 5;
$newNum = 10;
echo "<p>$txt</p>";
echo "<br/>";
echo $num;
echo "<br/>";
echo $newNum;
echo "<br/>";
echo $num + $newNum;
  ?>
</div>
</body>
</html>
