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
                                            <h4 class="display-4 text-primary font-weight-bold">User</h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <button onclick="history.back()" class="btn btn-md btn-dark d-none d-sm-inline-flex"><i class="mdi mdi-arrow-left"></i> <span class="mr-2">Go back</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <?php
                                    $user_id = $_GET['id'];
                                    
                                    $select_query = "SELECT * FROM users WHERE user_id ='$user_id'";
                                    $result = mysqli_query($conn, $select_query);
                                    if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $user_id = $row['user_id'];
                                        $first_name = $row['first_name'];
                                        $last_name = $row['last_name'];
                                        $email = $row['email'];
                                        $phone = $row['phone'];
                                        $subscription_plan = $row['subscription_plan'];
                                        $created_at = $row['created_at'];
                                        $status = $row['status'];
                                        $date = strtotime($created_at);
                                        switch ($status) {
                                            case "Inactive";
                                                $class  = 'bg-danger';
                                                $text  = 'text-white';
                                                break;
                                            case "Active";
                                                $class  = 'bg-success';
                                                $text  = 'text-dark';
                                                break;
                                            case "pending";
                                                $class  = 'bg-warning';
                                                $text  = 'text-warning';
                                                break;
                                            default:
                                                $class  = '';
                                        }
                                    }
                                    }
                                ?>
                                <div class="card-body">

                                    <div class="text-center mb-10 mt-5">
                                        <div class="mb-3">
                                            <img alt="" src="./assets/images/avatar.png" class="img-responsive img-xl rounded-circle">
                                        </div>
                                        <div class="col-lg-4 col-sm-3 col-md-3 col-4 mx-auto d-flex justify-content-center mt-3 bg-light-primary px-1 py-2 wallet-border">
                                            <div>
                                                <span class="fs-6">STATUS:</span>
                                            </div>
                                            &nbsp;
                                            <div style="">
                                                <span class="badge <? echo $class; ?> text-xs <? echo $text; ?>"><?php echo $status; ?></span>
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
                                                    <span class="fs-6 text-end font-weight-bold">EMAIL</span>
                                                    <h5 class="mt-2"><?php echo $email; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6  font-weight-bold">PHONE</span>
                                                <h6 class="mt-2"><?php echo $phone; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">SUBSCRIPTION PLAN</span>
                                                    <h6 class="mt-2"><?php if (!$subscription_plan){echo 'Not Subscribed Yet';}else{echo $subscription_plan;} ?> </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4 no-print mb-10">
                                        <div class="text-center mx-auto">           
                                            <button class="btn btn-danger" onclick="history.back()"> Go back</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            


<?php include "./components/footer.php"; ?>