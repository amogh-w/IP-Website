<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sunrisedb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ( isset($_POST['name']) && isset($_POST['address']) && isset($_POST['zip']) && isset($_POST['number']) && isset($_POST['roomName']) ) {
        $entered_name = $_POST['name'];
        $entered_address = $_POST['address'];
        $entered_zip = $_POST['zip'];
        $entered_number = $_POST['number'];
        $selected_roomName = $_POST['roomName'];
        $request_status = 'Pending';
        $id = rand(100, 999);

        $sql = "INSERT INTO request(id, name, address, zipcode, phone, room, status) VALUES ($id, '$entered_name', '$entered_address', '$entered_zip', '$entered_number', '$selected_roomName', '$request_status')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>