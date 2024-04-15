<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/update.php";

    $plan_id = $_GET['id'];

    $select_query = "SELECT * FROM custom_meal_plan WHERE plan_id='$plan_id'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $plan_id = $row['plan_id'];
            $plan_title = $row['plan_title'];
            $monday_breakfast = $row['monday_breakfast'];
            $monday_breakfast_calorie_count = $row['monday_breakfast_calorie_count'];
            $monday_lunch = $row['monday_lunch'];
            $monday_lunch_calorie_count = $row['monday_lunch_calorie_count'];
            $monday_snack = $row['monday_snack'];
            $monday_snack_calorie_count = $row['monday_snack_calorie_count'];
            $monday_dinner = $row['monday_dinner'];
            $monday_dinner_calorie_count = $row['monday_dinner_calorie_count'];
            $tuesday_breakfast = $row['tuesday_breakfast'];
            $tuesday_breakfast_calorie_count = $row['tuesday_breakfast_calorie_count'];
            $tuesday_lunch = $row['tuesday_lunch'];
            $tuesday_lunch_calorie_count = $row['tuesday_lunch_calorie_count'];
            $tuesday_snack = $row['tuesday_snack'];
            $tuesday_snack_calorie_count = $row['tuesday_snack_calorie_count'];
            $tuesday_dinner = $row['tuesday_dinner'];
            $tuesday_dinner_calorie_count = $row['tuesday_dinner_calorie_count'];
            $wednesday_breakfast = $row['wednesday_breakfast'];
            $wednesday_breakfast_calorie_count = $row['wednesday_breakfast_calorie_count'];
            $wednesday_lunch = $row['wednesday_lunch'];
            $wednesday_lunch_calorie_count = $row['wednesday_lunch_calorie_count'];
            $wednesday_snack = $row['wednesday_snack'];
            $wednesday_snack_calorie_count = $row['wednesday_snack_calorie_count'];
            $wednesday_dinner = $row['wednesday_dinner'];
            $wednesday_dinner_calorie_count = $row['wednesday_dinner_calorie_count'];
            $thursday_breakfast = $row['thursday_breakfast'];
            $thursday_breakfast_calorie_count = $row['thursday_breakfast_calorie_count'];
            $thursday_lunch = $row['thursday_lunch'];
            $thursday_lunch_calorie_count = $row['thursday_lunch_calorie_count'];
            $thursday_snack = $row['thursday_snack'];
            $thursday_snack_calorie_count = $row['thursday_snack_calorie_count'];
            $thursday_dinner = $row['thursday_dinner'];
            $thursday_dinner_calorie_count = $row['thursday_dinner_calorie_count'];
            $friday_breakfast = $row['friday_breakfast'];
            $friday_breakfast_calorie_count = $row['friday_breakfast_calorie_count'];
            $friday_lunch = $row['friday_lunch'];
            $friday_lunch_calorie_count = $row['friday_lunch_calorie_count'];
            $friday_snack = $row['friday_snack'];
            $friday_snack_calorie_count = $row['friday_snack_calorie_count'];
            $friday_dinner = $row['friday_dinner'];
            $friday_dinner_calorie_count = $row['friday_dinner_calorie_count'];
            $saturday_breakfast = $row['saturday_breakfast'];
            $saturday_breakfast_calorie_count = $row['saturday_breakfast_calorie_count'];
            $saturday_lunch = $row['saturday_lunch'];
            $saturday_lunch_calorie_count = $row['saturday_lunch_calorie_count'];
            $saturday_snack = $row['saturday_snack'];
            $saturday_snack_calorie_count = $row['saturday_snack_calorie_count'];
            $saturday_dinner = $row['saturday_dinner'];
            $saturday_dinner_calorie_count = $row['saturday_dinner_calorie_count'];
            $sunday_breakfast = $row['sunday_breakfast'];
            $sunday_breakfast_calorie_count = $row['sunday_breakfast_calorie_count'];
            $sunday_lunch = $row['sunday_lunch'];
            $sunday_lunch_calorie_count = $row['sunday_lunch_calorie_count'];
            $sunday_snack = $row['sunday_snack'];
            $sunday_snack_calorie_count = $row['sunday_snack_calorie_count'];
            $sunday_dinner = $row['sunday_dinner'];
            $sunday_dinner_calorie_count = $row['sunday_dinner_calorie_count'];
        }
    }
?>

        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>

            <div class="main-panel"> 
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="display-4 text-primary font-weight-bold"><?php echo $plan_title; ?></h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <button onclick="history.back()" class="btn btn-md btn-dark d-none d-sm-inline-flex"><i class="mdi mdi-arrow-left"></i> <span class="mr-2">Go back</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="">
                                            <?php
                                                if (isset($_SESSION['error_message'])) {
                                                    ?>
                                                    <div class="alert alert-danger mt-2 mb-3" role="alert">
                                                        <div class="alert-message text-center">
                                                            <?php
                                                            echo $_SESSION['error_message'];
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    unset($_SESSION['error_message']);
                                                }
                                            ?>
                                            <?php
                                                if (isset($_SESSION['success_message'])) {
                                                    ?>
                                                    <div class="alert alert-success mt-2 mb-3" role="alert">
                                                        <div class="alert-message text-center">
                                                            <?php echo $_SESSION['success_message']; ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    unset($_SESSION['success_message']);
                                                }
                                            ?>
                                            <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                                <div class="row mb-4 mt-4">

                                                    <div class="col-md-3 mx-auto" style="display: none">
                                                        <div class="form-group">
                                                            <label for="title">Plan ID</label>
                                                            <input type="text" class="form-control" name="plan_id" value="<?php echo $plan_id; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">User</label>
                                                                <?php
                                                                $select_query = "SELECT custom_meal_plan.userID, users.first_name, users.last_name FROM custom_meal_plan INNER JOIN users ON users.user_id=custom_meal_plan.userID ";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $user_id = $row['user_id'];
                                                                        $first_name = $row['first_name'];
                                                                        $last_name = $row['last_name'];
                                                                ?>
                                                                <input type="text" class="form-control" name="userID" value="<?php echo $first_name; ?> <?php echo $last_name; ?>" placeholder="Enter meal title" readonly>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Plan Title</label>
                                                            <input type="text" class="form-control" name="plan_title" value="<?php echo $plan_title; ?>" placeholder="Enter meal title">
                                                        </div>
                                                    </div>
                                                </div>

                                                <h3 class="mb-4">Monday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Monday Breakfast</label>
                                                            <select class="form-control" name="monday_breakfast" id="">
                                                                <option value="<?php echo $monday_breakfast; ?>"><?php echo $monday_breakfast; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Monday Breakfast Calorie</label>
                                                            <input type="text" class="form-control" name="monday_breakfast_calorie_count" value="<?php echo $monday_breakfast_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Monday Lunch</label>
                                                            <select class="form-control" name="monday_lunch" id="">
                                                                <option value="<?php echo $monday_lunch; ?>"><?php echo $monday_lunch; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Monday Lunch Calorie</label>
                                                            <input type="text" class="form-control" name="monday_lunch_calorie_count" value="<?php echo $monday_lunch_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Monday Snack</label>
                                                            <select class="form-control" name="monday_snack" id="">
                                                                <option value="<?php echo $monday_snack; ?>"><?php echo $monday_snack; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Monday Snack Calorie</label>
                                                            <input type="text" class="form-control" name="monday_snack_calorie_count" value="<?php echo $monday_snack_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Monday Dinner</label>
                                                            <select class="form-control" name="monday_dinner" id="">
                                                                <option value="<?php echo $monday_dinner; ?>"><?php echo $monday_dinner; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Monday Dinner Calorie</label>
                                                            <input type="text" class="form-control" name="monday_dinner_calorie_count" value="<?php echo $monday_dinner_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr />

                                                <h3 class="mb-4">Tuesday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Tuesday Breakfast</label>
                                                            <select class="form-control" name="tuesday_breakfast" id="">
                                                                <option value="<?php echo $tuesday_breakfast; ?>"><?php echo $tuesday_breakfast; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Tuesday Breakfast Calorie</label>
                                                            <input type="text" class="form-control" name="tuesday_breakfast_calorie_count" value="<?php echo $tuesday_breakfast_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Tuesday Lunch</label>
                                                            <select class="form-control" name="tuesday_lunch" id="">
                                                                <option value="<?php echo $tuesday_lunch; ?>"><?php echo $tuesday_lunch; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Tuesday Lunch Calorie</label>
                                                            <input type="text" class="form-control" name="tuesday_lunch_calorie_count" value="<?php echo $tuesday_lunch_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Tuesday Snack</label>
                                                            <select class="form-control" name="tuesday_snack" id="">
                                                                <option value="<?php echo $tuesday_snack; ?>"><?php echo $tuesday_snack; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Tuesday Snack Calorie</label>
                                                            <input type="text" class="form-control" name="tuesday_snack_calorie_count" value="<?php echo $tuesday_snack_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Tuesday Dinner</label>
                                                            <select class="form-control" name="tuesday_dinner" id="">
                                                                <option value="<?php echo $tuesday_dinner; ?>"><?php echo $tuesday_dinner; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Tuesday Dinner Calorie</label>
                                                            <input type="text" class="form-control" name="tuesday_dinner_calorie_count" value="<?php echo $tuesday_dinner_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr />

                                                <h3 class="mb-4">Wednesday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Wednesday Breakfast</label>
                                                            <select class="form-control" name="wednesday_breakfast" id="">
                                                                <option value="<?php echo $wednesday_breakfast; ?>"><?php echo $wednesday_breakfast; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Wednesday Breakfast Calorie</label>
                                                            <input type="text" class="form-control" name="wednesday_breakfast_calorie_count" value="<?php echo $wednesday_breakfast_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Wednesday Lunch</label>
                                                            <select class="form-control" name="wednesday_lunch" id="">
                                                                <option value="<?php echo $wednesday_lunch; ?>"><?php echo $wednesday_lunch; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Wednesday Lunch Calorie</label>
                                                            <input type="text" class="form-control" name="wednesday_lunch_calorie_count" value="<?php echo $wednesday_lunch_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Wednesday Snack</label>
                                                            <select class="form-control" name="wednesday_snack" id="">
                                                                <option value="<?php echo $wednesday_snack; ?>"><?php echo $wednesday_snack; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Wednesday Snack Calorie</label>
                                                            <input type="text" class="form-control" name="wednesday_snack_calorie_count" value="<?php echo $wednesday_snack_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Wednesday Dinner</label>
                                                            <select class="form-control" name="wednesday_dinner" id="">
                                                                <option value="<?php echo $wednesday_dinner; ?>"><?php echo $wednesday_dinner; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Wednesday Dinner Calorie</label>
                                                            <input type="text" class="form-control" name="wednesday_dinner_calorie_count" value="<?php echo $wednesday_dinner_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr />

                                                <h3 class="mb-4">Thursday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Thursday Breakfast</label>
                                                            <select class="form-control" name="thursday_breakfast" id="">
                                                                <option value="<?php echo $thursday_breakfast; ?>"><?php echo $thursday_breakfast; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Thursday Breakfast Calorie</label>
                                                            <input type="text" class="form-control" name="thursday_breakfast_calorie_count" value="<?php echo $thursday_breakfast_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Thursday Lunch</label>
                                                            <select class="form-control" name="thursday_lunch" id="">
                                                                <option value="<?php echo $thursday_lunch; ?>"><?php echo $thursday_lunch; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Thursday Lunch Calorie</label>
                                                            <input type="text" class="form-control" name="thursday_lunch_calorie_count" value="<?php echo $thursday_lunch_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Thursday Snack</label>
                                                            <select class="form-control" name="thursday_snack" id="">
                                                                <option value="<?php echo $thursday_snack; ?>"><?php echo $thursday_snack; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Thursday Snack Calorie</label>
                                                            <input type="text" class="form-control" name="thursday_snack_calorie_count" value="<?php echo $thursday_snack_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Thursday Dinner</label>
                                                            <select class="form-control" name="thursday_dinner" id="">
                                                                <option value="<?php echo $thursday_dinner; ?>"><?php echo $thursday_dinner; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Thursday Dinner Calorie</label>
                                                            <input type="text" class="form-control" name="thursday_dinner_calorie_count" value="<?php echo $thursday_dinner_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr />

                                                <h3 class="mb-4">Friday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Friday Breakfast</label>
                                                            <select class="form-control" name="friday_breakfast" id="">
                                                                <option value="<?php echo $friday_breakfast; ?>"><?php echo $friday_breakfast; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Friday Breakfast Calorie</label>
                                                            <input type="text" class="form-control" name="friday_breakfast_calorie_count" value="<?php echo $friday_breakfast_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Friday Lunch</label>
                                                            <select class="form-control" name="friday_lunch" id="">
                                                                <option value="<?php echo $friday_lunch; ?>"><?php echo $friday_lunch; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Friday Lunch Calorie</label>
                                                            <input type="text" class="form-control" name="friday_lunch_calorie_count" value="<?php echo $friday_lunch_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Friday Snack</label>
                                                            <select class="form-control" name="friday_snack" id="">
                                                                <option value="<?php echo $friday_snack; ?>"><?php echo $friday_snack; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Friday Snack Calorie</label>
                                                            <input type="text" class="form-control" name="friday_snack_calorie_count" value="<?php echo $friday_snack_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Friday Dinner</label>
                                                            <select class="form-control" name="friday_dinner" id="">
                                                                <option value="<?php echo $friday_dinner; ?>"><?php echo $friday_dinner; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Friday Dinner Calorie</label>
                                                            <input type="text" class="form-control" name="friday_dinner_calorie_count" value="<?php echo $friday_dinner_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr />

                                                <h3 class="mb-4">Saturday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Saturday Breakfast</label>
                                                            <select class="form-control" name="saturday_breakfast" id="">
                                                                <option value="<?php echo $saturday_breakfast; ?>"><?php echo $saturday_breakfast; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Saturday Breakfast Calorie</label>
                                                            <input type="text" class="form-control" name="saturday_breakfast_calorie_count" value="<?php echo $saturday_breakfast_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Saturday Lunch</label>
                                                            <select class="form-control" name="saturday_lunch" id="">
                                                                <option value="<?php echo $saturday_lunch; ?>"><?php echo $saturday_lunch; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Saturday Lunch Calorie</label>
                                                            <input type="text" class="form-control" name="saturday_lunch_calorie_count" value="<?php echo $saturday_lunch_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Saturday Snack</label>
                                                            <select class="form-control" name="saturday_snack" id="">
                                                                <option value="<?php echo $saturday_snack; ?>"><?php echo $saturday_snack; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Saturday Snack Calorie</label>
                                                            <input type="text" class="form-control" name="saturday_snack_calorie_count" value="<?php echo $saturday_snack_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Saturday Dinner</label>
                                                            <select class="form-control" name="saturday_dinner" id="">
                                                                <option value="<?php echo $saturday_dinner; ?>"><?php echo $saturday_dinner; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Saturday Dinner Calorie</label>
                                                            <input type="text" class="form-control" name="saturday_dinner_calorie_count" value="<?php echo $saturday_dinner_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <hr />

                                                <h3 class="mb-4">Sunday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Sunday Breakfast</label>
                                                            <select class="form-control" name="sunday_breakfast" id="">
                                                                <option value="<?php echo $sunday_breakfast; ?>"><?php echo $sunday_breakfast; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Sunday Breakfast Calorie</label>
                                                            <input type="text" class="form-control" name="sunday_breakfast_calorie_count" value="<?php echo $sunday_breakfast_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Sunday Lunch</label>
                                                            <select class="form-control" name="sunday_lunch" id="">
                                                                <option value="<?php echo $sunday_lunch; ?>"><?php echo $sunday_lunch; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Sunday Lunch Calorie</label>
                                                            <input type="text" class="form-control" name="sunday_lunch_calorie_count" value="<?php echo $sunday_lunch_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Sunday Snack</label>
                                                            <select class="form-control" name="sunday_snack" id="">
                                                                <option value="<?php echo $sunday_snack; ?>"><?php echo $sunday_snack; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Sunday Snack Calorie</label>
                                                            <input type="text" class="form-control" name="sunday_snack_calorie_count" value="<?php echo $sunday_snack_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Sunday Dinner</label>
                                                            <select class="form-control" name="sunday_dinner" id="">
                                                                <option value="<?php echo $sunday_dinner; ?>"><?php echo $sunday_dinner; ?></option>
                                                                <?php
                                                                $select_query = "SELECT * FROM meals";
                                                                $result = mysqli_query($conn, $select_query);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while($row = mysqli_fetch_assoc($result)) {
                                                                        $meal_id = $row['meal_id'];
                                                                        $meal_code = $row['meal_code'];
                                                                        $title = $row['title'];
                                                                ?>
                                                                <option value="<?php echo $title; ?>"><?php echo $title; ?>(<?php echo $meal_code; ?>)</option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 mx-auto">
                                                        <div class="form-group">
                                                            <label for="title">Sunday Dinner Calorie</label>
                                                            <input type="text" class="form-control" name="sunday_dinner_calorie_count" value="<?php echo $sunday_dinner_calorie_count; ?>" placeholder="Enter calorie count">
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <button name="update-meal-plan-btn" type="submit" class="button btn-block btn btn-primary btn-lg mr-2" onclick="this.classList.toggle('button--loading')"><span class="button__text">Update custom meal plan</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Footer -->
                <footer class="footer">
                    <div class="mx-auto justify-content-center justify-content-sm-between">
                        <span class="text-center text-center d-block">&copy; Copyrights <script>document.write(new Date().getFullYear());</script> EasyFit&reg;. All Rights Reserved</span>
                    </div>
                </footer>

            </div>
        </div>
    </div>


    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.js"></script>

    
</body>

</html>
