<?php
// Connect database
include "./config/db.php";
    

    //Update Meal Query
    if (isset($_POST['update_meal_btn'])) {

        $meal_id = isset($_GET['meal_id']) ? $_GET['meal_id'] : '';

        $meal_id = $conn->real_escape_string($_POST['meal_id']);
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


        $sql=mysqli_query($conn,"SELECT * FROM meals where meal_id='$meal_id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE meals SET meal_code='$meal_code', title='$title', ingredients='$ingredients', instructions='$instructions', notes='$notes', nutrition='$nutrition', short_description='$short_description', long_description='$long_description', meal_image='$meal_image_path' WHERE meal_id='$meal_id'");

            //copy image to upload folder
            copy($_FILES['meal_image']['tmp_name'], $meal_image_path);

            $_SESSION['success_message'] = "Meal updated 👍";
            echo "<meta http-equiv='refresh' content='5; URL=meals'>";
        } else {
            $_SESSION['error_message'] = "Error updating meal.".mysqli_error($conn);
        }

    }