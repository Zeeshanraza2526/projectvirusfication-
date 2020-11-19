<?php 
include('connection.php');
$query = "INSERT INTO users (id, username, email, password, signup_date, biography) 
          VALUES (NULL,'yasir','yasir@hotmail.com','abc123',CURRENT_TIMESTAMP,'ABSJ GYSGJS HGDHF GSHGSJ JSGJFGSY');";
$result = mysqli_query( $conn, $query);          
          
          
         /* $query = "SELECT * FROM users";
$result = mysqli_query( $conn, $query);
       */
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MySql Insert</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h1>USER INFORMATION</h1>tfufhu
      <?php 
            if( mysqli_num_rows($result) > 0 ){
                echo "<table class='table table-bordered table-responsive table-striped table-condensed table-hover'><tr><th>id</th><th>username</th><th>email</th></tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>". $row["id"]."</td><td> ".$row["username"]."</td><td> ".$row["email"]."</td></tr>";
                }
                echo "</table>";
            }
            
            mysqli_close($conn);
            if( mysqli_query( $conn, $query ){
            echo "new record in database";
          }
          else{
            echo "error: ".mysqli_error($conn);
          }
                
                ?>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>