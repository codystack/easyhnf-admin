<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/delete.php"; 
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
                                            <h4 class="display-4 text-primary font-weight-bold">Subscriptions</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <?php
                                            if (isset($_SESSION['error_message'])) {
                                                ?>
                                                <div class="alert alert-danger" role="alert">
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
                                                <div class="alert alert-success" role="alert">
                                                    <div class="alert-message text-center">
                                                        <?php echo $_SESSION['success_message']; ?>
                                                    </div>
                                                </div>
                                                <?php
                                                unset($_SESSION['success_message']);
                                            }
                                        ?>
                                        <div class="table-responsive">
                                            <table id="order-listing" class="table">
                                                <thead>
                                                  <tr>
                                                      <th class="font-weight-bold">S/N</th>
                                                      <th class="font-weight-bold">Name</th>
                                                      <th class="font-weight-bold">Invoice ID</th>
                                                      <th class="font-weight-bold">Amount</th>
                                                      <th class="font-weight-bold">Subscription Plan</th>
                                                      <th class="font-weight-bold">Status</th>
                                                      <th class="font-weight-bold text-right">Action</th>
                                                  </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $s_id = 1;
                                                    $select_query = "SELECT subscription.subscription_id, subscription.subscription_date, subscription.invoice_id, subscription.subscription_plan, subscription.userID, subscription.amount, users.user_id, users.first_name, users.last_name FROM subscription INNER JOIN users ON subscription.userID = users.user_id ORDER BY subscription_date DESC";
                                                    $result = mysqli_query($conn, $select_query);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                            $subscription_id = $row['subscription_id'];
                                                            $first_name = $row['first_name'];
                                                            $last_name = $row['last_name'];
                                                            $invoice_id = $row['invoice_id'];
                                                            $amount = $row['amount'];
                                                            $subscription_plan = $row['subscription_plan'];
                                                            $subscription_date = $row['subscription_date'];
                                                            $date = strtotime($subscription_date);
                                                            
                                                    ?>
                                                  <tr>
                                                      <td><?php echo $s_id; ?></td>
                                                      <td><?php echo $first_name; ?> <?php echo $last_name ?></td>
                                                      <td><?php echo $invoice_id; ?></td>
                                                      <td>₦<?php echo number_format($amount, 0, '.', ','); ?></td>
                                                      <td><?php echo $subscription_plan; ?></td>
                                                      <td><?php echo date('j F Y', $date); ?></td>
                                                      <td class="text-right">
                                                            <a href="view-subscription?id=<?php echo $subscription_id; ?>" class='btn btn-dark' style="padding: 0.5rem 1rem;"><i class="mdi mdi-eye"></i></a>
                                                            <button type="button" data-id="<? echo $subscription_id; ?>" onclick="confirmSubscriptionDelete(this);" class='btn btn-danger' style="padding: 0.5rem 1rem;"><i class="mdi mdi-delete"></i></button>
                                                        </td>
                                                  </tr>
                                                  <?php
                                                    $s_id++;
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
                </div>



<?php 
include "./components/delete-modals.php";
include "./components/footer.php"; 
?>