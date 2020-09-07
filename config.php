<?php
    $host = "sql312.epizy.com";
    $userName = "epiz_26495741";
    $password = "M7Xghh6u3XT";
    $dbName = "epiz_26495741_emails";
    // Create database connection
    $conn = new mysqli($host, $userName, $password, $dbName);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    ?>