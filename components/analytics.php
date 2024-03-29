                    <div class="row">
                        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                            <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Users</h6>
                                    <?php
                                        $countUsers = mysqli_query($conn, "SELECT user_id FROM users");
                                    echo "<h2 class='mb-0'>".number_format(mysqli_num_rows($countUsers), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                            <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Access Code</h6>
                                    <?php
                                        $countAccessCodes = mysqli_query($conn, "SELECT id FROM accessCode");
                                    echo "<h2 class='mb-0'>".number_format(mysqli_num_rows($countAccessCodes), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                            <div class="card bg-gradient-warning text-white text-center card-shadow-warning">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Used Access Codes</h6>
                                    <?php
                                        $countUsedAccessCodes = mysqli_query($conn, "SELECT id FROM accessCode WHERE status = 1 ");
                                    echo "<h2 class='mb-0'>".number_format(mysqli_num_rows($countUsedAccessCodes), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                            <div class="card bg-gradient-info text-white text-center card-shadow-info">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Refferals</h6>
                                    <?php
                                        $countUsedAccessCodes = mysqli_query($conn, "SELECT id FROM accessCode WHERE status = 1 ");
                                    echo "<h2 class='mb-0'>".number_format(mysqli_num_rows($countUsedAccessCodes), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>