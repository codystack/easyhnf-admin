<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/update.php";

    $meal_id = $_GET['id'];
    $select_query = "SELECT * FROM meals WHERE meal_id='$meal_id'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $meal_id = $row['meal_id'];
            $meal_code = $row['meal_code'];
            $meal_image = $row['meal_image'];
            $title = $row['title'];
            $ingredients = $row['ingredients'];
            $instructions = $row['instructions'];
            $notes = $row['notes'];
            $nutrition = $row['nutrition'];
            $short_description = $row['short_description'];
            $long_description = $row['long_description'];
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
                                            <h4 class="display-4 text-primary font-weight-bold">Edit <?php echo $title; ?></h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <button onclick="history.back()" class="btn btn-md btn-dark d-none d-sm-inline-flex"><i class="mdi mdi-arrow-left"></i> <span class="mr-2">Go back</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
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
                                            
                                            <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                                                <h3 class="mb-4 font-weight-bold">Change Meal Image</h3>
                                                <hr />
                                                <div class="row pt-3">
                                                    <div class="col-md-4" style="display: none;">
                                                        <div class="form-group">
                                                            <label for="title">Meal ID</label>
                                                            <input type="text" class="form-control" name="meal_id" id="meal_id" value="<?php echo $meal_id; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mealCode">Upload Image<span class="small text-danger">(preferably landscape)</span></label>
                                                            <input type="file" class="form-control" name="meal_image" id="meal_image" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label></label>
                                                            <button name="update_meal_picture_btn" type="submit" class="button btn-block btn btn-primary btn-lg mr-2" onclick="this.classList.toggle('button--loading')"><span class="button__text">Update Meal Image</span></button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </form>
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
                                                <div class="row pt-4">
                                                    <div class="col-md-4" style="display: none;">
                                                        <div class="form-group">
                                                            <label for="title">Meal ID</label>
                                                            <input type="text" class="form-control" name="meal_id" id="meal_id" value="<?php echo $meal_id; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="title">Meal Title</label>
                                                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $title; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mealCode">Meal Code</label>
                                                            <input type="text" class="form-control" name="meal_code" id="meal_code" value="<?php echo $meal_code; ?>" onkeyup="this.value = this.value.toUpperCase();">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="ingredients">Ingredients</label>
                                                            <textarea rows="5" class="form-control" name="ingredients" id="ingredients" placeholder="Enter ingredients used for this meal"><?php echo $ingredients; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="instructions">Direction</label>
                                                            <textarea rows="5" class="form-control" name="instructions" id="instructions" placeholder="Enter directions for this meal"><?php echo $ingredients; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="notes">Notes</label>
                                                            <textarea rows="10" class="form-control" name="notes" id="notes" placeholder="Enter notes for meal"><?php echo $notes; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="nutrition">Nutrition Info</label>
                                                            <textarea rows="5" class="form-control" name="nutrition" id="nutrition" placeholder="Enter meal Nutrition info"><?php echo $nutrition; ?></textarea>
                                
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="short_description">Short Description</label>
                                                            <textarea rows="5" class="form-control" name="short_description" id="short_description" placeholder="Enter short description"><?php echo $short_description; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="long_description">Long Description</label>
                                                            <textarea rows="5" class="form-control" name="long_description" id="long_description" placeholder="Enter long description"><?php echo $long_description; ?></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <button name="update_meal_btn" type="submit" class="button btn-block btn btn-primary btn-lg mr-2" onclick="this.classList.toggle('button--loading')"><span class="button__text">Update Meal</span></button>
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


    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
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

    <script>
        ClassicEditor
            .create( document.querySelector( '#ingredients' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#instructions' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#notes' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#nutrition' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#short_description' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#long_description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    
</body>

</html>
