<?php 

session_start();
ob_start();

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
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get Started with your free account</p>
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
						<span class="input-group-text"><i class="fa fa-user"></i> </span>
					</div>
					<input type="text" required="" class="form-control" placeholder="Full name" name="username">
				</div>

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

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i> </span>
					</div>
					<input type="password" required="" class="form-control" placeholder="Comfire Password" name="cpassword">
				</div>

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
					<p class="text-center">Have an account? <a href="login.php">Log In </a> </p>
				</div>
			</form>

	<?php


               include 'connection.php';

	        if (isset($_POST['submit'])) {

	        $username = mysqli_real_escape_string($conn, $_POST['username']);
	        $email = mysqli_real_escape_string($conn, $_POST['email']);
	        $password = mysqli_real_escape_string($conn, $_POST['password']);
	        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);


	        $pass =password_hash($password, PASSWORD_BCRYPT);
	        $cpass =password_hash($cpassword, PASSWORD_BCRYPT);

	        $emailquery = "select * from login where email='$email'";
	        $query = mysqli_query($conn,$emailquery); 

	        $emailcount = mysqli_num_rows($query);

	      if ($emailcount > 0 ) {
	        //echo "email already exits";
	      }else{

	          if ($password === $cpassword) {
	            
	         $insertquery = "insert into login (username, email, password, cpassword)
	         VALUES ('$username', '$email', '$password', '$cpassword')";

	        $iquery = mysqli_query($conn,$insertquery);

		            if ($iquery) {

			            echo " <script> alert('Insert Successful'); </script> ";  
						header('location:login.php');

		      		} else {
		       				 echo " <script> alert('Not Insert Successful'); </script> ";  
		      		}
	          } else{
	            	echo " <script> alert('password are not matching'); </script> ";
	          }
	      }
}
ob_end_flush();

?>


	</article>
	</div>



</body>
</html>