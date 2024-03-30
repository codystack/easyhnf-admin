<?php
// Connect database
include "./config/db.php";

//New Meal Query
if (isset($_POST['add-meal-btn'])) {

    $meal_code = $conn->real_escape_string($_POST['meal_code']);
    $title = $conn->real_escape_string($_POST['title']);
    $ingredients = $conn->real_escape_string($_POST['ingredients']);
    $instructions = $conn->real_escape_string($_POST['instructions']);
    $notes = $conn->real_escape_string($_POST['notes']);
    $nutrition = $conn->real_escape_string($_POST['nutrition']);
    $short_description = $conn->real_escape_string($_POST['short_description']);
    $long_description = $conn->real_escape_string($_POST['long_description']);
    $meal_image_path = $conn->real_escape_string('upload/'.$_FILES['meal_image']['name']);

    if (file_exists($meal_image_path)){
        $meal_image_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['meal_image']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['meal_image']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }


    $check_query = "SELECT * FROM meals WHERE meal_code='$meal_code'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Meal Already Exist!";
    }else {
        $query = "INSERT INTO meals (meal_code, title, ingredients, instructions, notes, nutrition, short_description, long_description, meal_image) 
  			        VALUES('$meal_code', '$title', '$ingredients', '$instructions', '$notes', '$nutrition', '$short_description', '$long_description', '$meal_image_path')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            //copy image to upload folder
            copy($_FILES['meal_image']['tmp_name'], $meal_image_path);

            $_SESSION['success_message'] = "<strong>Success!</strong> New Meal Added";
            echo "<meta http-equiv='refresh' content='3; URL=meals'>";
        }else {
            $_SESSION['error_message'] = "Error adding meal".mysqli_error($conn);
        }
    }
}