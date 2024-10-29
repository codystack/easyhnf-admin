<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/delete.php";
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
                                            <h4 class="display-4 text-primary font-weight-bold">Custom Meal Plans</h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <a href="add-meal-plan" class="btn btn-md btn-dark d-none d-sm-inline-flex"> <span class="mr-2">Schedule new meal plan</span> <i class="mdi mdi-plus-circle"></i></a>
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
                                                        <th class="font-weight-bold">Meal Plan Title</th>
                                                        <th class="font-weight-bold">Full Name</th>
                                                        <th class="font-weight-bold text-center">Status</th>
                                                        <th class="font-weight-bold text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $mp_id = 1;
                                                    $select_query = "SELECT custom_meal_plan.plan_id, custom_meal_plan.created_at, custom_meal_plan.status, custom_meal_plan.plan_title, custom_meal_plan.userID, users.user_id, users.first_name, users.last_name FROM custom_meal_plan INNER JOIN users ON custom_meal_plan.userID = users.user_id ORDER BY created_at DESC";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $plan_id = $row['plan_id'];
                                                                $first_name = $row['first_name'];
                                                                $last_name = $row['last_name'];
                                                                $plan_title = $row['plan_title'];
                                                                $status = $row['status'];
                                                                $created_at = $row['created_at'];
                                                                $date = strtotime($created_at);
                                                                switch ($status) {
                                                                    case "Inactive";
                                                                        $class  = 'bg-warning';
                                                                        $text = 'text-white';
                                                                        break;
                                                                    case "Active";
                                                                        $class  = 'bg-success';
                                                                        $text = 'text-white';
                                                                        break;
                                                                    default:
                                                                        $class  = '';
                                                                }
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $mp_id; ?></td>
                                                        <td><?php echo $plan_title; ?></td>
                                                        <td><?php echo $first_name; ?> <?php echo $last_name; ?></td>
                                                        <td class="text-center"><span class="badge <? echo $class; ?> text-xs <? echo $text; ?>"><?php echo $status; ?></span></td>
                                                        <td class="text-right">
                                                            <a href="view-custom-meal-plan?id=<?php echo $plan_id; ?>" class='btn btn-dark' style="padding: 0.5rem 1rem;"><i class="mdi mdi-eye"></i></a>
                                                            <a href="edit-custom-meal-plan?id=<?php echo $plan_id; ?>" class='btn btn-warning' style="padding: 0.5rem 1rem;"><i class="mdi mdi-pencil"></i></a>
                                                            <button type="button" data-id="<? echo $plan_id; ?>" onclick="confirmCustomPlanDelete(this);" class='btn btn-danger' style="padding: 0.5rem 1rem;"><i class="mdi mdi-delete"></i></button>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $mp_id++;
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