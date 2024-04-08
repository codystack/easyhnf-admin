<?php
include "./components/header.php";
include "./components/topnavbar.php";
?>

        <div class="container-fluid page-body-wrapper">

            <?php include "./components/side-navbar.php"; ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row grid-margin">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="display-4 text-primary font-weight-bold">Subscription</h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <button onclick="history.back()" class="btn btn-md btn-dark d-none d-sm-inline-flex"><i class="mdi mdi-arrow-left"></i> <span class="mr-2">Go back</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <?php
                                    $subscription_id = $_GET['id'];
                                    
                                    $select_query = "SELECT subscription.payment_method, subscription.transaction_ref, subscription.subscription_id, subscription.subscription_date, subscription.invoice_id, subscription.subscription_plan, subscription.userID, subscription.amount, users.user_id, users.first_name, users.last_name FROM subscription INNER JOIN users ON subscription.userID = users.user_id WHERE subscription_id ='$subscription_id'";
                                    $result = mysqli_query($conn, $select_query);
                                    if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $subscription_id = $row['subscription_id'];
                                        $first_name = $row['first_name'];
                                        $last_name = $row['last_name'];
                                        $transaction_ref = $row['transaction_ref'];
                                        $payment_method = $row['payment_method'];
                                        $invoice_id = $row['invoice_id'];
                                        $amount = $row['amount'];
                                        $subscription_plan = $row['subscription_plan'];
                                        $subscription_date = $row['subscription_date'];
                                        $date = strtotime($subscription_date);
                                        switch ($status) {
                                            case "Inactive";
                                                $class  = 'bg-danger';
                                                $text  = 'text-white';
                                                break;
                                            case "success";
                                                $class  = 'bg-success';
                                                $text  = 'text-white';
                                                break;
                                            case "pending";
                                                $class  = 'bg-warning';
                                                $text  = 'text-warning';
                                                break;
                                            default:
                                                $class  = '';
                                        }
                                ?>
                                <div class="card-body">

                                    <div class="text-center mb-10 mt-5">
                                        <div class="mb-3">
                                            <img alt="" src="./assets/images/bill.svg" class="img-responsive img-lg">
                                        </div>
                                        <div class="col-lg-4 col-sm-3 col-md-3 col-4 mx-auto d-flex justify-content-center mt-3 bg-light-primary px-1 py-2 wallet-border">
                                            <div>
                                                <span class="fs-6">STATUS:</span>
                                            </div>
                                            &nbsp;
                                            <div style="">
                                                <span class="badge bg-success text-xs">Success</span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="container mt-10 mb-10">
                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">FULL NAME</span>
                                                <h5 class="mt-2"><?php echo $first_name; ?> <?php echo $last_name; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">AMOUNT</span>
                                                    <h5 class="mt-2">₦<?php echo number_format($amount, 0, '.', ','); ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6  font-weight-bold">TRANSACTION REFERENCE</span>
                                                <h6 class="mt-2"><?php echo $transaction_ref; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">PAYMENT METHOD</span>
                                                    <h6 class="mt-2"><?php echo $payment_method; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6  font-weight-bold">SUBSCRIPTION PLAN</span>
                                                <h6 class="mt-2"><?php echo $subscription_plan; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">INVOICE ID</span>
                                                    <h6 class="mt-2"><?php echo $invoice_id ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6  font-weight-bold">SUBSCRIPTION DATE</span>
                                                <h6 class="mt-2"><?php echo date('j F Y', $date); ?></h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4 no-print mb-10">
                                        <div class="text-center mx-auto">           
                                            <button class="btn btn-danger" onclick="history.back()"> Go back</button>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
            


<?php include "./components/footer.php"; ?>