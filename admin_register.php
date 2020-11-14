<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">






<div class="card shadow mb-4">
  <!-- <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div> -->

  <div class="card-body">

    <div class="table-responsive">
      <?php
      include 'dbconfig.php';
                $query = " select * from login";
                $query_run = mysqli_query($connection, $query);
      ?>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th style="text-align: center;">ID </th>
            <th style="text-align: center;">Username </th>
            <th style="text-align: center;">Email </th>
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">Phone</th>
            <th style="text-align: center;">Gender</th>
            <th style="text-align: center;">MaritalS</th>
            <th style="text-align: center;">NIC</th>
            <th style="text-align: center;">BloodG</th>
            
            <th style="text-align: center;">EDIT </th>
            <th style="text-align: center;">DELETE </th>
          </tr>
        </thead>


 <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $row['id']; ?></td>
                                <td style="text-align: center;"><?php echo $row['username']; ?></td>
                                <td style="text-align: center;"><?php echo $row['email']; ?></td>
                                <td style="text-align: center;"><?php echo $row['address']; ?></td>
                                <td style="text-align: center;"><?php echo $row['phone']; ?></td>
                                <td style="text-align: center;"><?php echo $row['gender']; ?></td>
                                <td style="text-align: center;"><?php echo $row['maritalstatus']; ?></td>
                                <td style="text-align: center;"><?php echo $row['nic']; ?></td>
                                <td style="text-align: center;"><?php echo $row['blood']; ?></td>
                                
                                <td>
                                    <form action="register_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="admin_delete.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>





      </table>

    </div>
  </div>
</div>

</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

