<?php
    $servername = "localhost";
    $username = "root";
    $password = "UOKsp015@2019";
    $dbname = "microtech";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error."<br>");
    }

    ?>