<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Get the logged-in user's username
$username = $_SESSION["username"];

// Set default scores if not set
$score1  = isset($_SESSION["score1"]) ? $_SESSION["score1"] : 0;
$score2  = isset($_SESSION["score2"]) ? $_SESSION["score2"] : 0;
$score3  = isset($_SESSION["score3"]) ? $_SESSION["score3"] : 0;
$score4  = isset($_SESSION["score4"]) ? $_SESSION["score4"] : 0;
$score5  = isset($_SESSION["score5"]) ? $_SESSION["score5"] : 0;
$score6  = isset($_SESSION["score6"]) ? $_SESSION["score6"] : 0;
$score7  = isset($_SESSION["score7"]) ? $_SESSION["score7"] : 0;
$score8  = isset($_SESSION["score8"]) ? $_SESSION["score8"] : 0;
$score9  = isset($_SESSION["score9"]) ? $_SESSION["score9"] : 0;
$score10 = isset($_SESSION["score10"]) ? $_SESSION["score10"] : 0;
$score11 = isset($_SESSION["score11"]) ? $_SESSION["score11"] : 0;
$score12 = isset($_SESSION["score12"]) ? $_SESSION["score12"] : 0;
$score13 = isset($_SESSION["score13"]) ? $_SESSION["score13"] : 0;
$score14 = isset($_SESSION["score14"]) ? $_SESSION["score14"] : 0;
$score15 = isset($_SESSION["score15"]) ? $_SESSION["score15"] : 0;
// Calculate the total score
$totalScore = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 + $score11 + $score12 + $score13 + $score14 + $score15;

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Destroy all session data
    session_destroy();

    // Redirect the user to the login page or any other desired page
    header("Location: login.php");
    exit();
	

}

// Check if the user has submitted quiz1
if (isset($_SESSION['quiz1_submitted']) && $_SESSION['quiz1_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 1: " . $score1 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz1_submitted'] = false;
}

// Check if the user has submitted quiz2
if (isset($_SESSION['quiz2_submitted']) && $_SESSION['quiz2_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 2: " . $score2 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz2_submitted'] = false;
}

// Check if the user has submitted quiz3
if (isset($_SESSION['quiz3_submitted']) && $_SESSION['quiz3_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 3: " . $score3 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz3_submitted'] = false;
}

// Check if the user has submitted quiz4
if (isset($_SESSION['quiz4_submitted']) && $_SESSION['quiz4_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 4: " . $score4 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz4_submitted'] = false;
}

// Check if the user has submitted quiz5
if (isset($_SESSION['quiz5_submitted']) && $_SESSION['quiz5_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 5: " . $score5 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz5_submitted'] = false;
}

// Check if the user has submitted quiz6
if (isset($_SESSION['quiz6_submitted']) && $_SESSION['quiz6_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 6: " . $score6 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz6_submitted'] = false;
}

// Check if the user has submitted quiz7
if (isset($_SESSION['quiz7_submitted']) && $_SESSION['quiz7_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 7: " . $score7 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz7_submitted'] = false;
}

// Check if the user has submitted quiz8
if (isset($_SESSION['quiz8_submitted']) && $_SESSION['quiz8_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 8: " . $score8 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz8_submitted'] = false;
}

// Check if the user has submitted quiz9
if (isset($_SESSION['quiz9_submitted']) && $_SESSION['quiz9_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 9: " . $score9 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz9_submitted'] = false;
}

// Check if the user has submitted quiz10
if (isset($_SESSION['quiz10_submitted']) && $_SESSION['quiz10_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 10: " . $score10 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz10_submitted'] = false;
}

// Check if the user has submitted quiz11
if (isset($_SESSION['quiz11_submitted']) && $_SESSION['quiz11_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 11: " . $score11 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz11_submitted'] = false;
}

// Check if the user has submitted quiz12
if (isset($_SESSION['quiz12_submitted']) && $_SESSION['quiz12_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 12: " . $score12 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz12_submitted'] = false;
}

// Check if the user has submitted quiz13
if (isset($_SESSION['quiz13_submitted']) && $_SESSION['quiz13_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 13: " . $score13 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz13_submitted'] = false;
}

// Check if the user has submitted quiz14
if (isset($_SESSION['quiz14_submitted']) && $_SESSION['quiz14_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 14: " . $score14 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz14_submitted'] = false;
}

// Check if the user has submitted quiz15
if (isset($_SESSION['quiz15_submitted']) && $_SESSION['quiz15_submitted']) {
    // Display the welcome back popup
    echo "<script>alert('Welcome back! Your score in Quiz 15: " . $score15 . "/10');</script>";
    
    // Reset the session variable
    $_SESSION['quiz15_submitted'] = false;
}


if ($totalScore >= 150) {
    echo '<script>';
    echo 'window.onload = function() {';
    echo 'alert("Congratulations! You perfected all the quiz!🎂");';
    echo '}';
    echo '</script>';
}




?>



<!DOCTYPE html>
<html>
<head>
    <title>QUIZMANIA</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
        /* CSS styles */
		
    .quiz-number {
      font-weight: bold;
      text-decoration: none; /* Remove underline */
    }

    /* Styling for Completed Quiz */
    .quiz-number.completed-quiz {
      color: blue;
    }

    /* Styling for Default Quiz Number */
    .quiz-number:not(.completed-quiz) {
      color: #D3D3D3;
    }
    
    /* Styling for Hovered Quiz Number */
    .quiz-number:hover {
      color: #add8e6;
    }
		
    </style>
    <script>
        window.onload = function () {
            // Code executed when the page is loaded
        };

        function closePopup() {
            // Function to close the popup
        }
		
    </script>
</head>
<body>
  <div class="background-container">
    <div class="container">
    <div class="banner">
        <img src="assets/quiz.jpg" alt="Quiz Banner">
    </div>

      <h1>QUIZMANIA</h1>
      <div class="profile-picture">
        <img src="assets/profile.png" alt="Profile Picture" style="width: 100px;">
      </div>

      <div class="progress-bar">
        <p><a class="pbtext">Total Score :</a></p><progress id="score-progress" max="150" value="<?php
echo $totalScore;
?>"><?php
echo $totalScore;
?>/150</progress>
      </div>    
      
      <h1>Welcome, <?php
echo $username;
?>!</h1>
      <p>_______________________</p>
      <h2>Select a Quiz</h2>
      <table>
                <tr>
                    <th>Quiz</th>
                    <th>Score</th>
                </tr>
                <tr>
    <td><a href="quiz.php" class="quiz-number <?php
echo ($score1 !== 0) ? 'completed-quiz' : '';
?>">Quiz 1</a></td>
    <td><?php
echo $score1;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz2.php" class="quiz-number <?php
echo ($score2 !== 0) ? 'completed-quiz' : '';
?>">Quiz 2</a></td>
    <td><?php
echo $score2;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz3.php" class="quiz-number <?php
echo ($score3 !== 0) ? 'completed-quiz' : '';
?>">Quiz 3</a></td>
    <td><?php
echo $score3;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz4.php" class="quiz-number <?php
echo ($score4 !== 0) ? 'completed-quiz' : '';
?>">Quiz 4</a></td>
    <td><?php
echo $score4;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz5.php" class="quiz-number <?php
echo ($score5 !== 0) ? 'completed-quiz' : '';
?>">Quiz 5</a></td>
    <td><?php
echo $score5;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz6.php" class="quiz-number <?php
echo ($score6 !== 0) ? 'completed-quiz' : '';
?>">Quiz 6</a></td>
    <td><?php
echo $score6;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz7.php" class="quiz-number <?php
echo ($score7 !== 0) ? 'completed-quiz' : '';
?>">Quiz 7</a></td>
    <td><?php
echo $score7;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz8.php" class="quiz-number <?php
echo ($score8 !== 0) ? 'completed-quiz' : '';
?>">Quiz 8</a></td>
    <td><?php
echo $score8;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz9.php" class="quiz-number <?php
echo ($score9 !== 0) ? 'completed-quiz' : '';
?>">Quiz 9</a></td>
    <td><?php
echo $score9;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz10.php" class="quiz-number <?php
echo ($score10 !== 0) ? 'completed-quiz' : '';
?>">Quiz 10</a></td>
    <td><?php
echo $score10;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz11.php" class="quiz-number <?php
echo ($score11 !== 0) ? 'completed-quiz' : '';
?>">Quiz 11</a></td>
    <td><?php
echo $score11;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz12.php" class="quiz-number <?php
echo ($score12 !== 0) ? 'completed-quiz' : '';
?>">Quiz 12</a></td>
    <td><?php
echo $score12;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz13.php" class="quiz-number <?php
echo ($score13 !== 0) ? 'completed-quiz' : '';
?>">Quiz 13</a></td>
    <td><?php
echo $score13;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz14.php" class="quiz-number <?php
echo ($score14 !== 0) ? 'completed-quiz' : '';
?>">Quiz 14</a></td>
    <td><?php
echo $score14;
?>/10</td>
  </tr>
  <tr>
    <td><a href="quiz15.php" class="quiz-number <?php
echo ($score15 !== 0) ? 'completed-quiz' : '';
?>">Quiz 15</a></td>
    <td><?php
echo $score15;
?>/10</td>
  </tr>
</table>

            <!-- Logout button -->
            <form action="" method="post">
                <input type="submit" name="logout" value="Logout" onclick="return confirmLogout()">
            </form>

            
        </div>
    </div>

    <script>
        function confirmLogout() {
            return confirm("Are you sure you want to logout?");
        }
    </script>
</body>
</html>
