<?php 
include('connection.php');
if( isset( $_POST["add"] ) ){
    function validateFormData( $formData ){
        $formData = trim( stripcslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }
    $username = $email = $password = "";
    if( !$_POST["username"] ){
        $nameError = "Please enter your name <br>";
    }
    else{
        $username = validateFormData( $_POST["username"] );
    }
    if( !$_POST["email"] ){
        $emailError = "Please enter your email <br>";
    }
    else{
        $email = validateFormData( $_POST["email"] );
    } 
    if( !$_POST["password"] ){
        $passwordError = "Please enter your password <br>";
    }
    else{
        $password = validateFormData( $_POST["password"] );
    }
    if( $username && $email && $password ){
        $query = "INSERT INTO users (id, username, email, password, signup_date, biography)
        VALUES (NULL, '$username', '$email', '$password', CURRENT_TIMESTAMP, NULL)";
   if( mysqli_query( $conn, $query ) ){
      echo  "<div class='alert alert-success'> New record in database!</div>";
  }  
  else{
      echo "error:". $query . "<br>" . mysqli_error($conn);
  }
    }
   
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>

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
      <h1>Register</h1>
      
        <p class="text-danger">* Required fields</p>
        <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>"
        method="post">
        <small class="text-danger">*<?php echo $nameError; ?></small>
        <input type="text" placeholder="User Name" class="form-control" name="username"><br><br>
        <small class="text-danger">*<?php echo $emailError; ?></small>
        <input type="text" placeholder="email" class="form-control" name="email"><br><br>
        <small class="text-danger">*<?php echo $passwordError; ?></small>
        <input type="password" placeholder="password" class="form-control" name="password"><br><br>
         <input type="submit" class="btn btn-success btn-lg btn-block" name="add" value="Register">
        </form><br><br>
        <p><a href="hipster.html">back home</a></p>         
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>