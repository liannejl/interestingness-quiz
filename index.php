
<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <link href="interestingness.css" type="text/css" rel="stylesheet"/>
    <link href="header.css" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <script src="interestingness.js"></script>
    <title>Interestingness Quiz</title>
  </head>

  <body>
    <?php
    require_once "header.php";
     ?>
    <div id="frontPage">
      <h1>Interestingness Quiz</h1>
      <div id="start" class="btn"><img src="../images/play.png" alt="start button"></div>
    </div>
    <form action="results.php" method="post">
      <article class="first">
        <div class="sectionStart" id="basicInfo">
          <h2>Basic Info About You</h2>
          <div class="navigate backToStart btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>
        <div class="question">
          <div class="content">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <label for="perferedName">Perfered Name: </label>
            <input type="text" name="perferedName" id="perferedName" required>
          </div>
          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <p>Gender: </p>
            <input type="radio" name="gender" value="male" id="male" required>
            <label for="male">Male</label>
            <br>
            <input type="radio" name="gender" value="female" id="female" required>
            <label for="female">Female</label>
            <br>
            <input type="radio" name="gender" value="other" id="other" required>
            <label for="other">Other</label>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <label for="bday">Date of Birth: </label>
            <input type="date" name="birthday" id="bday" required>
          </div>
          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>


        <div class="question">
          <div class="content">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required>
          </div>
          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question" id="last">
          <div class="content">
            <label for="address">Address: </label><br>
            <textarea name="address" id="address" required></textarea>
          </div>
          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate sectionEnd btn"><img src="../images/play.png" alt="proceed"></div>
        </div>
      </article>

      <!-- 10 questions -->
      <article id="second">
        <div class="sectionStart">
          <h2 id="quiz">Let the quiz begin... </h2>
          <div class="navigate backSection btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>
        <div class="question q1">
          <div class="content">
            <p>Your favorite meme of the bunch?</p>
            <div class="pictures one">
              <input type="radio" name="meme" value="whack" id="stonks" required>
              <label for="stonks"><img src="../images/stonks.jpeg" alt="please dont do
                this. i seriously can't live without you. I didn't cheat on you. STONKS.
                I didn't mean to send that."></label>
            </div>

            <div class="pictures two">
              <input type="radio" name="meme" value="knowledge" id="kirby" required>
              <label for="kirby"><img src="../images/kirby.JPG" alt="an adorable meme
                 about kirby"></label>
            </div>

            <div class="pictures three">
              <input type="radio" name="meme" value="basic" id="emoji" required>
              <label for="emoji"><img src="../images/calculating.JPG" alt="a woman
                looking like she is doing some intense calculations"></label>
            </div>

            <div class="pictures four">
              <input type="radio" name="meme" value="relatable" id="math" required>
              <label for="math"><img src="../images/math_score.JPG" alt="a funny meme
                about test scores"></label>
            </div>

            <div class="pictures five">
              <input type="radio" name="meme" value="whack" id="cap" required>
              <label for="cap"><img src="../images/cap.JPG" alt="spongebob sniffing caps"></label>
            </div>

          </div>
          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <p>Choose a phone wallpaper</p>
            <input type="radio" name="vibe" value="knowledge" id="funny" required>
            <label for="funny"><img src="../images/patrick_wallpaper.jpg" alt="a wallpaper with patrick on it"></label>

            <input type="radio" name="vibe" value="relatable" id="dog" required>
            <label for="dog"><img src="../images/dog.jpg" alt="a wallpaper with a dog on it"></label>

            <input type="radio" name="vibe" value="whack" id="colorful" required>
            <label for="colorful"><img src="../images/colorful.jpg" alt="a colorful louis vuitton wallpaper"></label>

            <input type="radio" name="vibe" value="basic" id="iphone" required>
            <label for="iphone"><img src="../images/iphone.jpg" alt="the default iphone wallpaper"></label>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <p>Are you Introverted or Extroverted</p>
            <input type="radio" name="-troversion" value="whack" id="introverted" required>
            <label for="introverted">Introverted</label><br>

            <input type="radio" name="-troversion" value="basic" id="extroverted" required>
            <label for="extroverted">Extroverted</label><br>

            <input type="radio" name="-troversion" value="knowledge" id="ambivert" required>
            <label for="ambivert">Ambivert</label><br>

            <input type="radio" name="-troversion" value="relatable" id="depends" required>
            <label for="depends">Depends</label>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <label for="energy" class="number">Rate your energy level (10 being you seem like you're
              always running on 10 energy drinks and 1 being you're basically half
              asleep)</label><br>
            <input type="number" name="energy" id="energy" min="1" max="10" required>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <p>Your musical preferance?</p>

            <input type="radio" name="music" value="basic" id="pop" required>
            <label for="pop">pop</label><br>

            <input type="radio" name="music" value="basic" id="hip_hop" required>
            <label for="hip_hop">hip hop</label><br>

            <input type="radio" name="music" value="knowledge" id="other2" required>
            <label for="other2">other</label><br>

            <input type="radio" name="music" value="relatable" id="everything" required>
            <label for="everything">I listen to just about everything</label><br>

            <input type="radio" name="music" value="whack" id="none" required>
            <label for="none">I don't listen to music</label><br>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <p>It's the end of common society as you know it. The apocalypse wreaked
            havock on everything and every day is a near-death experience. There
            is no order to the world.What do you do?</p>
            <input type="radio" name="apocalypse" value="basic" id="leader" required>
            <label for="leader">Step up as a leader figure. Somone has to do it</label><br>

            <input type="radio" name="apocalypse" value="whack" id="lone" required>
            <label for="lone">Try my best to survive on my own. People are too unpredictable</label><br>

            <input type="radio" name="apocalypse" value="knowledge" id="group" required>
            <label for="group">Join a group. Survival in numbers</label><br>

            <input type="radio" name="apocalypse" value="relatable" id="death" required>
            <label for="death">Succumb to the inevitable- death</label><br>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <p>Are you passionate?</p>
            <input type="radio" name="passion" value="whack" id="yes" required>
            <label for="yes">YES!</label><br>

            <input type="radio" name="passion" value="knowledge" id="mostly" required>
            <label for="mostly">Most of the time</label><br>

            <input type="radio" name="passion" value="whack" id="no" required>
            <label for="no">no</label><br>

            <input type="radio" name="passion" value="relatable" id="depends2" required>
            <label for="depends2">It depends</label><br>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
          <p>Of the following, which superpower would you perfer?</p>

          <input type="radio" name="superpower" value="relatable" id="invisibility" required>
          <label for="invisibility">invisibility</label><br>

          <input type="radio" name="superpower" value="whack" id="time" required>
          <label for="time">time travel</label><br>

          <input type="radio" name="superpower" value="basic" id="teleport" required>
          <label for="teleport">teleportation</label><br>

          <input type="radio" name="superpower" value="knowledge" id="psychokinesis" required>
          <label for="psychokinesis">psychokinesis</label>
        </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <p>What would you do with this new found power?</p>

            <input type="radio" name="use" value="basic" id="help" required>
            <label for="help">help others in the world to improve society</label><br>

            <input type="radio" name="use" value="knowledge" id="secret" required>
            <label for="secret">keep it to myself as a secret</label><br>

            <input type="radio" name="use" value="relatable" id="advantage" required>
            <label for="advantage">take advantage of ability to get ahead in life</label><br>

            <input type="radio" name="use" value="whack" id="terrorize" required>
            <label for="terrorize">terrorize others because why not</label><br>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <p>How interesting do <i>you</i> think you are?</p>
            <input type="radio" name="interestingness" value="basic" id="very" required>
            <label for="very">Very</label><br>

            <input type="radio" name="interestingness" value="knowledge" id="kinda" required>
            <label for="kinda">Kinda</label><br>

            <input type="radio" name="interestingness" value="relatable" id="not" required>
            <label for="not">Not really</label><br>

            <input type="radio" name="interestingness" value="whack" id="noo" required>
            <label for="noo">That's your job</label><br>
          </div>

          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
          <div class="navigate proceed btn"><img src="../images/play.png" alt="proceed"></div>
        </div>

        <div class="question">
          <div class="content">
            <p>Ready to Submit?</p>
            <input type="submit" name="submit" id="submit">

            <p id="invalid-warning">Invalid inputs. All questions required</p>
          </div>
          <div class="navigate back btn"><img src="../images/back.png" alt="back"></div>
        </div>
      </article>
    </form>

  </body>

</html>
