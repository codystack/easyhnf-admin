                    <div class="row">
                        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                            <div class="card bg-gradient-warning text-white text-center card-shadow-primary">
                                <div class="card-body">
                                    <h6 class="font-weight-normal mb-3">Total Users</h6>
                                    <?php
                                        $countUsers = mysqli_query($conn, "SELECT user_id FROM users");
                                    echo "<h2 class='mb-0 font-weight-bold'>".number_format(mysqli_num_rows($countUsers), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                            <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                                <div class="card-body">
                                    <h6 class="font-weight-normal mb-3">Total Meals</h6>
                                    <?php
                                        $countMeals = mysqli_query($conn, "SELECT meal_id FROM meals");
                                    echo "<h2 class='mb-0 font-weight-bold'>".number_format(mysqli_num_rows($countMeals), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                            <div class="card bg-gradient-info text-white text-center card-shadow-info">
                                <div class="card-body">
                                    <h6 class="font-weight-normal mb-3">Total Revenue</h6>
                                    <?php
                                        $sumTotalRevenue = mysqli_query($conn, "SELECT SUM(amount) AS total_amount FROM subscription");
                                        $row = mysqli_fetch_assoc($sumTotalRevenue);
                                        $sum = $row['total_amount'];
                                         echo "<h2 class='mb-0 font-weight-bold'><span class='smart'> ₦ </span> ".number_format($sum, 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>