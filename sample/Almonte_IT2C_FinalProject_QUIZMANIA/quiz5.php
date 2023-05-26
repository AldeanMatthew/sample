<?php
// Load the XML file
$xml = simplexml_load_file('mistal_IT2C_QUIZMANIA.xml/quiz5.xml');

// Convert XML object to array
$questions = [];
foreach ($xml->question as $question) {
    $questions[] = $question;
}

// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score5 = 0;
    $answeredAll = true;

    foreach ($questions as $index => $question) {
        $userAnswer = isset($_POST['answer_' . $index]) ? $_POST['answer_' . $index] : null;
        $correctAnswer = (string)$question->answer;

        if ($userAnswer === $correctAnswer) {
            $score5++;
        } elseif ($userAnswer === null) {
            $answeredAll = false;
        }
    }

    if ($answeredAll) {
        // Store the score in a session variable
        session_start();
        $_SESSION['score5'] = $score5;

        // Set a session variable to indicate that the user has submitted the quiz
        $_SESSION['quiz5_submitted'] = true;
        // Redirect back to index.php
        header("Location: index.php");
        exit();
    } else {
        $errorMessage = "Please answer all questions before submitting.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>QUIZMANIA QUIZ 5</title>
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
  <script>
    function validateForm() {
      var radios = document.getElementsByTagName('input');
      return true;
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>QUIZMANIA QUIZ 5</h1>
    <form method="post" action="" onsubmit="return validateForm();">
      <?php if (isset($errorMessage)): ?>
        <p style="color: red;"><?php echo $errorMessage; ?></p>
      <?php endif; ?>
      <?php foreach ($questions as $index => $question): ?>
        <h3 style="color: black;"><?php echo $question->text; ?></h3>
        <?php foreach ($question->options->option as $option): ?>
          <label style="color: black;">
            <input type="radio" name="answer_<?php echo $index; ?>" value="<?php echo $option; ?>">
            <?php echo $option; ?>
          </label><br>
        <?php endforeach; ?>
        <br>
      <?php endforeach; ?>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
