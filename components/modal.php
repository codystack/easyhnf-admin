    <!-- Basic Plan Modal Start-->
    <div class="modal fade" id="basicPlanModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/basic.svg" width="100px">
                    </div>
                    <h3 class="text-center mt-4">Basic Plan</h3>

                    <div>
                        <form class="needs-validation" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                            <div class="form-floating mb-3">
                                <div class="form-group">
                                    <label for="title">Select User</label>
                                    <select class="form-control" name="userID" id="">
                                        <?php
                                        $select_query = "SELECT * FROM users";
                                        $result = mysqli_query($conn, $select_query);
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $user_id = $row['user_id'];
                                                $first_name = $row['first_name'];
                                                $last_name = $row['last_name'];
                                        ?>
                                        <option value="<?php echo $user_id;?>"><?php echo $first_name; ?> <?php echo $last_name; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <div class="form-group">
                                    <label for="title">Select Basic Meal Plan</label>
                                    <select class="form-control" name="diet" id="">
                                        <?php
                                        $select_query = "SELECT * FROM basic_diet";
                                        $result = mysqli_query($conn, $select_query);
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $title = $row['title'];
                                        ?>
                                        <option value="<?php echo $title;?>"><?php echo $title; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-floating mb-3" style="display: none">
                                <input type="text" class="form-control" name="amount" value="20000" />
                            </div>
                            <div class="form-floating mb-3" style="display: none">
                                <input type="text" class="form-control" name="payment_method" value="bank_transfer" />
                            </div>
                            <div class="form-floating mb-3" style="display: none">
                                <input type="text" class="form-control" name="subscription_plan" value="Basic Plan" />
                            </div>
                            <div class="border-0 justify-content-center">
                                <button name="manual-basic-plan-setup-btn" type="submit" class="button btn-block btn btn-primary" onclick="this.classList.toggle('button--loading')"><span class="button__text">Assign Subscription</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Basic Plan Modal End-->



    <!-- Customized Plan Modal Start-->
    <div class="modal fade" id="customPlanModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/custom.svg" width="100px">
                    </div>
                    <h3 class="text-center mt-4">Customized Plan</h3>

                    <div>
                        <form class="needs-validation" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                            <div class="form-floating mb-3">
                                <div class="form-group">
                                    <label for="title">Select User</label>
                                    <select class="form-control" name="userID" id="">
                                        <?php
                                        $select_query = "SELECT * FROM users";
                                        $result = mysqli_query($conn, $select_query);
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $user_id = $row['user_id'];
                                                $first_name = $row['first_name'];
                                                $last_name = $row['last_name'];
                                        ?>
                                        <option value="<?php echo $user_id;?>"><?php echo $first_name; ?> <?php echo $last_name; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-floating mb-3" style="display: none">
                                <input type="text" class="form-control" name="amount" value="150000" />
                            </div>
                            <div class="form-floating mb-3" style="display: none">
                                <input type="text" class="form-control" name="payment_method" value="bank_transfer" />
                            </div>
                            <div class="form-floating mb-3" style="display: none">
                                <input type="text" class="form-control" name="subscription_plan" value="Customized Plan" />
                            </div>
                            <div class="border-0 justify-content-center">
                                <button name="manual-custom-plan-setup-btn" type="submit" class="button btn-block btn btn-primary" onclick="this.classList.toggle('button--loading')"><span class="button__text">Assign Subscription</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Customized Plan Modal End-->



    <!-- Coaching Plan Modal Start-->
    <div class="modal fade" id="coachingPlanModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-0">
                        <img src="./assets/images/coaching.svg" width="100px">
                    </div>
                    <h3 class="text-center mt-4">Nutrition Coaching Plan</h3>

                    <div>
                        <form class="needs-validation" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                            <div class="form-floating mb-3">
                                <div class="form-group">
                                    <label for="title">Select User</label>
                                    <select class="form-control" name="userID" id="">
                                        <?php
                                        $select_query = "SELECT * FROM users";
                                        $result = mysqli_query($conn, $select_query);
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $user_id = $row['user_id'];
                                                $first_name = $row['first_name'];
                                                $last_name = $row['last_name'];
                                        ?>
                                        <option value="<?php echo $user_id;?>"><?php echo $first_name; ?> <?php echo $last_name; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-floating mb-3" style="display: none">
                                <input type="text" class="form-control" name="amount" value="450000" />
                            </div>
                            <div class="form-floating mb-3" style="display: none">
                                <input type="text" class="form-control" name="payment_method" value="bank_transfer" />
                            </div>
                            <div class="form-floating mb-3" style="display: none">
                                <input type="text" class="form-control" name="subscription_plan" value="Nutrition Coaching Plan" />
                            </div>
                            <div class="border-0 justify-content-center">
                                <button name="manual-coaching-plan-setup-btn" type="submit" class="button btn-block btn btn-primary" onclick="this.classList.toggle('button--loading')"><span class="button__text">Assign Subscription</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Coaching Plan Modal End-->