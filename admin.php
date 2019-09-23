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
                <li><a href='admin.php' style="font-weight: bold">Requests Dashboard</a></li>
                <li><a href='edit_admin.php' style="text-decoration: none">Manage Requests</a></li>
                <li><a href='logout.php' style="text-decoration: none">Logout</a></li>
            </ul>
        </div>
        <div class="two-thirds admin-requests column">
            <h3>Reservation Requests</h3>
            <table class="u-full-width">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Zipcode</th>
                  <th>Phone</th>
                  <th>Room</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "sunrisedb";
                
                  $conn = mysqli_connect($servername, $username, $password, $dbname);

                  $sel_query='select * from request';
                  $result=mysqli_query($conn, $sel_query);

                  while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                      <td><?php echo $row["id"]; ?></td>
                      <td><?php echo $row["name"]; ?></td>
                      <td><?php echo $row["address"]; ?></td>
                      <td><?php echo $row["zipcode"]; ?></td>
                      <td><?php echo $row["phone"]; ?></td>
                      <td><?php echo $row["room"]; ?></td>
                      <td><?php echo $row["status"]; ?></td>
                    </tr>
                    <?php } ?>
              </tbody>
            </table>
        </div>
    </div>
  </body>
</html>