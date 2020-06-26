<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
  <h1>Arrays</h1>
  <h2>Pets</h2>
  <?php
  $pets = ["bert", "ernie", "choochoo"];
  echo "<ul>";
  for ($a = 0; $a < count($pets); $a++)
  {
    echo "<li><p>{$pets[$a]}</p></li>";
  }
  echo "</ul>";
  ?>
  <h2>Food</h2>
  <?php
  $food = ["pad thai", "pasta", "sandwiches"];
  echo "<ol>";
  for ($b = 0; $b < count($food); $b++)
  {
    echo "<li><p>{$food[$b]}</p></li>";
  }
  echo "</ol>";
  ?>
  <h2>Cars</h2>
  <?php
  $cars = ["lambo", "mclaren", "toyota"];
  echo "<ol>";
  for ($c = 0; $c < count($cars); $c++)
  {
    echo "<li><p>{$cars[$c]}</p></li>";
  }
  echo "</ol>";
  ?>
  <h1>Removing sandwiches from the food array</h1>
  <?php
   unset( $food[2] ); // unset 3rd element
   echo '<ol>';
   for ($a = 0; $a < count($food); $a++)
   {

     echo "<li>{$food[$a]}</li>";
   }
   echo '</ol>'
  ?>
  <h1>Adding prius to the cars array</h1>
  <?php
  array_push($cars, 'prius');
  echo '<ol>';
  for ($b = 0; $b < count($cars); $b++)
  {
    echo "<li>{$cars[$b]}</li>";
  }
  echo '</ol>';
  ?>


</body>
</html>
