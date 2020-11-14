<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                include 'dbconfig.php';
                
                $query = "SELECT * FROM login WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="admin_code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="<?php echo $row['address'] ?>"
                                    class="form-control" placeholder="Enter Address">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" value="<?php echo $row['phone'] ?>"
                                    class="form-control" placeholder="Enter Phone">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" name="gender" value="<?php echo $row['gender'] ?>"
                                    class="form-control" placeholder="Enter Gender">
                            </div>
                            <div class="form-group">
                                <label>Marital Status</label>
                                <input type="text" name="maritalstatus" value="<?php echo $row['maritalstatus'] ?>"
                                    class="form-control" placeholder="Enter Mritalstatus">
                            </div>
                            <div class="form-group">
                                <label>CNIC Number</label>
                                <input type="text" name="nic" value="<?php echo $row['nic'] ?>"
                                    class="form-control" placeholder="Enter NIC">
                            </div>
                            <div class="form-group">
                                <label>Blood Group</label>
                                <input type="text" name="blood" value="<?php echo $row['blood'] ?>"
                                    class="form-control" placeholder="Enter blood Group">
                            </div>
                            <!-- <div class="form-group">
                                <label>Password</label>
                                <input type="file" name="imgfilename" value="<?php echo $row['imgfilename'] ?>"
                                    class="form-control" placeholder="Enter imgfilename">
                            </div> -->
                            

                            <a href="admin_register.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>

<?php

//include('security.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $maritalstatus = $_POST['maritalstatus'];
    $nic = $_POST['nic'];
    $blood = $_POST['blood'];
    $phone = $_POST['phone'];


    $query = "UPDATE login SET username='$username', email='$email', address='$address', phone='$phone', gender='$gender',maritalstatus='$maritalstatus',nic='$nic',blood='$blood' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: admin_register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: admin_register.php'); 
    }
}

?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

