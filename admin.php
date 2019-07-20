<?php
    session_start();
    if ( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false ) {
        header("Location: login.html");
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
    <div class="admin-container container">
        <div class="one-third admin-panel column">
            <ul>
                <li>Option1</li>
                <li>Option2</li>
                <li>Option3</li>
                <li>Option4</li>
                <li>Option5</li>
            </ul>
        </div>
        <div class="two-thirds admin-requests column">
            <h3>Reservation Requests</h3>
        </div>
    </div>
  </body>
</html>