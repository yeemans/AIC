
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Getting to know you</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="intro_styles.css">
        <link rel="icon" href="yee.jpg">
    <style>
        h1 {
        }
    </style>
    </head>
<body>
    <?php
    require "header.php";
    ?>
    <div id ="container">
        <form action = "printout.php" method = "post">
          <h3 class="description">How are you doing?</h3>
          <input type="radio" id="Great" name="feeling" value="Great">
          <label for = "Great">Great</label>
          <input type="radio" id="Horrible" name="feeling" value="Horrible">
          <label for = "Horrible">Horrible</label>
          <h3 class="description">What is your favorite food group?</h3>
          <select id="food" name="food">
              <option name = "food" value="junk">junk</option>
              <option name = "food" value="healthy">healthy</option>
              <option name = "food" value="neither">neither</option>
          </select>
          <h3 class="description">Tell me about your day.</h3>
          <input type="text" name="day">

          <h3 class="description">What is your favorite type of weather?</h3>
            <input type="checkbox" name="weather" id="good" value="good">
            <label for="good">good</label>
            <input type="checkbox" name="weather" id="bad" value="bad">
            <label for="bad">bad</label>
            <input type="checkbox" name="weather" id="medium" value="medium">
            <label for="medium">medium</label>
            <h3 class="description">Please provide personal information.</h3>
            <textarea name="info">Enter your address here</textarea>
            <h3 class="description">How many glasses of water have you had?</h3>
            <input type="number" name="glasses" id="glasses">
          <input type="submit" value="submit">



        </form>
    </div>

</body>
</html>
