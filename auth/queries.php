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



//Custom Meal Plan Query
if (isset($_POST['add-meal-plan-btn'])) {

    $userID = $conn->real_escape_string($_POST['userID']);
    $plan_title = $conn->real_escape_string($_POST['plan_title']);
    $monday_breakfast = $conn->real_escape_string($_POST['monday_breakfast']);
    $monday_breakfast_calorie_count = $conn->real_escape_string($_POST['monday_breakfast_calorie_count']);
    $monday_lunch = $conn->real_escape_string($_POST['monday_lunch']);
    $monday_lunch_calorie_count = $conn->real_escape_string($_POST['monday_lunch_calorie_count']);
    $monday_snack = $conn->real_escape_string($_POST['monday_snack']);
    $monday_snack_calorie_count = $conn->real_escape_string($_POST['monday_snack_calorie_count']);
    $monday_dinner = $conn->real_escape_string($_POST['monday_dinner']);
    $monday_dinner_calorie_count = $conn->real_escape_string($_POST['monday_dinner_calorie_count']);
    $tuesday_breakfast = $conn->real_escape_string($_POST['tuesday_breakfast']);
    $tuesday_breakfast_calorie_count = $conn->real_escape_string($_POST['tuesday_breakfast_calorie_count']);
    $tuesday_lunch = $conn->real_escape_string($_POST['tuesday_lunch']);
    $tuesday_lunch_calorie_count = $conn->real_escape_string($_POST['tuesday_lunch_calorie_count']);
    $tuesday_snack = $conn->real_escape_string($_POST['tuesday_snack']);
    $tuesday_snack_calorie_count = $conn->real_escape_string($_POST['tuesday_snack_calorie_count']);
    $tuesday_dinner = $conn->real_escape_string($_POST['tuesday_dinner']);
    $tuesday_dinner_calorie_count = $conn->real_escape_string($_POST['tuesday_dinner_calorie_count']);
    $wednesday_breakfast = $conn->real_escape_string($_POST['wednesday_breakfast']);
    $wednesday_breakfast_calorie_count = $conn->real_escape_string($_POST['wednesday_breakfast_calorie_count']);
    $wednesday_lunch = $conn->real_escape_string($_POST['wednesday_lunch']);
    $wednesday_lunch_calorie_count = $conn->real_escape_string($_POST['wednesday_lunch_calorie_count']);
    $wednesday_snack = $conn->real_escape_string($_POST['wednesday_snack']);
    $wednesday_snack_calorie_count = $conn->real_escape_string($_POST['wednesday_snack_calorie_count']);
    $wednesday_dinner = $conn->real_escape_string($_POST['wednesday_dinner']);
    $wednesday_dinner_calorie_count = $conn->real_escape_string($_POST['wednesday_dinner_calorie_count']);
    $thursday_breakfast = $conn->real_escape_string($_POST['thursday_breakfast']);
    $thursday_breakfast_calorie_count = $conn->real_escape_string($_POST['thursday_breakfast_calorie_count']);
    $thursday_lunch = $conn->real_escape_string($_POST['thursday_lunch']);
    $thursday_lunch_calorie_count = $conn->real_escape_string($_POST['thursday_lunch_calorie_count']);
    $thursday_snack = $conn->real_escape_string($_POST['thursday_snack']);
    $thursday_snack_calorie_count = $conn->real_escape_string($_POST['thursday_snack_calorie_count']);
    $thursday_dinner = $conn->real_escape_string($_POST['thursday_dinner']);
    $thursday_dinner_calorie_count = $conn->real_escape_string($_POST['thursday_dinner_calorie_count']);
    $friday_breakfast = $conn->real_escape_string($_POST['friday_breakfast']);
    $friday_breakfast_calorie_count = $conn->real_escape_string($_POST['friday_breakfast_calorie_count']);
    $friday_lunch = $conn->real_escape_string($_POST['friday_lunch']);
    $friday_lunch_calorie_count = $conn->real_escape_string($_POST['friday_lunch_calorie_count']);
    $friday_snack = $conn->real_escape_string($_POST['friday_snack']);
    $friday_snack_calorie_count = $conn->real_escape_string($_POST['friday_snack_calorie_count']);
    $friday_dinner = $conn->real_escape_string($_POST['friday_dinner']);
    $friday_dinner_calorie_count = $conn->real_escape_string($_POST['friday_dinner_calorie_count']);
    $saturday_breakfast = $conn->real_escape_string($_POST['saturday_breakfast']);
    $saturday_breakfast_calorie_count = $conn->real_escape_string($_POST['saturday_breakfast_calorie_count']);
    $saturday_lunch = $conn->real_escape_string($_POST['saturday_lunch']);
    $saturday_lunch_calorie_count = $conn->real_escape_string($_POST['saturday_lunch_calorie_count']);
    $saturday_snack = $conn->real_escape_string($_POST['saturday_snack']);
    $saturday_snack_calorie_count = $conn->real_escape_string($_POST['saturday_snack_calorie_count']);
    $saturday_dinner = $conn->real_escape_string($_POST['saturday_dinner']);
    $saturday_dinner_calorie_count = $conn->real_escape_string($_POST['saturday_dinner_calorie_count']);
    $sunday_breakfast = $conn->real_escape_string($_POST['sunday_breakfast']);
    $sunday_breakfast_calorie_count = $conn->real_escape_string($_POST['sunday_breakfast_calorie_count']);
    $sunday_lunch = $conn->real_escape_string($_POST['sunday_lunch']);
    $sunday_lunch_calorie_count = $conn->real_escape_string($_POST['sunday_lunch_calorie_count']);
    $sunday_snack = $conn->real_escape_string($_POST['sunday_snack']);
    $sunday_snack_calorie_count = $conn->real_escape_string($_POST['sunday_snack_calorie_count']);
    $sunday_dinner = $conn->real_escape_string($_POST['sunday_dinner']);
    $sunday_dinner_calorie_count = $conn->real_escape_string($_POST['sunday_dinner_calorie_count']);
    $status = $conn->real_escape_string($_POST['status']);


    $check_query = "SELECT * FROM custom_meal_plan WHERE plan_title='$plan_title'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Meal Plan Already Exist!";
    }else {
        $query = "INSERT INTO custom_meal_plan (userID, plan_title, monday_breakfast, monday_breakfast_calorie_count, monday_lunch, monday_lunch_calorie_count, monday_snack, monday_snack_calorie_count, monday_dinner, monday_dinner_calorie_count, tuesday_breakfast, tuesday_breakfast_calorie_count, tuesday_lunch, tuesday_lunch_calorie_count, tuesday_snack, tuesday_snack_calorie_count, tuesday_dinner, tuesday_dinner_calorie_count, wednesday_breakfast, wednesday_breakfast_calorie_count, wednesday_lunch, wednesday_lunch_calorie_count, wednesday_snack, wednesday_snack_calorie_count, wednesday_dinner, wednesday_dinner_calorie_count, thursday_breakfast, thursday_breakfast_calorie_count, thursday_lunch, thursday_lunch_calorie_count, thursday_snack, thursday_snack_calorie_count, thursday_dinner, thursday_dinner_calorie_count, friday_breakfast, friday_breakfast_calorie_count, friday_lunch, friday_lunch_calorie_count, friday_snack, friday_snack_calorie_count, friday_dinner, friday_dinner_calorie_count, saturday_breakfast, saturday_breakfast_calorie_count, saturday_lunch, saturday_lunch_calorie_count, saturday_snack, saturday_snack_calorie_count, saturday_dinner, saturday_dinner_calorie_count, sunday_breakfast, sunday_breakfast_calorie_count, sunday_lunch, sunday_lunch_calorie_count, sunday_snack, sunday_snack_calorie_count, sunday_dinner, sunday_dinner_calorie_count, status) 
  			        VALUES('$userID', '$plan_title', '$monday_breakfast', '$monday_breakfast_calorie_count', '$monday_lunch', '$monday_lunch_calorie_count', '$monday_snack', '$monday_snack_calorie_count', '$monday_dinner', '$monday_dinner_calorie_count', '$tuesday_breakfast', '$tuesday_breakfast_calorie_count', '$tuesday_lunch', '$tuesday_lunch_calorie_count', '$tuesday_snack', '$tuesday_snack_calorie_count', '$tuesday_dinner', '$tuesday_dinner_calorie_count', '$wednesday_breakfast', '$wednesday_breakfast_calorie_count', '$wednesday_lunch', '$wednesday_lunch_calorie_count', '$wednesday_snack', '$wednesday_snack_calorie_count', '$wednesday_dinner', '$wednesday_dinner_calorie_count', '$thursday_breakfast', '$thursday_breakfast_calorie_count', '$thursday_lunch', '$thursday_lunch_calorie_count', '$thursday_snack', '$thursday_snack_calorie_count', '$thursday_dinner', '$thursday_dinner_calorie_count', '$friday_breakfast', '$friday_breakfast_calorie_count', '$friday_lunch', '$friday_lunch_calorie_count', '$friday_snack', '$friday_snack_calorie_count', '$friday_dinner', '$friday_dinner_calorie_count', '$saturday_breakfast', '$saturday_breakfast_calorie_count', '$saturday_lunch', '$saturday_lunch_calorie_count', '$saturday_snack', '$saturday_snack_calorie_count', '$saturday_dinner', '$saturday_dinner_calorie_count', '$sunday_breakfast', '$sunday_breakfast_calorie_count', '$sunday_lunch', '$sunday_lunch_calorie_count', '$sunday_snack', '$sunday_snack_calorie_count', '$sunday_dinner', '$sunday_dinner_calorie_count', 'Active')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['success_message'] = "<strong>Success!</strong> New Meal Plan Added";
            echo "<meta http-equiv='refresh' content='3; URL=meal-plan-custom'>";
        }else {
            $_SESSION['error_message'] = "Error adding meal plan".mysqli_error($conn);
        }
    }
}



//New Meal Query
if (isset($_POST['add-diet-btn'])) {

    $title = $conn->real_escape_string($_POST['title']);
    $price = $conn->real_escape_string($_POST['price']);

    $check_query = "SELECT * FROM basic_diet WHERE title='$title'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Diet Already Exist!";
    }else {
        $query = "INSERT INTO basic_diet (title, price) 
  			        VALUES('$title', '$price')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['success_message'] = "<strong>Success!</strong> New Diet Added";
            echo "<meta http-equiv='refresh' content='3; URL=basic-diets'>";
        }else {
            $_SESSION['error_message'] = "Error adding diet".mysqli_error($conn);
        }
    }
}




//Basic Meal Plan Query
if (isset($_POST['add-basic-meal-plan-btn'])) {

    $diet = $conn->real_escape_string($_POST['diet']);
    $plan_title = $conn->real_escape_string($_POST['plan_title']);
    $monday_breakfast = $conn->real_escape_string($_POST['monday_breakfast']);
    $monday_breakfast_calorie_count = $conn->real_escape_string($_POST['monday_breakfast_calorie_count']);
    $monday_lunch = $conn->real_escape_string($_POST['monday_lunch']);
    $monday_lunch_calorie_count = $conn->real_escape_string($_POST['monday_lunch_calorie_count']);
    $monday_snack = $conn->real_escape_string($_POST['monday_snack']);
    $monday_snack_calorie_count = $conn->real_escape_string($_POST['monday_snack_calorie_count']);
    $monday_dinner = $conn->real_escape_string($_POST['monday_dinner']);
    $monday_dinner_calorie_count = $conn->real_escape_string($_POST['monday_dinner_calorie_count']);
    $tuesday_breakfast = $conn->real_escape_string($_POST['tuesday_breakfast']);
    $tuesday_breakfast_calorie_count = $conn->real_escape_string($_POST['tuesday_breakfast_calorie_count']);
    $tuesday_lunch = $conn->real_escape_string($_POST['tuesday_lunch']);
    $tuesday_lunch_calorie_count = $conn->real_escape_string($_POST['tuesday_lunch_calorie_count']);
    $tuesday_snack = $conn->real_escape_string($_POST['tuesday_snack']);
    $tuesday_snack_calorie_count = $conn->real_escape_string($_POST['tuesday_snack_calorie_count']);
    $tuesday_dinner = $conn->real_escape_string($_POST['tuesday_dinner']);
    $tuesday_dinner_calorie_count = $conn->real_escape_string($_POST['tuesday_dinner_calorie_count']);
    $wednesday_breakfast = $conn->real_escape_string($_POST['wednesday_breakfast']);
    $wednesday_breakfast_calorie_count = $conn->real_escape_string($_POST['wednesday_breakfast_calorie_count']);
    $wednesday_lunch = $conn->real_escape_string($_POST['wednesday_lunch']);
    $wednesday_lunch_calorie_count = $conn->real_escape_string($_POST['wednesday_lunch_calorie_count']);
    $wednesday_snack = $conn->real_escape_string($_POST['wednesday_snack']);
    $wednesday_snack_calorie_count = $conn->real_escape_string($_POST['wednesday_snack_calorie_count']);
    $wednesday_dinner = $conn->real_escape_string($_POST['wednesday_dinner']);
    $wednesday_dinner_calorie_count = $conn->real_escape_string($_POST['wednesday_dinner_calorie_count']);
    $thursday_breakfast = $conn->real_escape_string($_POST['thursday_breakfast']);
    $thursday_breakfast_calorie_count = $conn->real_escape_string($_POST['thursday_breakfast_calorie_count']);
    $thursday_lunch = $conn->real_escape_string($_POST['thursday_lunch']);
    $thursday_lunch_calorie_count = $conn->real_escape_string($_POST['thursday_lunch_calorie_count']);
    $thursday_snack = $conn->real_escape_string($_POST['thursday_snack']);
    $thursday_snack_calorie_count = $conn->real_escape_string($_POST['thursday_snack_calorie_count']);
    $thursday_dinner = $conn->real_escape_string($_POST['thursday_dinner']);
    $thursday_dinner_calorie_count = $conn->real_escape_string($_POST['thursday_dinner_calorie_count']);
    $friday_breakfast = $conn->real_escape_string($_POST['friday_breakfast']);
    $friday_breakfast_calorie_count = $conn->real_escape_string($_POST['friday_breakfast_calorie_count']);
    $friday_lunch = $conn->real_escape_string($_POST['friday_lunch']);
    $friday_lunch_calorie_count = $conn->real_escape_string($_POST['friday_lunch_calorie_count']);
    $friday_snack = $conn->real_escape_string($_POST['friday_snack']);
    $friday_snack_calorie_count = $conn->real_escape_string($_POST['friday_snack_calorie_count']);
    $friday_dinner = $conn->real_escape_string($_POST['friday_dinner']);
    $friday_dinner_calorie_count = $conn->real_escape_string($_POST['friday_dinner_calorie_count']);
    $saturday_breakfast = $conn->real_escape_string($_POST['saturday_breakfast']);
    $saturday_breakfast_calorie_count = $conn->real_escape_string($_POST['saturday_breakfast_calorie_count']);
    $saturday_lunch = $conn->real_escape_string($_POST['saturday_lunch']);
    $saturday_lunch_calorie_count = $conn->real_escape_string($_POST['saturday_lunch_calorie_count']);
    $saturday_snack = $conn->real_escape_string($_POST['saturday_snack']);
    $saturday_snack_calorie_count = $conn->real_escape_string($_POST['saturday_snack_calorie_count']);
    $saturday_dinner = $conn->real_escape_string($_POST['saturday_dinner']);
    $saturday_dinner_calorie_count = $conn->real_escape_string($_POST['saturday_dinner_calorie_count']);
    $sunday_breakfast = $conn->real_escape_string($_POST['sunday_breakfast']);
    $sunday_breakfast_calorie_count = $conn->real_escape_string($_POST['sunday_breakfast_calorie_count']);
    $sunday_lunch = $conn->real_escape_string($_POST['sunday_lunch']);
    $sunday_lunch_calorie_count = $conn->real_escape_string($_POST['sunday_lunch_calorie_count']);
    $sunday_snack = $conn->real_escape_string($_POST['sunday_snack']);
    $sunday_snack_calorie_count = $conn->real_escape_string($_POST['sunday_snack_calorie_count']);
    $sunday_dinner = $conn->real_escape_string($_POST['sunday_dinner']);
    $sunday_dinner_calorie_count = $conn->real_escape_string($_POST['sunday_dinner_calorie_count']);
    $status = $conn->real_escape_string($_POST['status']);


    $check_query = "SELECT * FROM basic_meal_plan WHERE plan_title='$plan_title'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Meal Plan Already Exist!";
    }else {
        $query = "INSERT INTO basic_meal_plan (diet, plan_title, monday_breakfast, monday_breakfast_calorie_count, monday_lunch, monday_lunch_calorie_count, monday_snack, monday_snack_calorie_count, monday_dinner, monday_dinner_calorie_count, tuesday_breakfast, tuesday_breakfast_calorie_count, tuesday_lunch, tuesday_lunch_calorie_count, tuesday_snack, tuesday_snack_calorie_count, tuesday_dinner, tuesday_dinner_calorie_count, wednesday_breakfast, wednesday_breakfast_calorie_count, wednesday_lunch, wednesday_lunch_calorie_count, wednesday_snack, wednesday_snack_calorie_count, wednesday_dinner, wednesday_dinner_calorie_count, thursday_breakfast, thursday_breakfast_calorie_count, thursday_lunch, thursday_lunch_calorie_count, thursday_snack, thursday_snack_calorie_count, thursday_dinner, thursday_dinner_calorie_count, friday_breakfast, friday_breakfast_calorie_count, friday_lunch, friday_lunch_calorie_count, friday_snack, friday_snack_calorie_count, friday_dinner, friday_dinner_calorie_count, saturday_breakfast, saturday_breakfast_calorie_count, saturday_lunch, saturday_lunch_calorie_count, saturday_snack, saturday_snack_calorie_count, saturday_dinner, saturday_dinner_calorie_count, sunday_breakfast, sunday_breakfast_calorie_count, sunday_lunch, sunday_lunch_calorie_count, sunday_snack, sunday_snack_calorie_count, sunday_dinner, sunday_dinner_calorie_count, status) 
  			        VALUES('$diet', '$plan_title', '$monday_breakfast', '$monday_breakfast_calorie_count', '$monday_lunch', '$monday_lunch_calorie_count', '$monday_snack', '$monday_snack_calorie_count', '$monday_dinner', '$monday_dinner_calorie_count', '$tuesday_breakfast', '$tuesday_breakfast_calorie_count', '$tuesday_lunch', '$tuesday_lunch_calorie_count', '$tuesday_snack', '$tuesday_snack_calorie_count', '$tuesday_dinner', '$tuesday_dinner_calorie_count', '$wednesday_breakfast', '$wednesday_breakfast_calorie_count', '$wednesday_lunch', '$wednesday_lunch_calorie_count', '$wednesday_snack', '$wednesday_snack_calorie_count', '$wednesday_dinner', '$wednesday_dinner_calorie_count', '$thursday_breakfast', '$thursday_breakfast_calorie_count', '$thursday_lunch', '$thursday_lunch_calorie_count', '$thursday_snack', '$thursday_snack_calorie_count', '$thursday_dinner', '$thursday_dinner_calorie_count', '$friday_breakfast', '$friday_breakfast_calorie_count', '$friday_lunch', '$friday_lunch_calorie_count', '$friday_snack', '$friday_snack_calorie_count', '$friday_dinner', '$friday_dinner_calorie_count', '$saturday_breakfast', '$saturday_breakfast_calorie_count', '$saturday_lunch', '$saturday_lunch_calorie_count', '$saturday_snack', '$saturday_snack_calorie_count', '$saturday_dinner', '$saturday_dinner_calorie_count', '$sunday_breakfast', '$sunday_breakfast_calorie_count', '$sunday_lunch', '$sunday_lunch_calorie_count', '$sunday_snack', '$sunday_snack_calorie_count', '$sunday_dinner', '$sunday_dinner_calorie_count', 'Active')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            $_SESSION['success_message'] = "<strong>Success!</strong> New Meal Plan Added";
            echo "<meta http-equiv='refresh' content='3; URL=basic-meal-plans'>";
        }else {
            $_SESSION['error_message'] = "Error adding meal plan".mysqli_error($conn);
        }
    }
}