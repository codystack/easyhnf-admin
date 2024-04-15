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


        $sql=mysqli_query($conn,"SELECT * FROM meals where meal_id='$meal_id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE meals SET meal_code='$meal_code', title='$title', ingredients='$ingredients', instructions='$instructions', notes='$notes', nutrition='$nutrition', short_description='$short_description', long_description='$long_description' WHERE meal_id='$meal_id'");

            $_SESSION['success_message'] = "Meal updated 👍";
            echo "<meta http-equiv='refresh' content='5; URL=meals'>";
        } else {
            $_SESSION['error_message'] = "Error updating meal.".mysqli_error($conn);
        }

    }




    //Update Meal Picture
    if (isset($_POST['update_meal_picture_btn'])) {

        $meal_id = isset($_GET['meal_id']) ? $_GET['meal_id'] : '';

        $meal_id = $conn->real_escape_string($_POST['meal_id']);
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
            $conn=mysqli_query($conn,"UPDATE meals SET  meal_image='$meal_image_path' WHERE meal_id='$meal_id'");

            //copy image to upload folder
            copy($_FILES['meal_image']['tmp_name'], $meal_image_path);

            $_SESSION['success_message'] = "Meal image updated 👍";
            echo "<meta http-equiv='refresh' content='5; URL=meals'>";
        } else {
            $_SESSION['error_message'] = "Error updating meal.".mysqli_error($conn);
        }

    }




    //Update Custom Meal Plan Query
    if (isset($_POST['update-meal-plan-btn'])) {

        $plan_id = isset($_GET['plan_id']) ? $_GET['plan_id'] : '';

        $plan_id = $conn->real_escape_string($_POST['plan_id']);
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


        $sql=mysqli_query($conn,"SELECT * FROM custom_meal_plan where plan_id='$plan_id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE custom_meal_plan SET plan_title='$plan_title', monday_breakfast='$monday_breakfast', monday_breakfast_calorie_count='$monday_breakfast_calorie_count', monday_lunch='$monday_lunch', monday_lunch_calorie_count='$monday_lunch_calorie_count', monday_snack='$monday_snack', monday_snack_calorie_count='$monday_snack_calorie_count', monday_dinner='$monday_dinner', monday_dinner_calorie_count='$monday_dinner_calorie_count',
            tuesday_breakfast='$tuesday_breakfast', tuesday_breakfast_calorie_count='$tuesday_breakfast_calorie_count', tuesday_lunch='$tuesday_lunch', tuesday_lunch_calorie_count='$tuesday_lunch_calorie_count', tuesday_snack='$tuesday_snack', tuesday_snack_calorie_count='$tuesday_snack_calorie_count', tuesday_dinner='$tuesday_dinner', tuesday_dinner_calorie_count='$tuesday_dinner_calorie_count', 
            wednesday_breakfast='$wednesday_breakfast', wednesday_breakfast_calorie_count='$wednesday_breakfast_calorie_count', wednesday_lunch='$wednesday_lunch', wednesday_lunch_calorie_count='$wednesday_lunch_calorie_count', wednesday_snack='$wednesday_snack', wednesday_snack_calorie_count='$wednesday_snack_calorie_count', wednesday_dinner='$wednesday_dinner', wednesday_dinner_calorie_count='$wednesday_dinner_calorie_count',
            thursday_breakfast='$thursday_breakfast', thursday_breakfast_calorie_count='$thursday_breakfast_calorie_count', thursday_lunch='$thursday_lunch', thursday_lunch_calorie_count='$thursday_lunch_calorie_count', thursday_snack='$thursday_snack', thursday_snack_calorie_count='$thursday_snack_calorie_count', thursday_dinner='$thursday_dinner', thursday_dinner_calorie_count='$thursday_dinner_calorie_count',
            friday_breakfast='$friday_breakfast', friday_breakfast_calorie_count='$friday_breakfast_calorie_count', friday_lunch='$friday_lunch', friday_lunch_calorie_count='$friday_lunch_calorie_count', friday_snack='$friday_snack', friday_snack_calorie_count='$friday_snack_calorie_count', friday_dinner='$friday_dinner', friday_dinner_calorie_count='$friday_dinner_calorie_count',
            saturday_breakfast='$saturday_breakfast', saturday_breakfast_calorie_count='$saturday_breakfast_calorie_count', saturday_lunch='$saturday_lunch', saturday_lunch_calorie_count='$saturday_lunch_calorie_count', saturday_snack='$saturday_snack', saturday_snack_calorie_count='$saturday_snack_calorie_count', saturday_dinner='$saturday_dinner', saturday_dinner_calorie_count='$saturday_dinner_calorie_count',
            sunday_breakfast='$sunday_breakfast', sunday_breakfast_calorie_count='$sunday_breakfast_calorie_count', sunday_lunch='$sunday_lunch', sunday_lunch_calorie_count='$sunday_lunch_calorie_count', sunday_snack='$sunday_snack', sunday_snack_calorie_count='$sunday_snack_calorie_count', sunday_dinner='$sunday_dinner', sunday_dinner_calorie_count='$sunday_dinner_calorie_count' WHERE plan_id='$plan_id'");

            $_SESSION['success_message'] = "Meal plan updated 👍";
            echo "<meta http-equiv='refresh' content='5; URL=meal-plans'>";
        } else {
            $_SESSION['error_message'] = "Error updating meal plan.".mysqli_error($conn);
        }

    }