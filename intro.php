<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sections</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="intro_styles.css">
        <link rel="icon" href="yee.jpg">
    </head>
<body>
    <div id ="container">
        <h1 class="section">Who am I?</h1>
        <img src="desktop.png">
        <p class="description">My fellow classmates, I am your classmate.
        I like fun things such as videogames, and really do things to
        maximize the amount of time I have for things that I enjoy. I value time
        where I have nothing to worry about.</p>
        <h1 class="section">The Tech Me</h1>
        <p class="description">With a computer, I can open two Google Chrome tabs.
        This is coding because I am giving
        the computer instructions to do something. My
        favorite programming language is HTML, programming languages are too hard.</p>
        <h1 class="section">Please Take my Survey</h1>
        <form action = "https://gse6.soe.berkeley.edu:444/4DACTION/EchoInput">
          <h3 class="description">How are you doing?</h3>
          <input type="radio" id="Great" name="feeling" value="Great">
          <label for = "Great">Great</label>
          <input type="radio" id="Horrible" name="feeling" value="Horrible">
          <label for = "Horrible">Horrible</label>
          <h3 class="description">What is your favorite food group?</h3>
          <select id="food" name="food">
              <option value="junk">junk</option>
              <option value="healthy">healthy</option>
              <option value="neither">neither</option>
          </select>
          <h3 class="description">Tell me about your day.</h3>
          <input type="text">

          <h3 class="description">What is your favorite type of weather?</h3>
            <input type="checkbox" name="good" id="good" value="good">
            <label for="good">good</label>
            <input type="checkbox" name="bad" id="bad" value="bad">
            <label for="bad">bad</label>
            <input type="checkbox" name="medium" id="medium" value="medium">
            <label for="medium">medium</label>
            <h3 class="description">Please provide personal information.</h3>
            <textarea name="info">Enter your address here</textarea>
            <h3 class="description">How many glasses of water have you had?</h3>
            <input type="number" name="glasses" id="glasses">
          <input type="submit" value="submit">



        </form>
    </div>
    <?php
        include_once "jenny_assignment.php";
        include_once  "nithin_assignment.php";

    ?>

</body>
</html>
