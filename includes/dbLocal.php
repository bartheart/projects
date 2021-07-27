<?php
    $servername = "local";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "projects";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if (!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
?>

<?php
    $servername = "sql211.epizy.com";
    $dbUsername = "epiz_29219091";
    $dbPassword = "RjbsOU6GDd6";
    $dbName = "epiz_29219091_projectsData";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if (!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
?>