<?php

if ($_POST) {
  if (isset($_POST)) {
    function QResult($ResultQ1, $ResultQ2, $ResultQ3, $ResultQ4, $ResultQ5)
    {
        // Question 1
        if ($_POST['answer1'] == 'Bad') {
            $ResultQ1 = 0;
        }
        if ($_POST['answer1'] == 'Good') {
            $ResultQ1 = 3;
        }
        if ($_POST['answer1'] == 'Very Good') {
            $ResultQ1 = 5;
        }
        if ($_POST['answer1'] == 'Excellent') {
            $ResultQ1 = 10;
        }
        // Question 2
        if ($_POST['answer2'] == 'Bad') {
            $ResultQ2 = 0;
        }
        if ($_POST['answer2'] == 'Good') {
            $ResultQ2 = 3;
        }
        if ($_POST['answer2'] == 'Very Good') {
            $ResultQ2 = 5;
        }
        if ($_POST['answer2'] == 'Excellent') {
            $ResultQ2 = 10;
        }
        // Question 3
        if ($_POST['answer3'] == 'Bad') {
            $ResultQ3 = 0;
        }
        if ($_POST['answer3'] == 'Good') {
            $ResultQ3 = 3;
        }
        if ($_POST['answer3'] == 'Very Good') {
            $ResultQ3 = 5;
        }
        if ($_POST['answer3'] == 'Excellent') {
            $ResultQ3 = 10;
        }
        // Question 4
        if ($_POST['answer4'] == 'Bad') {
            $ResultQ4 = 0;
        }
        if ($_POST['answer4'] == 'Good') {
            $ResultQ4 = 3;
        }
        if ($_POST['answer4'] == 'Very Good') {
            $ResultQ4 =  5;
        }
        if ($_POST['answer4'] == 'Excellent') {
            $ResultQ4 = 10;
        }
        // Question 5
        if ($_POST['answer5'] == 'Bad') {
            $ResultQ5 = 0;
        }
        if ($_POST['answer5'] == 'Good') {
            $ResultQ5 = 3;
        }
        if ($_POST['answer5'] == 'Very Good') {
            $ResultQ5 = 5;
        }
        if ($_POST['answer5'] == 'Excellent') {
            $ResultQ5 = 10;
        }
        
        $totalResult = $ResultQ1 + $ResultQ2 + $ResultQ3 + $ResultQ4 + $ResultQ5;
        return $totalResult;
    }
  }
}



?>

<!doctype html>
<html lang='en'>

<head>
  <title>Answer Questions</title>
  <!-- Required meta tags -->
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

  <!-- Bootstrap CSS -->
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  <style>
        header {
            background-color: grey;
            color:maroon;
            padding: 50px;
        }
        h1 {
            text-align: center;
            font-size: 75px;
            
        }
        button {
            margin-top: 10px;
            background-color: grey;
            color: maroon;
            padding: 10px;
            text-align: center;
            font-size: 20px;
        }
        table th {
          font-size: 20px;
        }

  </style>
</head>

<body>

<header>
        <h1>Andalusia Hospital</h1>
    </header>

  <form action="Final_Review.php" method="POST">
    <input type="hidden" name="phoneN" value="<?php echo $_POST['phoneN'] ?>">
    <table class='table text-center'>
      <thead class='thead-dark'>
        <tr>

          <th scope='col'>Questions</th>
          <th scope='col'>Bad</th>
          <th scope='col'>Good</th>
          <th scope='col'>Very Good</th>
          <th scope='col'>Excellent</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Are You satisified With the level of hygiene ?</th>
          <td><input type='radio' name='answer1' value="Bad"></td>
          <td><input type='radio' name='answer1' value="Good"></td>
          <td><input type='radio' name='answer1' value="Very Good"></td>
          <td><input type='radio' name='answer1' value="Excellent"></td>
        </tr>

        <tr>
          <th>Are You satisfied with the prices of services ?</th>
          <td><input type='radio' name='answer2' value="Bad"></td>
          <td><input type='radio' name='answer2' value="Good"></td>
          <td><input type='radio' name='answer2' value="Very Good"></td>
          <td><input type='radio' name='answer2' value="Excellent"></td>
        </tr>

        <tr>
          <th>Are You satisified With the nursing service ?</th>
          <td><input type='radio' name='answer3' value="Bad"></td>
          <td><input type='radio' name='answer3' value="Good"></td>
          <td><input type='radio' name='answer3' value="Very Good"></td>
          <td><input type='radio' name='answer3' value="Excellent"></td>
        </tr>

        <tr>
          <th>Are You satisified With the level of doctors ?</th>
          <td><input type='radio' name='answer4' value="Bad"></td>
          <td><input type='radio' name='answer4' value="Good"></td>
          <td><input type='radio' name='answer4' value="Very Good"></td>
          <td><input type='radio' name='answer4' value="Excellent"></td>
        </tr>

        <tr>
          <th>Are You satisified With the calm in the hospital ?</th>
          <td><input type='radio' name='answer5' value="Bad"></td>
          <td><input type='radio' name='answer5' value="Good"></td>
          <td><input type='radio' name='answer5' value="Very Good"></td>
          <td><input type='radio' name='answer5' value="Excellent"></td>
        </tr>
      </tbody>
    </table>
    <button style="width: 100%;" type="submit" name="review">Review</button>
  </form>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
</body>

</html>