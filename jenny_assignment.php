
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="FirstAssignment.css">
    <title>First Assignment</title>
  </head>
  <body>
    <h1>First Assignment</h1>
    <div>
      <h4>About Me</h4>

      <p>
        <img src="images/Samoyed.jpg" alt="Samoyed - My favorite dog breed">
        My name is Jenny (Ying-Chen) and I'm a rising freshman at Cupertino
        High School. During my free time, I like to code, play flute, practice
        to solve rubix cube, play sudoku, read, practice photography,
        spend time with my friends and family, plus many more. I also like animals
        and my favorite dog breed is Samoyed (Pic on left). For me, I believe
        the most important values are family and friendship. Family provides security
        and comfort. Family wants you to be the best, but they will always be there
        for you no matter what you do. Friendship is also very important to me.
        Friends motivate me to work harder and be a better person. We can learn
        from each other and support each other.
        </p>

    </div>
    <div>
      <h4>Programming Experience</h4>
      <p>I learned HTML and CSS from taking Element of Web Design (TIC)
        last summer and continued to practice on my own to enhance my skills.
        I take courses and classes on JAVA programming and also self studied
        a bit of Python. My favorite programming language is JAVA, because I know
        it the best and I can make the most out of what I know. In this class,
        I wish to gain knowledge on learning different programming languages
        and ethics, examining its capabilities and impact on modern societies
        and culture. Also, to increase my knowledge of reading and
        comprehension of programming APIs.<p>
    </div>
    <form action="https://gse6.soe.berkeley.edu:444/4DACTION/EchoInput" method="post">
      <p>
        Name:
        <input type="text" name="name" maxlength="50" value="">
      </p>

      <p>
        Completed TIC:
        <input type="radio" name="TIC" value="Yes"> Yes
        <input type="radio" name="TIC" value="No"> No
      </p>

      <p>
        Programming language (All Apply):
        <input type="checkbox" name="Language" value="JAVA">JAVA
        <input type="checkbox" name="Language" value="Python">Python
        <input type="checkbox" name="Language" value="C">C
        <input type="checkbox" name="Language" value="Others">Others
      </p>
      <p>
        Year at ATDP:
        <select name="Year">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
      </p>
      <p>
        Grade Level:
        <input type="number" id="Grade" name="Grade" min="6" max="12">
      </p>
      <p>
        What programming experience do you have?
        <textarea name="comments" rows="5" cols="20"></textarea>
      </p>
      <input type="submit" name="Submit" value="Submit">
    </form>

    <footer>
      <a href="https://atdpsites.berkeley.edu/validate/">HTML5</a>
    </footer>
  </body>
</html>
