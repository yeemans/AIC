
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>printout</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="intro_styles.css">
        <link rel="icon" href="yee.jpg">
    </head>
<body>
    <?php
    require "header.php";
    $feeling = $_POST['feeling'];
    $day = $_POST['day'];
    $food = $_POST['food'];
    $weather = $_POST['weather'];
    $info = $_POST['info'];
    $glasses = $_POST['glasses'];
    echo "<p>";
    if ($feeling == "Horrible")
    {
        echo htmlspecialchars($feeling);
        echo "; my day was horrible as well";
        echo "</br>";
    }
    if ($feeling == "Great")
    {
        echo htmlspecialchars($feeling);
        echo "; my day was great as well";
        echo "</br>";
    }
    echo "</br>";
    echo htmlspecialchars($day);
    echo "</br>";
    echo htmlspecialchars($food);
    echo "</br>";
    echo htmlspecialchars($weather);
    echo "</br>";
    echo htmlspecialchars($info);
    echo "</br>";
    echo htmlspecialchars($glasses);
    if ($glasses < 5)
    {

        echo ", Not enough water!";
    }
    else
    {

        echo ", Enough water";
    }
    echo "</p>";
    //foreach ($_POST as $key => $value) {
      //  echo "<p>";
        //echo htmlspecialchars($value);
        //echo "</p>";
    //}
    ?>


</body>
</html>
