<?php
    session_start();
    if ( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false ) {
        header("Location: login.html");
    }
    if(isset($_REQUEST['submit_button'])) {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "id10650411_sunrisedb";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      $sql = "UPDATE request SET status='$_POST[status_options]' WHERE id='$_POST[id_to_change]'";
      mysqli_query($conn, $sql);
      header("Location: admin.php");

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
                <li><a href='admin.php' style="text-decoration: none">Requests Dashboard</a></li>
                <li><a href='edit_admin.php' style="font-weight: bold">Manage Requests</a></li>
                <li><a href='logout.php' style="text-decoration: none">Logout</a></li>
            </ul>
        </div>
        <div class="two-thirds admin-requests column">
            <h3>Manage Requests</h3>
            <div class="row">
                <form action="" method="POST">
                    <input type="text" name="id_to_change" placeholder="Request ID" required>
                    <select name="status_options">
                        <option value="Accepted">Accept</option>
                        <option value="Declined">Decline</option>
                    </select>
                    <br>
                    <button class="button-primary" type="submit" value="submit" name="submit_button">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>