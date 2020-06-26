<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <title>spoilers</title>
  <link rel="icon" href="yee.jpg">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Helvetica+Neue');
  @import url('https://fonts.googleapis.com/css?family=Lato');
  body {
    opacity: 0.9;
    background-image: url('spoilers_background.jpg');
  }
  table, th, td {
    color: white;
    margin: auto;
  }
  th {
    font-family: "Helvetica Neue";
    font-size: 1.75em;
    margin-bottom: 5%;
    padding-bottom: 5%;
  }
  td {
    font-family: Lato;
  }
  .BURNING {
    color: red;
  }
  #take {
    width: 500px;
  }
  table {
    width: 600px;
  }
  </style>
  <body>
    <?php
      $hot_takes = ['PC Gaming'=>'Too expensive for half a frame per second, fire',
      'EA'=>'The Disney of videogames',
      'Nintendo'=>'Franchises are either great or should be long dead',
      'DLC'=>'Honestly bad for the game industry',
      'Fortnite'=>'Way too much overexposure',
      'Streamers'=>'Often encourage unhealthy behavior, like sitting for 12 hours',
      'Graphics'=>'Good art > good graphics'];

      ksort($hot_takes);
      $keys = array_keys($hot_takes);


      echo '<table>';
      echo '<tr>';
      echo '<th>Topic</th>';
      echo '<th id="take">Hot Take</th>';
      echo '</tr>';

      for ($i=0; $i < count($keys); ++$i) {
        echo '<tr>';

        echo '<td>';
        echo $keys[$i];
        echo '</td>';
        if (strpos($hot_takes[$keys[$i]], 'fire') !== false ||
        strpos($hot_takes[$keys[$i]], 'hot') !== false ) {
            echo '<td class="BURNING">';
            echo str_rot13($hot_takes[$keys[$i]]);
            echo '</td>';
        }
        else {
          echo '<td>';
          echo str_rot13($hot_takes[$keys[$i]]);
          echo '</td>';
      }
        echo '</tr>';

      }
      echo '</table>';
     ?>
  </body>
</html>
