<?php
    $servername = "localhost";

    $username = "id10650411_amoghdb";

    $password = "sasHAWbpzJShxU8";

    $dbname = "id10650411_sunrisedb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['secretKey']) ) {
        $entered_username = $_POST['username'];
        $entered_password = $_POST['password'];
        $entered_secretKey = $_POST['secretKey'];
        $id = rand(100, 999);

        if ($entered_secretKey == 'abcd1234') {
            $sql = "INSERT INTO login(id, user, pass) VALUES ($id, '$entered_username', '$entered_password')";
            if (mysqli_query($conn, $sql)) {
              header("Location: login.html");
            }
        }
    }
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <!--Font-->
    <link
      href="//fonts.googleapis.com/css?family=Raleway:400,300,600"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!--Favicon-->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!--CSS-->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/skeleton.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Scripts-->
    <script src="js/custom.js"></script>
  </head>
  <body>
    <div class="login-error-container container">
        <h3>Error, please retry or check your Secret Key!</h3>
        <a href="login.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retry</a>
    </div>
  </body>
</html>