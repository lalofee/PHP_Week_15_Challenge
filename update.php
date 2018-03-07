
<?php

 

require_once 'actions/db_connect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM tables WHERE id = {$id}";

    $result = $conn->query($sql);

 

    $data = $result->fetch_assoc();

 

    $conn->close();

 

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Edit User</title>

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

 

<fieldset>

    <legend>Edit Table Reservation</legend>

 

    <form action="actions/a_update.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>Table Number</th>

                <td><input type="text" name="t_number" placeholder="Table Number" value="<?php echo $data['t_number'] ?>" /></td>

            </tr>     

            <tr>

                <th>Set Active</th>

                <td><input type="text" name="active" placeholder="Active" value="<?php echo $data['active'] ?>" /></td>

            </tr>


            <tr>

                <input type="hidden" name="id" value="<?php echo $data['id']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="home.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>

 

<?php

}

?>