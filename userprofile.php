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

  <style type="text/css">
    body {
  background: whitesmoke;
  font-family: 'Open Sans', sans-serif;
}
.container {
  max-width: 960px;
  top: 2px;
}
h1 {
  top: 0px;
  left: 50%;
  transform: translate(-50%,50%);
  position: absolute;
  font-size: 20px;
  text-align: center;
  
}

.avatar-upload {
  top: -125px;
  left: 10%;
  transform: translate(-50%,50%);
  position: absolute;
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

  </style>

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
    <article class="card-body mx-auto" style="max-width: 500%">
      <br>
<div class="container">
     <h1 style="text-align: center;">PATIENT PROFILE </h1> 
      <div class="avatar-upload">
          <div class="avatar-edit" >
              <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="image" value="<?php echo $imgfilefolder;?>" />
              
          </div>
          <div class="avatar-preview">
              <div id="imagePreview" style="background-image: url(<?php echo $imgfilefolder; ?>);">
       
              </div><br>
              <h2 style="text-align: center; font-weight: 700; ">ID No# <?php echo "$edit_id"; ?></h2>
          </div>
     
      </div>
  </div>

      <form  action="userprofile.php?edit_form=<?php  echo $edit_id; ?> " method="post" enctype="multipart/form-data"> 
        <div class="form-group input-group">
          <div class="input-group-prepend">
                <h4 style="text-transform: uppercase; font-weight: 600;">Name :</h4> <h4>&ensp; <?php echo "  $usernamea " ?> </h4>
          </div>
        </div>

        <div class="form-group input-group">
          <div class="form-group input-group">
          <div class="input-group-prepend">
                <h4 style="text-transform: uppercase; font-weight: 600;">Email:</h4><h4>&ensp; <?php echo "$email" ?></h4>
          </div>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
                <h4 style="text-transform: uppercase; font-weight: 600;">Address:</h4><h4>&ensp; <?php echo "$address" ?></h4>
          </div>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
                <h4 style="text-transform: uppercase; font-weight: 600;">Mobile Number:</h4><h4>&ensp; <?php echo "$phone" ?></h4>
          </div>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
                <h4 style="text-transform: uppercase; font-weight: 600;">Gender:</h4><h4>&ensp; <?php echo "$gender" ?></h4>
          </div>
        </div>
 
      <div class="form-group input-group">
          <div class="input-group-prepend">
                <h4 style="text-transform: uppercase; font-weight: 600;">Marital Status:</h4><h4>&ensp; <?php echo "$maritalstatus" ?></h4>
          </div>
        </div>

        <div class="form-group input-group">
          <div class="input-group-prepend">
                <h4 style="text-transform: uppercase; font-weight: 600;">NIC:</h4><h4>&ensp; <?php echo "$nic" ?></h4>
          </div>
        </div>


        <div class="form-group input-group">
          <div class="input-group-prepend">
                <h4 style="text-transform: uppercase; font-weight: 600;">Blood:</h4><h4> &ensp;<?php echo "$blood" ?></h4>
          </div>
        </div>


        <?php 
                      include 'connection.php';
                      $query1 = "select * from login";
                      $run = mysqli_query($conn,$query1);

                      while ($row=mysqli_fetch_assoc($run)) {
                        $idd = $row['id'];
                      }
        ?>
      
        <br>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-block"><a style="text-decoration: none; color: #fff; " href="update.php?edit=<?php echo $idd; ?>  "> Update Account </a> </button>
          <button type="submit" name="submit" class="btn btn-primary btn-block"><a style="text-decoration: none; color: #fff; " href="delete.php?del=<?php echo $idd; ?>  "> Delete Account  </a></button>

        </div><br><br>

        
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

<?php

ob_end_flush();

?>

</body>
</html>