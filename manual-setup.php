<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/queries.php";
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
                                            <h4 class="display-4 text-primary font-weight-bold">Manual Setup</h4>
                                            <p>Assign meal plan and subscription to user manually.</p>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <button onclick="history.back()" class="btn btn-md btn-dark d-none d-sm-inline-flex"><i class="mdi mdi-arrow-left"></i> <span class="mr-2">Go back</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <a href="subscription-setup">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="./assets/images/subscription-icon.svg" alt="Subscription" width="100">
                                            <h4 class="mt-4 text-dark">Subscription</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="meal-plan-setup">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="./assets/images/meal-plan-icon.svg" alt="Subscription" width="100">
                                            <h4 class="mt-4 text-dark">Meal Plan</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
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