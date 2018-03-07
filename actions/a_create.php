<?php

require_once 'db_connect.php';

if($_POST) {

    $tnumber = $_POST['t_number'];    

    $active = $_POST['active'];

 

    $sql = "INSERT INTO tables (t_number, active) VALUES ('$tnumber', '$active')";

    if($conn->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $conn->connect_error;

    }

 

    $conn->close();

}

 

?>