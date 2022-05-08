<?php


function QResult($ResultQ1, $ResultQ2, $ResultQ3, $ResultQ4, $ResultQ5)
{
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
$Qresult = QResult($_POST['answer1'], $_POST['answer2'], $_POST['answer3'], $_POST['answer4'], $_POST['answer5']);

if ($Qresult < 25) {
    $msg1 = 'Bad';
    $msg2 = "<div class='msg'>Please Contact The Patient To find out the reason for the bad evaluation On". "<br>" . " This Number : " . $_POST['phoneN'] . "</div>";
} else {
    $msg1 = 'Good';
    $msg2 = "<div class='msg'>Thank You</div>";
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Review</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        header {
            background-color: grey;
            color: maroon;
            padding: 50px;
        }

        h1 {
            text-align: center;
            font-size: 75px;

        }
        .msg {

            padding: 25px;
            font-size: 27px;
            text-align: center;
            background-color: maroon;
            color: wheat;
        }
    </style>
</head>


<body>
    <header>
        <h1>Andalusia Hospital</h1>
    </header>

    <div class="container">
        <div class="row m-5">
            <div class="col-12">
                <table class="table" style="font-size:18px;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Your Answers is :</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th>Are You satisified With the level of hygiene ?</th>
                            <th style='color: maroon'><?php echo $_POST['answer1'] ?></th>
                        </tr>

                        <tr>
                            <th>Are You satisfied with the prices of services ?</th>
                            <th style='color: maroon'><?php echo $_POST['answer2'] ?></th>
                        </tr>

                        <tr>
                            <th>Are You satisified With the nursing service ?</th>
                            <th style='color: maroon'><?php echo $_POST['answer3'] ?></th>
                        </tr>

                        <tr>
                            <th>Are You satisified With the level of doctors ?</th>
                            <th style='color: maroon'><?php echo $_POST['answer4'] ?></th>
                        </tr>

                        <tr>
                            <th>Are You satisified With the calm in the hospital ?</th>
                            <th style='color: maroon'><?php echo $_POST['answer5'] ?></th>
                        </tr>

                        <tr>
                            <th>Total Review</th>
                            <th style='color: maroon'><?php echo (isset($msg1) ? $msg1 : ''); ?></th>
                        </tr>
       
        
                    </tbody>
                </table>
                <?php echo (isset($msg2) ? $msg2 : ''); ?>

            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>