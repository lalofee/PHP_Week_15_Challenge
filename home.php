
<?php
 ob_start();
 session_start();
 require_once 'actions/db_connect.php';


$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);

$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Café Crud Administration</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="custom.css" rel="stylesheet">

<style>fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
        table tr th {
            padding-top: 20px;
        }</style>

  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Café Crud</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-2">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

<h1>Administration</h1>
<h3>Welcome, <?php echo $userRow['userName']; ?>!</h3>











<div class="manageUser">

<!-- START RESERVED TABLES -->  
<fieldset>  
<h4>Reserved Tables</h4>

    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Table Number</th>                  
                <th>Active</th>            
            </tr>
        </thead>
        <tbody>

                     <?php

            $sql = "SELECT * FROM tables WHERE active = 1";

            $result = $conn->query($sql);

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>
                        <td>".$row['t_number']."</td>
                        <td>".$row['active']."</td>
                        <td>
                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>    
        </tbody>
    </table>
</fieldset>


<!-- START FREE TABLES -->
<fieldset>
    <h4>Free Tables</h4>

    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Table Number</th>                  
                <th>Active</th>            
            </tr>
        </thead>
        <tbody>

                     <?php

            $sql = "SELECT * FROM tables WHERE active = 0";

            $result = $conn->query($sql);

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>
                        <td>".$row['t_number']."</td>
                        <td>".$row['active']."</td>
                        <td>
                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>    

        </tbody>
    </table>
</fieldset>





<fieldset>
<h2>Administration of Tables</h2>
    <h4>Add Table</h4>


    <form action="actions/a_create.php" method="post">

        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Table Number</th>
                <td><input type="text" name="t_number" placeholder="Table Number" /></td>
            </tr>     

            <tr>
                <th>Active</th>
                <td><input type="text" name="active" placeholder="Active" /></td>
            </tr>

            <tr>
                <td><button type="submit">Insert Data</button></td>
                <!-- <td><a href="index.php"><button type="button">Back</button></a></td> -->
            </tr>

        </table>

    </form>
</fieldset>


</div>

      <!-- FOOTER -->
      <!-- <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>