
<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        h3 {
            text-align: center;
            margin-top: 75px;;
            margin-bottom: 20px;;
            color: grey;
        }

    </style>
</head>

<body>
    <header>
        <h1>Andalusia Hospital</h1>
    </header>

    <div class="container">
        <div class="row my-5">
            <div class="col-4 offset-4">
                <h3>We Need Your Opinion</h3>
                <form action="questions.php" method="post">
                    <div class="form-group">
                        <input type="text" name="phoneN" class="form-control" placeholder="Please Enter Your Phone Number">
                    </div>
                    <div style="background-color: grey;">
                        <input style="width:100%;background-color:maroon;color:white;padding:5px;font-size:20px"type="submit"value="enter" name="enter">
                    </div>
                </form>
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