<?php
    session_start();

    $servername = "remotemysql.com";
    $username = "CbzN4mp8xq";
    $password = "SVwRDCf5cE";
    $dbname = "CbzN4mp8xq";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ( isset($_POST['username']) && isset($_POST['password']) ) {
        $entered_username = $_POST['username'];
        $entered_password = $_POST['password'];
        
        $sql = "SELECT id FROM admin WHERE username = '$entered_username' AND password = '$entered_password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
          $_SESSION['loggedin'] = true;
          header("Location: admin.php");
        } else {
          $_SESSION['loggedin'] = false;
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
        <h3>Please check your credentials!</h3>
        <a href="login.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retry Login</a>
    </div>
  </body>
</html>
