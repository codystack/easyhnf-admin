    <!-- Meal Delete Modal Start-->
    <div class="modal fade" id="mealDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this meal?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-meal">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-meal" name="delete_meal_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Meal Delete Modal End-->



    <!-- User Delete Modal Start-->
    <div class="modal fade" id="userDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this user?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-user">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-user" name="delete_user_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- User Delete Modal End-->



    <!-- Subscription Delete Modal Start-->
    <div class="modal fade" id="subscriptionDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this Subscription?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-subscription">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-subscription" name="delete_subscription_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscription Delete Modal End-->



    <!-- Custom Plan Delete Modal Start-->
    <div class="modal fade" id="customPlanDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this Custom Meal Plan?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-custom-plan">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-custom-plan" name="delete_custom_plan_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Custom Plan Delete Modal End-->



       <!-- Basic Diet Delete Modal Start-->
       <div class="modal fade" id="basicDietDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this Diet?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-basic-diet">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-basic-diet" name="delete_basic_diet_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Diet Delete Modal End-->



    <!-- Basic Plan Delete Modal Start-->
    <div class="modal fade" id="basicPlanDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/caution.svg" width="200px">
                    </div>
                    <h4 class="text-center">Are you sure you want to delete this Basic Meal Plan?</h4>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-basic-plan">
                        <input type="hidden" name="id">
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center mt-n3 mb-4">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" form="form-delete-basic-plan" name="delete_basic_plan_btn" class="btn btn-lg text-white btn-success">Confirm Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Plan Delete Modal End-->