<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/queries.php";

    $select_query = "SELECT * FROM meals WHERE meal_id='$meal_id'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $meal_id = $row['meal_id'];
            $meal_code = $row['meal_code'];
            $meal_image = $row['meal_image'];
            $title = $row['title'];
        }
    }

    $select_query = "SELECT * FROM users ORDER BY user_id ASC";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $user_id = $row['user_id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
        }
    }
?>
        <style>
            #container {
                width: 1000px;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* Editing area */
                min-height: 200px;
            }
            .ck-content .image {
                /* Block images */
                max-width: 80%;
                margin: 20px auto;
            }
        </style>

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
                                            <h4 class="display-4 text-primary font-weight-bold">Add new meal</h4>
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
                                                <h3 class="mb-4 text-center">Select user</h3>
                                                <div class="row mb-4">
                                                    <div class="col-md-6 mx-auto">
                                                        <div class="form-group text-center">
                                                            <select class="form-control" name="userID" id="exampleFormControlSelect1">
                                                                <option value="$user_id;">$first_name; ?> <?php echo $last_name; ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h3 class="mb-4">Monday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Monday Breakfast</label>
                                                            <input type="text" class="form-control" name="monday_breakfast" id="title" placeholder="Enter meal title">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Monday Lunch</label>
                                                            <input type="text" class="form-control" name="monday_lunch" id="meal_code" placeholder="Enter meal code" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Monday Snack</label>
                                                            <input type="text" class="form-control" name="monday_snack" id="meal_code" placeholder="Enter meal code" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Monday Dinner</label>
                                                            <input type="text" class="form-control" name="monday_dinner" id="meal_code" placeholder="Enter meal code" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr />

                                                <h3 class="mb-4 mt-4">Tuesday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Tuesday Breakfast</label>
                                                            <input type="text" class="form-control" name="monday_breakfast" id="title" placeholder="Enter meal title">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Tuesday Lunch</label>
                                                            <input type="text" class="form-control" name="monday_lunch" id="meal_code" placeholder="Enter meal code" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Tuesday Snack</label>
                                                            <input type="text" class="form-control" name="monday_snack" id="meal_code" placeholder="Enter meal code" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Tuesday Dinner</label>
                                                            <input type="text" class="form-control" name="monday_dinner" id="meal_code" placeholder="Enter meal code" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr />

                                                <h3 class="mb-4 mt-4">Wednesday</h3>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="title">Wednesday Breakfast</label>
                                                            <input type="text" class="form-control" name="monday_breakfast" id="title" placeholder="Enter meal title">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Wednesday Lunch</label>
                                                            <input type="text" class="form-control" name="monday_lunch" id="meal_code" placeholder="Enter meal code" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Wednesday Snack</label>
                                                            <input type="text" class="form-control" name="monday_snack" id="meal_code" placeholder="Enter meal code" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="mealCode">Wednesday Dinner</label>
                                                            <input type="text" class="form-control" name="monday_dinner" id="meal_code" placeholder="Enter meal code" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>
                                                </div>

                                                <button name="add-meal-btn" type="submit" class="button btn-block btn btn-primary btn-lg mr-2" onclick="this.classList.toggle('button--loading')"><span class="button__text">Add new meal</span></button>
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
