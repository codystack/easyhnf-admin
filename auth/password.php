<?php
// Connect database
include "./config/db.php";


//Password Change
if(isset($_POST['password_change_btn'])) {

    $newPassword    = $conn->real_escape_string($_POST['newPassword']);
    $password       = $conn->real_escape_string($_POST['password']);

    $password = sha1($_POST['password']);
    $admin_id = $_SESSION['admin_id'];
    $newPassword = sha1($_POST['newPassword']);
    $sql=mysqli_query($conn,"SELECT * FROM admin where password='$password' && admin_id='".$_SESSION['admin_id']."'");
    $num=mysqli_fetch_array($sql);
    if($num>0)
    {
        $conn=mysqli_query($conn,"UPDATE admin SET password='$newPassword' where admin_id='".$_SESSION['admin_id']."'");
        $_SESSION['success_message'] = "Password Reset Successful, Please login with the new password 👍";
        echo "<meta http-equiv='refresh' content='3; URL=logout'>";
    }
    else
    {
        $_SESSION['error_message'] = "Current password mismatch";
        echo "<meta http-equiv='refresh' content='3; URL=security'>";
    }
}
