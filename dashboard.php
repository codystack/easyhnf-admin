<?php
include "./components/header.php";
include "./components/topnavbar.php";
?>
        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="mb-3 mb-lg-0">
                                <h1 class="mb-2 h2 font-weight-bold">Hey <?php echo $_SESSION['first_name']; ?>,</h1>
                                <h5 class="text-dark mt-0 lead" id="greet"></h5>
                            </div>
                        </div>
                    </div>
                    <?php include "./components/analytics.php";?>

                    <div class="row grid-margin">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3 d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="card-title text-primary">Latest Subscribers</h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <a href="subscriptions" class="btn btn-sm btn-dark d-none d-sm-inline-flex"> <span class="pe-2">View all</span><span> <i class="bi bi-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th class="font-weight-bold">S/N</th>
                                                    <th class="font-weight-bold">Name</th>
                                                    <th class="font-weight-bold">Amount</th>
                                                    <th class="font-weight-bold">Subscription Plan</th>
                                                    <th class="font-weight-bold">Subscription Date</th>
                                                    <th class="text-right font-weight-bold">Subscription Date</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
                                                $dash_id = 1;
                                                $select_query = "SELECT subscription.subscription_date, subscription.subscription_plan, subscription.userID, subscription.amount, users.user_id, users.first_name, users.last_name FROM subscription INNER JOIN users ON subscription.userID = users.user_id ORDER BY subscription_date DESC LIMIT 10";
                                                    $result = mysqli_query($conn, $select_query);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                            $subscription_id = $row['subscription_id'];
                                                            $first_name = $row['first_name'];
                                                            $last_name = $row['last_name'];
                                                            $amount = $row['amount'];
                                                            $subscription_plan = $row['subscription_plan'];
                                                            $subscription_date = $row['subscription_date'];
                                                            $date = strtotime($subscription_date);
                                                ?>
                                                <tr>
                                                    <td><?php echo $dash_id; ?></td>
                                                    <td><?php echo $first_name; ?> <?php echo $last_name; ?></td>
                                                    <td>₦<?php echo number_format($amount, 0, '.', ','); ?></td>
                                                    <td><?php echo $subscription_plan; ?></td>
                                                    <td><?php echo date('j F Y', $date); ?></td>
                                                    <td class="text-right">
                                                        <a href="view-subscription?id=<?php echo $subscription_id; ?>" class='btn btn-dark' style="padding: 0.5rem 1rem;">View</a>
                                                        <button type="button" data-id="<? echo $subscription_id; ?>" onclick="confirmSubscriptionDelete(this);" class='btn btn-danger' style="padding: 0.5rem 1rem;">Delete</button>
                                                    </td>
                                                </tr>
                                                <?php
                                                $dash_id++;
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php include "./components/footer.php"; ?>