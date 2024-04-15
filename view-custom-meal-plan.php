<?php
include "./components/header.php";
include "./components/topnavbar.php";

    $plan_id = $_GET['id'];
                                    
    $select_query = "SELECT * FROM custom_meal_plan WHERE plan_id ='$plan_id'";
    $result = mysqli_query($conn, $select_query);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $plan_id = $row['plan_id'];
        $plan_title = $row['plan_title'];
        $monday_breakfast = $row['monday_breakfast'];
        $monday_breakfast_calorie_count = $row['monday_breakfast_calorie_count'];
        $monday_lunch = $row['monday_lunch'];
        $monday_lunch_calorie_count = $row['monday_lunch_calorie_count'];
        $monday_snack = $row['monday_snack'];
        $monday_snack_calorie_count = $row['monday_snack_calorie_count'];
        $monday_dinner = $row['monday_dinner'];
        $monday_dinner_calorie_count = $row['monday_dinner_calorie_count'];
        $tuesday_breakfast = $row['tuesday_breakfast'];
        $tuesday_breakfast_calorie_count = $row['tuesday_breakfast_calorie_count'];
        $tuesday_lunch = $row['tuesday_lunch'];
        $tuesday_lunch_calorie_count = $row['tuesday_lunch_calorie_count'];
        $tuesday_snack = $row['tuesday_snack'];
        $tuesday_snack_calorie_count = $row['tuesday_snack_calorie_count'];
        $tuesday_dinner = $row['tuesday_dinner'];
        $tuesday_dinner_calorie_count = $row['tuesday_dinner_calorie_count'];
        $wednesday_breakfast = $row['wednesday_breakfast'];
        $wednesday_breakfast_calorie_count = $row['wednesday_breakfast_calorie_count'];
        $wednesday_lunch = $row['wednesday_lunch'];
        $wednesday_lunch_calorie_count = $row['wednesday_lunch_calorie_count'];
        $wednesday_snack = $row['wednesday_snack'];
        $wednesday_snack_calorie_count = $row['wednesday_snack_calorie_count'];
        $wednesday_dinner = $row['wednesday_dinner'];
        $wednesday_dinner_calorie_count = $row['wednesday_dinner_calorie_count'];
        $thursday_breakfast = $row['thursday_breakfast'];
        $thursday_breakfast_calorie_count = $row['thursday_breakfast_calorie_count'];
        $thursday_lunch = $row['thursday_lunch'];
        $thursday_lunch_calorie_count = $row['thursday_lunch_calorie_count'];
        $thursday_snack = $row['thursday_snack'];
        $thursday_snack_calorie_count = $row['thursday_snack_calorie_count'];
        $thursday_dinner = $row['thursday_dinner'];
        $thursday_dinner_calorie_count = $row['thursday_dinner_calorie_count'];
        $friday_breakfast = $row['friday_breakfast'];
        $friday_breakfast_calorie_count = $row['friday_breakfast_calorie_count'];
        $friday_lunch = $row['friday_lunch'];
        $friday_lunch_calorie_count = $row['friday_lunch_calorie_count'];
        $friday_snack = $row['friday_snack'];
        $friday_snack_calorie_count = $row['friday_snack_calorie_count'];
        $friday_dinner = $row['friday_dinner'];
        $friday_dinner_calorie_count = $row['friday_dinner_calorie_count'];
        $saturday_breakfast = $row['saturday_breakfast'];
        $saturday_breakfast_calorie_count = $row['saturday_breakfast_calorie_count'];
        $saturday_lunch = $row['saturday_lunch'];
        $saturday_lunch_calorie_count = $row['saturday_lunch_calorie_count'];
        $saturday_snack = $row['saturday_snack'];
        $saturday_snack_calorie_count = $row['saturday_snack_calorie_count'];
        $saturday_dinner = $row['saturday_dinner'];
        $saturday_dinner_calorie_count = $row['saturday_dinner_calorie_count'];
        $sunday_breakfast = $row['sunday_breakfast'];
        $sunday_breakfast_calorie_count = $row['sunday_breakfast_calorie_count'];
        $sunday_lunch = $row['sunday_lunch'];
        $sunday_lunch_calorie_count = $row['sunday_lunch_calorie_count'];
        $sunday_snack = $row['sunday_snack'];
        $sunday_snack_calorie_count = $row['sunday_snack_calorie_count'];
        $sunday_dinner = $row['sunday_dinner'];
        $sunday_dinner_calorie_count = $row['sunday_dinner_calorie_count'];
    
    }
}
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
                                            <h4 class="display-4 text-primary font-weight-bold"><?php echo $plan_title; ?></h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <button onclick="history.back()" class="btn btn-md btn-dark d-none d-sm-inline-flex"><i class="mdi mdi-arrow-left"></i> <span class="mr-2">Go back</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="container mt-10 mb-10">
                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Monday Breakfast</span>
                                                <h5 class="mt-2"><?php echo $monday_breakfast; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Monday Breakfast Calorie</span>
                                                    <h5 class="mt-2"><?php echo $monday_breakfast_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Monday Lunch</span>
                                                <h5 class="mt-2"><?php echo $monday_lunch; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Monday Lunch Calorie</span>
                                                    <h5 class="mt-2"><?php echo $monday_lunch_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Monday Snack</span>
                                                <h5 class="mt-2"><?php echo $monday_snack; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Monday Snack Calorie</span>
                                                    <h5 class="mt-2"><?php echo $monday_snack_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Monday Dinner</span>
                                                <h5 class="mt-2"><?php echo $monday_dinner; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Monday Snack Calorie</span>
                                                    <h5 class="mt-2"><?php echo $monday_dinner_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Tuesday Breakfast</span>
                                                <h5 class="mt-2"><?php echo $tuesday_breakfast; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Tuesday Breakfast Calorie</span>
                                                    <h5 class="mt-2"><?php echo $tuesday_breakfast_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Tuesday Lunch</span>
                                                <h5 class="mt-2"><?php echo $tuesday_lunch; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Tuesday Lunch Calorie</span>
                                                    <h5 class="mt-2"><?php echo $tuesday_lunch_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Tuesday Snack</span>
                                                <h5 class="mt-2"><?php echo $tuesday_snack; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Tuesday Snack Calorie</span>
                                                    <h5 class="mt-2"><?php echo $tuesday_snack_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Tuesday Dinner</span>
                                                <h5 class="mt-2"><?php echo $tuesday_dinner; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Tuesday Dinner Calorie</span>
                                                    <h5 class="mt-2"><?php echo $tuesday_dinner_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Wednesday Breakfast</span>
                                                <h5 class="mt-2"><?php echo $wednesday_breakfast; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Wednesday Breakfast Calorie</span>
                                                    <h5 class="mt-2"><?php echo $wednesday_breakfast_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Wednesday Lunch</span>
                                                <h5 class="mt-2"><?php echo $wednesday_lunch; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Wednesday Lunch Calorie</span>
                                                    <h5 class="mt-2"><?php echo $wednesday_lunch_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Wednesday Snack</span>
                                                <h5 class="mt-2"><?php echo $wednesday_snack; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Wednesday Snack Calorie</span>
                                                    <h5 class="mt-2"><?php echo $wednesday_snack_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Wednesday Dinner</span>
                                                <h5 class="mt-2"><?php echo $wednesday_dinner; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Wednesday Dinner Calorie</span>
                                                    <h5 class="mt-2"><?php echo $wednesday_dinner_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Thursday Breakfast</span>
                                                <h5 class="mt-2"><?php echo $thursday_breakfast; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Thursday Breakfast Calorie</span>
                                                    <h5 class="mt-2"><?php echo $thursday_snack_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Thursday Lunch</span>
                                                <h5 class="mt-2"><?php echo $thursday_lunch; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Thursday Lunch Calorie</span>
                                                    <h5 class="mt-2"><?php echo $thursday_lunch_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Thursday Snack</span>
                                                <h5 class="mt-2"><?php echo $thursday_snack; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Thursday Snack Calorie</span>
                                                    <h5 class="mt-2"><?php echo $thursday_snack_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Thursday Dinner</span>
                                                <h5 class="mt-2"><?php echo $thursday_dinner; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Thursday Dinner Calorie</span>
                                                    <h5 class="mt-2"><?php echo $thursday_dinner_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Friday Breakfast</span>
                                                <h5 class="mt-2"><?php echo $friday_breakfast; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Friday Breakfast Calorie</span>
                                                    <h5 class="mt-2"><?php echo $friday_breakfast_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Friday Lunch</span>
                                                <h5 class="mt-2"><?php echo $friday_lunch; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Friday Lunch Calorie</span>
                                                    <h5 class="mt-2"><?php echo $friday_lunch_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Friday Snack</span>
                                                <h5 class="mt-2"><?php echo $friday_snack; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Friday Snack Calorie</span>
                                                    <h5 class="mt-2"><?php echo $friday_snack_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Friday Dinner</span>
                                                <h5 class="mt-2"><?php echo $friday_dinner; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Friday Dinner Calorie</span>
                                                    <h5 class="mt-2"><?php echo $friday_dinner_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Saturday Breakfast</span>
                                                <h5 class="mt-2"><?php echo $saturday_breakfast; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Saturday Breakfast Calorie</span>
                                                    <h5 class="mt-2"><?php echo $saturday_breakfast_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Saturday Lunch</span>
                                                <h5 class="mt-2"><?php echo $saturday_lunch; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Saturday Lunch Calorie</span>
                                                    <h5 class="mt-2"><?php echo $saturday_lunch_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Saturday Snack</span>
                                                <h5 class="mt-2"><?php echo $saturday_snack; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Saturday Snack Calorie</span>
                                                    <h5 class="mt-2"><?php echo $saturday_snack_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Saturday Dinner</span>
                                                <h5 class="mt-2"><?php echo $saturday_dinner; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Saturday Dinner Calorie</span>
                                                    <h5 class="mt-2"><?php echo $saturday_dinner_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Sunday Breakfast</span>
                                                <h5 class="mt-2"><?php echo $sunday_breakfast; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Sunday Breakfast Calorie</span>
                                                    <h5 class="mt-2"><?php echo $sunday_breakfast_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Sunday Lunch</span>
                                                <h5 class="mt-2"><?php echo $sunday_lunch; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Sunday Lunch Calorie</span>
                                                    <h5 class="mt-2"><?php echo $sunday_lunch_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Sunday Snack</span>
                                                <h5 class="mt-2"><?php echo $sunday_snack; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Sunday Snack Calorie</span>
                                                    <h5 class="mt-2"><?php echo $sunday_snack_calorie_count; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">Sunday Dinner</span>
                                                <h5 class="mt-2"><?php echo $sunday_dinner; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">Sunday Dinner Calorie</span>
                                                    <h5 class="mt-2"><?php echo $sunday_dinner_calorie_count; ?></h5>
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