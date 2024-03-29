<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/password.php";
?>

        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>


            <div class="main-panel"> 
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-center mb-5">
                                            <h1 class="display-3 text-primary">Change Password</h1>
                                        </div>
                                        <div class="col-lg-8 mb-5 mx-auto">
                                            <div class="mt-3 py-2">
                                                <?php
                                                    if (isset($_SESSION['error_message'])) {
                                                        ?>
                                                        <div class="alert alert-danger mt-5" role="alert">
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
                                                        <div class="alert alert-success mt-5" role="alert">
                                                            <div class="alert-message text-center">
                                                                <?php echo $_SESSION['success_message']; ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        unset($_SESSION['success_message']);
                                                    }
                                                ?>
                                                <form class="forms-sample" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="oldPassword">Old Passowrd</label>
                                                                <input type="password" class="form-control" id="currentpassword" name="password" placeholder="Enter old password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="password">New Password</label>
                                                                <input type="password" class="form-control" id="newpassword" name="newPassword" placeholder="Enter new password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-0">
                                                            <div class="form-group">
                                                                <label for="confirmPassword">Confirm New Password</label>
                                                                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm new password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-0 mb-2">
                                                            <span id="message"></span>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary btn-lg mr-2" name="password_change_btn">Change Password</button>
                                                </form>
                                            </div>
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

    <!-- Password Matching-->
    <script>
        $('#confirmpassword').on('keyup', function () {
            if ($('#newpassword').val() == $('#confirmpassword').val()) {
                $('#message').html('Password matched😜').css('color', 'green');
            } else
                $('#message').html('Password did not match😡').css('color', 'red');
        });
    </script>

</body>

</html>