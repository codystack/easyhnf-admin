<?php
session_start();
// Connect database
include "./config/db.php";


// Delete Meal script
if (isset($_POST['delete_meal_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM meals WHERE meal_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Meal deleted";
        echo "<meta http-equiv='refresh' content='3; URL=meals'>";
    }else{
        $_SESSION['error_message'] = "Error deleting meal".mysqli_error($conn);
    }

}


// Delete User script
if (isset($_POST['delete_user_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM users WHERE user_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "User deleted";
    }else{
        $_SESSION['error_message'] = "Delete other resources linked to this user first";
    }

}



// Delete Subscription script
if (isset($_POST['delete_subscription_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM subscription WHERE subscription_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Subscription deleted";
    }else{
        $_SESSION['error_message'] = "Error deleting subscription".mysqli_error($conn);
    }

}



// Delete Custom Plan script
if (isset($_POST['delete_custom_plan_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM custom_meal_plan WHERE plan_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Custom Meal Plan deleted";
    }else{
        $_SESSION['error_message'] = "Error deleting custom meal plan".mysqli_error($conn);
    }

}