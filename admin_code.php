<?php
include('security.php');

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