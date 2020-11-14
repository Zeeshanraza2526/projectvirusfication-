<?php 

        session_start();

         ob_start();

        include 'connection.php';
  
        $edit_record = @$_GET['edit'];

        $query = "select * from login where id='$edit_record'";
        $run = mysqli_query($conn,$query);

        while ($row=mysqli_fetch_assoc($run)) {
          $edit_id = $row['id']; 
          $usernamea = $row['username'];
          $email = $row['email'];
          $address = $row['address'];
          $phone = $row['phone'];
          $gender = $row['gender'];
          $maritalstatus = $row['maritalstatus'];
          $nic = $row['nic'];
          $blood = $row['blood'];
          $imgfilename = $row['imgfilename'];
          $imgfilefolder = $row['imgfilefolder'];
        }
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php include 'styles.php'; ?>
  <?php include 'links.php'; ?>
  <?php include 'styleupdate.php'; ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>
<body>

<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 500px">

      <form  action="update.php?edit_form=<?php  echo $edit_id; ?> " method="post" enctype="multipart/form-data">



        <div class="container">
     <h1>Profile Update</h1> 
      <div class="avatar-upload">
          <div class="avatar-edit">
              <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="imageUpload" value="<?php echo $imgfilename;?>" />
              <label for="imageUpload"></label>
          </div>
          <div class="avatar-preview">
              <div id="imagePreview" style="background-image: url(<?php echo $imgfilefolder; ?>);">
       
              </div><br>
              <h1>ID No# <?php echo "$edit_id"; ?></h1>
          </div>
     <br><br>
      </div>
  </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" required="" class="form-control" placeholder="Full name" name="username" value="<?php echo $usernamea;?>" disabled>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
          </div>
          <input type="email" required="" class="form-control" placeholder="Email address" name="email" value="<?php echo $email;?>" disabled>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="far fa-address-card" ></i></span>
          </div>
          <input type="text" required="" class="form-control" placeholder="Address" name="address" 
          value="<?php echo $address;?>" >
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-mobile"></i> </span>
          </div>
          <input type="text" required="" class="form-control" placeholder="Mobile Number" name="mobile-number" 
          value="<?php echo $phone;?>" >
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-male"></i> </span>
          </div>
          <input type="text" required="" class="form-control" placeholder="Gender" name="gender" 
          value="<?php echo $gender;?>" >
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-users"></i> </span>
          </div>
          <input type="text" required="" class="form-control" placeholder="Marital Status" name="maritalstatus" 
          value="<?php echo $maritalstatus;?>" >
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
          </div>
          <input type="text" required="" class="form-control" placeholder="NIC" name="nic" 
          value="<?php echo $nic;?>" >
        </div>


        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-plus-square"></i> </span>
          </div>
          <input type="text" required="" class="form-control" placeholder="Blood Group" name="bloodgroup" 
          value="<?php echo $blood;?>" >
        </div>

        <br>

        <div class="form-group">
          <button type="submit" name="updatebtn" class="btn btn-primary btn-block">Update Account</button>
          
        </div>
      </form>


  </article>
  </div>

<script>
  


  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});




</script>


  </article>
  </div>

</body>
</html>


<?php

        
        include 'connection.php';
        
    if (isset($_POST['updatebtn'])) {
    
        $edit_id1 = $_GET['edit_form'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $maritalstatus = $_POST['maritalstatus'];
        $nic = $_POST['nic'];
        $blood = $_POST['bloodgroup'];
        $phone = $_POST['mobile-number'];
        $files = $_FILES['imageUpload'];

        $filenames = $files['name'];
        $fileerror = $files['error'];
        $filetmp = $files['tmp_name'];


        $fileext= explode('.', $filenames);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array('png','jpg','jpeg');

        if (in_array($filecheck, $fileextstored)) {   
          $destinationfile = 'Imageupload/'.$filenames;
          move_uploaded_file($filetmp, $destinationfile);

              $query1 = "select * from login";
                      $run = mysqli_query($conn,$query1);

                      while ($row=mysqli_fetch_assoc($run)) {
                        $file_var = $row['filename'];
                      }
        

       $updatequery = "update login set address='$address', phone='$phone', gender='$gender',maritalstatus='$maritalstatus',nic='$nic',blood='$blood',imgfilename='$filenames', imgfilefolder = '$destinationfile' where id='$edit_id1' ";

                      if (mysqli_query($conn,$updatequery)) {
                                header('location:homepage.php');      
                      }


        }

        



      

  ob_end_flush();
}
?>