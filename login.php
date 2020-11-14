<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'styles.php'; ?>
	<?php include 'links.php'; ?>
</head>
<body>

	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 500px">
			<h4 class="card-title mt-3 text-center">Login Account</h4>
			
			<p>
				<a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>
				Login via Gmail </a>
				<a href="" class="btn btn-block btn-facebok"><i class="fa fa-facebook-f"></i> Login via facebook </a>
				
			</p>
			<p class="divider-text">
				<span class="bg-light">OR</span>
			</p>


			<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" > 
			
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-envelope"></i> </span>
					</div>
					<input type="email" required="" class="form-control" placeholder="Email address" name="email">
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i> </span>
					</div>
					<input type="password" required="" class="form-control" placeholder="Enter Password" name="password">
				</div>


				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Login Now</button>
					<p class="text-center">Not Have an account? <a href="signup.php">Sign Up Here</a> </p>
				</div>









			</form>
	


	<?php


               include 'connection.php';


                  if (isset($_POST['submit'])) {

                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $email_search = "select * from login where email = '$email' ";
                    $query = mysqli_query($conn,$email_search); 

                     $email_count = mysqli_num_rows($query);

                        if ($email_count) {
                          $email_pass = mysqli_fetch_assoc($query);

                          //$db_pass = $email_pass['password'];

                          $_SESSION['username'] = $email_pass['username'];
                        

                         //$pass_decode = password_verify($password, $db_pass);


                         if ($email_pass) { 
                            //echo "login Successful";
                            header("location:homepage.php");
                        } else{
                       		echo " Password Incorrect";     
                        }

                        } //pass_decode if statemnt 
                        else{
                          echo " <script> alert('Invalid Email');</script> "; 

                        }
                }
          ?>





	</article>
	</div>



</body>
</html>