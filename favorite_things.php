<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Favorites</title>
      <link rel="icon" href="yee.jpg">
  </head>
  <body>
     <h1>My favorite grains</h1>
     <?php
     $grains_array = ['rice','bread','cereal'];
     for ($i = 0; $i < count($grains_array); $i++)
     {
       echo $grains_array[$i];
       echo '</br>';
     }
     ?>
     <h1>My favorite utensils</h1>
     <?php
     $utensils_array = ['chopstick', 'spoon', 'fork'];
     for ($j = 0; $j < count($utensils_array); $j++)
     {
       echo $utensils_array[$j];
       echo '</br>';
     }
     ?>
     <h1>My favorite colors</h1>
     <?php
     $colors_array = ['white', 'black', 'gray'];
     for ($h = 0; $h < count($colors_array); $h++)
     {
       echo $colors_array[$h];
       echo '</br>';
     }
     //removing from the color array for extra credit please give

     ?>
     <h1>Removing color gray from the color array, please give extra credit</h1>
     <?php
      unset( $colors_array[2] ); // unset 3rd element
      for ($a = 0; $a < count($colors_array); $a++)
      {
        echo $colors_array[$a];
        echo '</br>';
      }
     ?>
     <h1> Adding potatoes to the grains array, please give extra credit</h1>
     <?php
      array_push($grains_array, "potatoes");
      for ($b = 0; $b < count($grains_array); $b++)
      {
        echo $grains_array[$b];
        echo '</br>';
      }
     ?>
  </body>
</html>
