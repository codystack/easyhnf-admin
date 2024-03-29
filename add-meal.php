<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/queries.php";
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
                                            <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Meal Title</label>
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter meal title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="mealCode">Meal Code</label>
                                                            <input type="text" class="form-control" name="meal_code" id="meal_code" placeholder="Enter meal code">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="mealCode">Upload Image<span class="small text-danger">(preferably landscape)</span></label>
                                                            <input type="file" class="form-control" name="meal_image" id="meal_image" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="ingredients">Ingredients</label>
                                                            <textarea rows="5" class="form-control" name="ingredients" id="ingredients" placeholder="Enter ingredients used for this meal"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="instructions">Instructions</label>
                                                            <textarea rows="5" class="form-control" name="instructions" id="instructions" placeholder="Enter instructions for this meal"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="notes">Notes</label>
                                                            <textarea rows="10" class="form-control" name="notes" id="notes" placeholder="Enter notes for meal"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="nutrition">Nutrition</label>
                                                            <textarea rows="5" class="form-control" name="nutrition" id="nutrition" placeholder="Enter meal Nutrition"></textarea>
                                
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="short_description">Short Description</label>
                                                            <textarea rows="5" class="form-control" name="short_description" id="short_description" placeholder="Enter short description"></textarea>
                                                            <script>
                                                                CKEDITOR.replace( 'short_description' );
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="long_description">Long Description</label>
                                                            <textarea rows="5" class="form-control" name="long_description" id="long_description" placeholder="Enter long description"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <button name="add-meal-btn" type="submit" class="btn btn-primary btn-lg mr-2">Submit</button>
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
