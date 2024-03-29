<?php
session_start();
// Connect database
include "./config/db.php";


// Delete Meal script
if (isset($_POST['delete_meal_btn'])) {

    $meal_id = $_GET['id'];

    echo $meal_id;

    $meal_id = $conn->real_escape_string($_POST['meal_id']);

    $query = "DELETE FROM meals WHERE meal_id = '$meal_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Meal deleted";
        echo "<meta http-equiv='refresh' content='3; URL=meals'>";
    }else{
        $_SESSION['error_message'] = "Error deleting meal".mysqli_error($conn);
    }

}