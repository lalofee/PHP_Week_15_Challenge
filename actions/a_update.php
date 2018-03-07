
<?php

 

require_once 'db_connect.php';

 

if($_POST) {

    $tnumber = $_POST['t_number'];    

    $active = $_POST['active'];

 

    $id = $_POST['id'];

 

    $sql = "UPDATE tables SET t_number = '$tnumber', active = '$act' WHERE id = {$id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();

 

}

 

?>