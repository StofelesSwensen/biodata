<?php
    // Database connection
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "biodata";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query
    $sql = "SELECT * FROM stofeles";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data from each row
        while ($row = mysqli_fetch_assoc($result)) {
            $ic = $row["ic"];
            $name = $row["name"];
            $father = $row["father"];
            $mother = $row["mother"];
            $address = $row["address"];
            $phone = $row["phone"];
            $hobby = $row["hobby"];
            $age = $row["age"];
            $gender = $row["gender"];
            $email = $row["email"];
            $images = $row["images"];
            $secondary = $row["secondary"];
            $diploma = $row["diploma"];
            $degree = $row["degree"];
        }
    } else {
        echo "No records found";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>