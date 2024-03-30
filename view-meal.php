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
                                            <h4 class="display-4 text-primary font-weight-bold">Meals</h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <a href="add-meal" class="btn btn-md btn-dark d-none d-sm-inline-flex"> <span class="mr-2">Add new meal</span> <i class="mdi mdi-plus-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <?php
                                    $meal_id = $_GET['id'];
                                    
                                    $select_query = "SELECT * FROM meals WHERE meal_id ='$meal_id'";
                                    $result = mysqli_query($conn, $select_query);
                                    if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $meal_id = $row['meal_id'];
                                        $meal_code = $row['meal_code'];
                                        $meal_image = $row['meal_image'];
                                        $title = $row['title'];
                                        $ingredients = $row['ingredients'];
                                        $status = $row['status'];
                                        $instructions = $row['instructions'];
                                        $notes = $row['notes'];
                                        $nutrition = $row['nutrition'];
                                        $short_description = $row['short_description'];
                                        $long_description = $row['long_description'];
                                        $date = strtotime($subscription_date);
                                        switch ($status) {
                                            case "Inactive";
                                                $class  = 'bg-danger';
                                                $text  = 'text-white';
                                                break;
                                            case "Active";
                                                $class  = 'bg-success';
                                                $text  = 'text-black';
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
                                            <img alt="" src="<?php echo $meal_image; ?>" class="img-responsive img-xl">
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
                                                <span class="fs-6 font-weight-bold">MEAL TITLE</span>
                                                <h5 class="mt-2"><?php echo $title; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">MEAL CODE</span>
                                                    <h5 class="mt-2"><?php echo $meal_code; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6  font-weight-bold">INGREDIENTS</span>
                                                <h6 class="mt-2"><?php echo $ingredients; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">DIRECTION</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6  font-weight-bold">NOTES</span>
                                                <h6 class="mt-2"><?php echo $notes; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 font-weight-bold">NUTRITION INFO</span>
                                                    <h6 class="mt-2"><?php echo $nutrition ?> </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-8 col-lg-6">
                                                <span class="fs-6  font-weight-bold">SHORT DESCRIPTION</span>
                                                <h6 class="mt-2"><?php echo $short_description; ?></h6>
                                            </div>
                                            <div class="col-md-4 col-lg-6 text-right">
                                                <div class="text-end  font-weight-bold">
                                                    <span class="fs-6">LONG DESCRIPTION</span>
                                                    <h6 class="mt-2"><?php echo $instructions; ?> </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4 no-print mb-10">
                                        <div class="text-center mx-auto">
                                            <a href="edit-meal?id=<? echo $meal_id; ?>" class="btn btn-primary"> Edit Meal </a>             
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