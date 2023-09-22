<?php

    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "wildlife";

    $conn = mysqli_connect($servername,$username,$pass,$database);

    if(!$conn)
    {
        echo "Connection ";
        print "Unsuccesful";
    }

?>