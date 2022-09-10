

<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <link href="results.css" type="text/css" rel="stylesheet"/>
    <link href="header.css" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <script src="results.js"></script>
    <title>Your Results</title>
  </head>

  <body>
    <?php

    $valid = true;
    $allQuestionList = array(
      "name", "perferedName", "gender", "birthday", "email", "address", "meme", "vibe", "-troversion",
      "energy", "music", "apocalypse", "passion", "superpower", "use", "interestingness"
    );
    $quizQuestionList = array(
      "meme",
      "vibe",
      "-troversion",
      "music",
      "apocalypse",
      "passion",
      "superpower",
      "use",
      "interestingness"
    );
    $genderOptions = array("male", "female", "other");
    $validOptions = array("whack", "knowledge", "relatable", "basic");
    // var_dump($_POST);

    foreach($allQuestionList as $question) {
      if(!isset($_POST[$question])) {
        $valid = false;
      }
    }

    if($valid) {
      if(!in_array($_POST["gender"], $genderOptions)) {
        $valid = false;
      }
      $email = $_POST["email"];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid = false;
      }
      $energy = $_POST["energy"];
      if(!filter_var($energy, FILTER_VALIDATE_INT)) {
        $valid = false;
      }
      foreach($quizQuestionList as $question) {
        if(!in_array($_POST[$question], $validOptions)) {
          $valid = false;
        }
      }
      if(!strtotime($_POST["birthday"])) {
        $valid = false;
      }
    }






    require_once "header.php"
     ?>
      <h2>Your interestingness</h2>


      <?php
      if($valid) {
        echo "<article>

        <h3>Your Info</h3>";



        $name = $_POST["name"];
        echo "<p>Name: " . htmlspecialchars($name) . "</p>";

        $nickname = $_POST["perferedName"];
        echo "<p>Perfered name: " . htmlspecialchars($nickname) . "</p>";

        $age = abs(strtotime(date("y-m-d")) - strtotime($_POST["birthday"])) / (365*60*60*24) ;
        $intAge = (int)$age;
        echo "<p>Age: " . htmlspecialchars($intAge) . "</p>";

        $email = $_POST["email"];
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";

        $gender = $_POST["gender"];
        echo "<p>Gender: " . htmlspecialchars($gender) . "</p>";

        $address = $_POST["address"];
        echo "<p>Address: " . htmlspecialchars($address) . "</p>";



        echo "</article>";







        echo "<article>";



        $basic = 0;
        $whack = 0;
        $relatable = 0;
        $knowledge = 0;
        foreach($_POST as $category => $value) {

          if ($value === "basic"){
            $basic++;
          }
          elseif ($value === "whack"){
            $whack++;
          }
          elseif ($value === "relatable"){
            $relatable++;
          }
          elseif ($value === "knowledge"){
            $knowledge++;
          }
          // echo "Whack: $whack, Basic: $basic, Relatable: $relatable, Knowledge: $knowledge <br>";
        }

        if ($_POST["energy"]>=8) {
          $basic++;
        }
        elseif ($_POST["energy"]==1) {
          $whack++;
        }
        elseif ($_POST["energy"]<5) {
          $relatable++;
        }
        elseif ($_POST["energy"]>=5) {
          $knowledge++;
        }
        // echo "Whack: $whack, Basic: $basic, Relatable: $relatable, Knowledge: $knowledge <br>";
        echo "<div class=\"question\">";
        if ($basic>$whack && $basic>$relatable && $basic>$knowledge) {
          echo "<h3>You have Basic interestingness!</h3>";
          echo "<p>You're basic, most people would probably share the same
          interests with you. You're a safe level of interesting that everyone
          would want in their lives.</p>";
        }
        elseif ($whack>$basic && $whack>$relatable && $whack>$knowledge) {
          echo "<h3>You have Whack interestingness!</h3>";
          echo "<p>You're extremely unique and different. You probably peak most
          people's intersets out of curiosity. Your overall interestingness can
          either stand out or be avoided by some people. </p>";
        }
        elseif ($relatable>$basic && $relatable>$whack && $relatable>$knowledge) {
          echo "<h3>You have Relatable interestingness!</h3>";
          echo "<p>Honestly same lol. Your interestingness flourishes in different
          ways depending on the people you're with. Although not the most positive
          thinker, it is part of the charm!</p>";
        }
        elseif ($knowledge>$basic && $knowledge>$whack && $knowledge>$relatable) {
          echo "<h3>You have Knowledgeable interestingness!</h3>";
          echo "<p>You know a lot and that makes you interesting. Whether its about
          pop culture or a specific academic topic, it's your brain that most
          find interesting.</p>";
        }
        else {
          echo "<h3>You're interesting in multiple different aspects!</h3>";
          echo "<p>You are like a hybrid of multiple different categories! As a
          result, you pique the interests of a lot of different people and are
          most likely an all-rounder type of person. </p>";
        }
        echo "</div>";
        echo "</article>";

        echo "<article>";
        echo "<div class=\"question\">";
        echo "<h3>Your Stats</h3>";
        $basicPercent = $basic/10*100;
        $whackPercent = $whack/10*100;
        $relatablePercent = $relatable/10*100;
        $knowledgePercent = $knowledge/10*100;
        echo "<p>Basic Interestingness: $basicPercent%</p>";
        echo "<p>Whack Interestingness: $whackPercent%</p>";
        echo "<p>Relatable Interestingness: $relatablePercent%</p>";
        echo "<p>Knowledgeable Interestingness: $knowledgePercent%</p>";

        echo "</div>";
        echo "</article>";
      }

      else {
        echo "<article>";
        echo "<h3>Error</h3>";
        echo "<p>Invalid responses</p>";
        echo "<button id=\"previousPage\">Back</button>";
        echo "</article>";
      }


       ?>

  </body>

</html>
